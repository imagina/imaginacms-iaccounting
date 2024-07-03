<?php

namespace Modules\Iaccounting\Entities;

use Astrotomic\Translatable\Translatable;
use Modules\Core\Icrud\Entities\CrudModel;

class Purchase extends CrudModel
{
  use Translatable;

  protected $table = 'iaccounting__purchases';
  public $transformer = 'Modules\Iaccounting\Transformers\PurchaseTransformer';
  public $requestValidation = [
      'create' => 'Modules\Iaccounting\Http\Requests\CreatePurchaseRequest',
      'update' => 'Modules\Iaccounting\Http\Requests\UpdatePurchaseRequest',
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
