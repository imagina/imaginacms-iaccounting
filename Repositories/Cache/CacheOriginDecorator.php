<?php

namespace Modules\Iaccounting\Repositories\Cache;

use Modules\Iaccounting\Repositories\OriginRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheOriginDecorator extends BaseCacheCrudDecorator implements OriginRepository
{
    public function __construct(OriginRepository $origin)
    {
        parent::__construct();
        $this->entityName = 'iaccounting.origins';
        $this->repository = $origin;
    }
}
