<?php

namespace Modules\Iaccounting\Repositories\Cache;

use Modules\Iaccounting\Repositories\ApiKeysRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheApiKeysDecorator extends BaseCacheCrudDecorator implements ApiKeysRepository
{
    public function __construct(ApiKeysRepository $apikeys)
    {
        parent::__construct();
        $this->entityName = 'iaccounting.apikeys';
        $this->repository = $apikeys;
    }
}
