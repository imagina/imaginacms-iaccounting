<?php

namespace Modules\Iaccounting\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Iaccounting\Entities\AccountingAccount;
use Modules\Iaccounting\Repositories\AccountingAccountRepository;

class AccountingAccountApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(AccountingAccount $model, AccountingAccountRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
