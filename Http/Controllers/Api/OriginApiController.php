<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Iaccounting\Entities\Origin;
use Modules\Iaccounting\Repositories\OriginRepository;

class OriginApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Origin $model, OriginRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
