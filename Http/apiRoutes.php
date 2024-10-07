<?php

use Illuminate\Routing\Router;

Route::group(['prefix' =>'/iaccounting/v1'], function (Router $router) {
    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'purchases',
      'controller' => 'PurchaseApiController',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);
    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'providers',
      'controller' => 'ProviderApiController',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);
    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'apikeys',
      'controller' => 'ApiKeysApiController',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);
    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'mappings',
      'controller' => 'MappingApiController',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);

    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'paymentMethods',
      'staticEntity' => 'Modules\Iaccounting\Entities\PaymentMethod',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);

    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'documentTypes',
      'staticEntity' => 'Modules\Iaccounting\Entities\DocumentType',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);

    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'documentTypePeople',
      'staticEntity' => 'Modules\Iaccounting\Entities\DocumentTypePerson',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);

    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'kindPeople',
      'staticEntity' => 'Modules\Iaccounting\Entities\KindPerson',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);
// append



});
