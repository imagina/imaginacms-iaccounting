<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Imagina\Icore\Http\Controllers\CoreApiController;
//Model
use Modules\Iaccounting\Models\Purchase;
use Modules\Iaccounting\Repositories\PurchaseRepository;

class PurchaseApiController extends CoreApiController
{
  public function __construct(Purchase $model, PurchaseRepository $modelRepository)
  {
    parent::__construct($model, $modelRepository);
  }
}
