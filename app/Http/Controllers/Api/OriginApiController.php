<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Imagina\Icore\Http\Controllers\CoreApiController;
//Model
use Modules\Iaccounting\Models\Origin;
use Modules\Iaccounting\Repositories\OriginRepository;

class OriginApiController extends CoreApiController
{
  public function __construct(Origin $model, OriginRepository $modelRepository)
  {
    parent::__construct($model, $modelRepository);
  }
}
