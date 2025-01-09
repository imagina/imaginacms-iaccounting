<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Core\Icrud\Transformers\CrudResource;
use Modules\Iaccounting\Entities\Purchase;
use Modules\Iaccounting\Repositories\PurchaseRepository;
use Illuminate\Http\Request;

class PurchaseApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Purchase $model, PurchaseRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }

  public function analyzeImage(Request $request)
  {
    $attributes = $request->input('attributes') ?? [];
    $service = app("Modules\Iaccounting\Services\WebhookService");
    $originRepository = app("Modules\Iaccounting\Repositories\OriginRepository");
    try {
      $origins = $originRepository->getItemsBy(json_decode(json_encode(['filter' => []])));
      $origin = $origins[0] ?? null;

      $attributes['origin'] = CrudResource::transformData($origin);

      $httpResponse = $service->dispatchWebhook(['attributes' => $attributes], ['extra_url' => '/accounting/img']);
      $status = $httpResponse['code'];
      $data = $httpResponse['response'];

      $providerCity = $data->provider->city;

      $citiesRepository = app("Modules\Ilocations\Repositories\CityRepository");
      $params = ['filter' => ['search' => $providerCity]];

      $cities = $citiesRepository->getItemsBy(json_decode(json_encode($params)));
      $city = $cities[0] ?? null;

      $data->provider->cityId = $city ? $city->id : null;
      $data->provider->cityCode = $city ? $city->code : null;

      //Response
      $response = $data;
    } catch (\Exception $e) {
      $status = $this->getStatusError($e->getCode());
      $response = ['messages' => [['message' => $e->getMessage(), 'type' => 'error']]];
    }
    //Return response
    return response()->json($response ?? ['data' => 'Request successful'], $status ?? 200);
  }
}
