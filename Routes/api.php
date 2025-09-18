<?php

use Illuminate\Support\Facades\Route;
use Modules\Iaccounting\Http\Controllers\Api\OriginApiController;
use Modules\Iaccounting\Http\Controllers\Api\PurchaseApiController;
use Modules\Iaccounting\Http\Controllers\Api\ProviderApiController;
// add-use-controller




Route::prefix('/iaccounting/v1')->group(function () {
    Route::apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'origins',
      'controller' => OriginApiController::class,
      'permission' => 'iaccounting.origins',
      'middleware' => ['index' => [], 'show' => [], 'update' => []],
      // 'customRoutes' => [ // Include custom routes if needed
      //  [
      //    'method' => 'post', // get,post,put....
      //    'path' => '/some-path', // Route Path
      //    'uses' => 'ControllerMethodName', //Name of the controller method to use
      //    'middleware' => [] // if not set up middleware, auth:api will be the default
      //  ]
      // ]
    ]);
    Route::apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'purchases',
      'controller' => PurchaseApiController::class,
      'permission' => 'iaccounting.purchases',
      'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => []],
      // 'customRoutes' => [ // Include custom routes if needed
      //  [
      //    'method' => 'post', // get,post,put....
      //    'path' => '/some-path', // Route Path
      //    'uses' => 'ControllerMethodName', //Name of the controller method to use
      //    'middleware' => [] // if not set up middleware, auth:api will be the default
      //  ]
      // ]
    ]);
    Route::apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'providers',
      'controller' => ProviderApiController::class,
      'permission' => 'iaccounting.providers',
      'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => []],
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
