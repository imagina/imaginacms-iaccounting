<?php

namespace Modules\Iaccounting\Repositories\Cache;

use Modules\Iaccounting\Repositories\MappingRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheMappingDecorator extends BaseCacheCrudDecorator implements MappingRepository
{
    public function __construct(MappingRepository $mapping)
    {
        parent::__construct();
        $this->entityName = 'iaccounting.mappings';
        $this->repository = $mapping;
    }
}
