<?php

namespace Modules\Iaccounting\Repositories\Cache;

use Modules\Iaccounting\Repositories\PurchaseRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CachePurchaseDecorator extends BaseCacheCrudDecorator implements PurchaseRepository
{
    public function __construct(PurchaseRepository $purchase)
    {
        parent::__construct();
        $this->entityName = 'iaccounting.purchases';
        $this->repository = $purchase;
    }
}
