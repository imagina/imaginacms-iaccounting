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
    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'origins',
      'controller' => 'OriginApiController',
      'permission' => 'iaccounting.origins',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []],
      // 'customRoutes' => [ // Include custom routes if needed
      //  [
      //    'method' => 'post', // get,post,put....
      //    'path' => '/some-path', // Route Path
      //    'uses' => 'ControllerMethodName', //Name of the controller method to use
      //    'middleware' => [] // if not set up middleware, auth:api will be the default
      //  ]
      // ]
    ]);
// append




});
