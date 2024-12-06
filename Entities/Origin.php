<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudModel;
use Modules\Isite\Relations\EmptyRelation;

class Origin extends CrudModel
{
  protected $table = 'iaccounting__origins';
  public $transformer = 'Modules\Iaccounting\Transformers\OriginTransformer';
  public $repository = 'Modules\Iaccounting\Repositories\OriginRepository';
  public $requestValidation = [
      'create' => 'Modules\Iaccounting\Http\Requests\CreateOriginRequest',
      'update' => 'Modules\Iaccounting\Http\Requests\UpdateOriginRequest',
    ];
  //Instance external/internal events to dispatch with extraData
  public $dispatchesEventsWithBindings = [
    //eg. ['path' => 'path/module/event', 'extraData' => [/*...optional*/]]
    'created' => [],
    'creating' => [],
    'updated' => [],
    'updating' => [],
    'deleting' => [],
    'deleted' => []
  ];
  protected $fillable = ['name', 'slug', 'params', 'options'];

  protected $casts = [
    'params' => 'array',
    'options' => 'array'
  ];

  public function externalObjects()
  {
    if (is_module_enabled('Ilinker')) {
      return $this->morphOne(\Modules\Ilinker\Entities\ExternalObjectMapping::class, 'entity');
    }
    return new EmptyRelation();
  }
}
