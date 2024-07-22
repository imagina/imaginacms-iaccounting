<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Iaccounting\Entities\ApiKeys;
use Modules\Iaccounting\Repositories\ApiKeysRepository;

class ApiKeysApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(ApiKeys $model, ApiKeysRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
