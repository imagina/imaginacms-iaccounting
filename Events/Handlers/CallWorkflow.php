<?php

namespace Modules\Iaccounting\Events\Handlers;


use Modules\Core\Icrud\Transformers\CrudResource;

class CallWorkflow
{
  public function handle($event = null)
  {
    if(!isset($event)) return null;
    $entity = $event->entity;
    if(!isset($entity)) return null;

    $attributes = $entity["data"];

    $providerId = $attributes["provider_id"];

    $providerRepository = app("Modules\Iaccounting\Repositories\ProviderRepository");
    $originRepository = app("Modules\Iaccounting\Repositories\OriginRepository");
    $origins = $originRepository->getItemsBy(json_decode(json_encode([])));

    $origin = $origins[0] ?? null;

    if($origin) {
      $attributes["origin"] = CrudResource::transformData($origin);
    }

    $params = ['include' => 'city'];

    $provider = $providerRepository->getItem($providerId, $params);

    if ($provider) {
      $attributes["provider"] = $provider;
      $attributes["city"] = $provider->city;
      $attributes["typeName"] = $provider->typeName;
      $attributes["kindPersonName"] = $provider->kindPersonName;
    }

    $service = app("Modules\Iaccounting\Services\WebhookService");
    try {
      $httpResponse = $service->dispatchWebhook(['attributes' => $attributes], ['extra_url' => '/accounting/purchases']);
      $status = $httpResponse['code'];
      $data = $httpResponse['response'];
      dd($data);

      $event->entity["data"]["external_id"] = $data["id"];

    } catch (\Exception $e) {
    }
  }
}
