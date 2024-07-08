<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudModel;
use Modules\Media\Support\Traits\MediaRelation;

class Purchase extends CrudModel
{
  use MediaRelation;

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
  protected $fillable = [
    'document_type',
    'elaboration_date',
    'total',
    'subtotal',
    'currency_code',
    'payment_method',
    'invoice_items',
    'options'
  ];

  protected $casts = [
    'invoice_items' => 'array',
    'options' => 'array'
  ];
}
