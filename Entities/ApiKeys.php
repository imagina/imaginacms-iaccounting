<?php

namespace Modules\Iaccounting\Entities;

use Astrotomic\Translatable\Translatable;
use Modules\Core\Icrud\Entities\CrudModel;

class ApiKeys extends CrudModel
{
  use Translatable;

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
  public $translatedAttributes = [];
  protected $fillable = [];
}
