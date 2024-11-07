<?php

namespace Modules\Iaccounting\Events\Handlers;


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
    $params = ['include' => 'city'];

    $provider = $providerRepository->getItem($providerId, $params);

    if ($provider) {
      $attributes["provider"] = $provider;
      $attributes["provider"]['city'] = $provider->city;
      $attributes["provider"]['typeName'] = $provider->typeName;
      $attributes["provider"]['kindPersonName'] = $provider->kindPersonName;
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
