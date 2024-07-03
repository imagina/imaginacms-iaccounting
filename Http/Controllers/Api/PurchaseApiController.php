<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Iaccounting\Entities\Purchase;
use Modules\Iaccounting\Repositories\PurchaseRepository;

class PurchaseApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Purchase $model, PurchaseRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
