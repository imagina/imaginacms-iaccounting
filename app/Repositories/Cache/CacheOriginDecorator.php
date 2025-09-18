<?php

namespace Modules\Iaccounting\Repositories\Cache;

use Modules\Iaccounting\Repositories\OriginRepository;
use Imagina\Icore\Repositories\Cache\CoreCacheDecorator;

class CacheOriginDecorator extends CoreCacheDecorator implements OriginRepository
{
    public function __construct(OriginRepository $origin)
    {
        parent::__construct();
        $this->entityName = 'iaccounting.origins';
        $this->repository = $origin;
    }
}
