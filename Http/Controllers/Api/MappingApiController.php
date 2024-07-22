<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Iaccounting\Entities\Mapping;
use Modules\Iaccounting\Repositories\MappingRepository;

class MappingApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Mapping $model, MappingRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
