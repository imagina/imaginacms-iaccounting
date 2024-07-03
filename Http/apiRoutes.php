<?php

use Illuminate\Routing\Router;

Route::group(['prefix' =>'/iaccounting/v1'], function (Router $router) {
    $router->apiCrud([
      'module' => 'iaccounting',
      'prefix' => 'purchases',
      'controller' => 'PurchaseApiController',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []]
    ]);
// append

});
