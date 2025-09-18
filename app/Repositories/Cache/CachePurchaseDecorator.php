<?php

namespace Modules\Iaccounting\Repositories\Cache;

use Modules\Iaccounting\Repositories\PurchaseRepository;
use Imagina\Icore\Repositories\Cache\CoreCacheDecorator;

class CachePurchaseDecorator extends CoreCacheDecorator implements PurchaseRepository
{
    public function __construct(PurchaseRepository $purchase)
    {
        parent::__construct();
        $this->entityName = 'iaccounting.purchases';
        $this->repository = $purchase;
    }
}
