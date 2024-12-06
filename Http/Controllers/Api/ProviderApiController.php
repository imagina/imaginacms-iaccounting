<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Iaccounting\Entities\Provider;
use Modules\Iaccounting\Repositories\ProviderRepository;

class ProviderApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Provider $model, ProviderRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
