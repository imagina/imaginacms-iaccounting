<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudModel;

class ApiKeys extends CrudModel
{
  protected $table = 'iaccounting__apikeys';
  public $transformer = 'Modules\Iaccounting\Transformers\ApiKeysTransformer';
  public $requestValidation = [
      'create' => 'Modules\Iaccounting\Http\Requests\CreateApiKeysRequest',
      'update' => 'Modules\Iaccounting\Http\Requests\UpdateApiKeysRequest',
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
}
