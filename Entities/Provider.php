<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudModel;

class Provider extends CrudModel
{
  protected $table = 'iaccounting__providers';
  public $transformer = 'Modules\Iaccounting\Transformers\ProviderTransformer';
  public $requestValidation = [
    'create' => 'Modules\Iaccounting\Http\Requests\CreateProviderRequest',
    'update' => 'Modules\Iaccounting\Http\Requests\UpdateProviderRequest',
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
  protected $fillable = ['name', 'type_id', 'identification', 'external_id'];
}
