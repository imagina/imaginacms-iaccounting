<?php

namespace Modules\Iaccounting\Repositories\Cache;

use Modules\Iaccounting\Repositories\AccountingAccountRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheAccountingAccountDecorator extends BaseCacheCrudDecorator implements AccountingAccountRepository
{
    public function __construct(AccountingAccountRepository $accountingaccount)
    {
        parent::__construct();
        $this->entityName = 'iaccounting.accountingaccounts';
        $this->repository = $accountingaccount;
    }
}
