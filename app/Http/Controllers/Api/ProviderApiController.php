<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Imagina\Icore\Http\Controllers\CoreApiController;
//Model
use Modules\Iaccounting\Models\Provider;
use Modules\Iaccounting\Repositories\ProviderRepository;

class ProviderApiController extends CoreApiController
{
  public function __construct(Provider $model, ProviderRepository $modelRepository)
  {
    parent::__construct($model, $modelRepository);
  }
}
