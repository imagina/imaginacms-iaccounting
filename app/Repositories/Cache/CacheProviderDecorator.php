<?php

namespace Modules\Iaccounting\Repositories\Cache;

use Modules\Iaccounting\Repositories\ProviderRepository;
use Imagina\Icore\Repositories\Cache\CoreCacheDecorator;

class CacheProviderDecorator extends CoreCacheDecorator implements ProviderRepository
{
    public function __construct(ProviderRepository $provider)
    {
        parent::__construct();
        $this->entityName = 'iaccounting.providers';
        $this->repository = $provider;
    }
}
