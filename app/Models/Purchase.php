<?php

namespace Modules\Iaccounting\Models;

use Imagina\Icore\Models\CoreModel;

class Purchase extends CoreModel
{
  protected $table = 'iaccounting__purchases';
  public string $transformer = 'Modules\Iaccounting\Transformers\PurchaseTransformer';
  public string $repository = 'Modules\Iaccounting\Repositories\PurchaseRepository';
  public array $requestValidation = [
      'create' => 'Modules\Iaccounting\Http\Requests\CreatePurchaseRequest',
      'update' => 'Modules\Iaccounting\Http\Requests\UpdatePurchaseRequest',
    ];
  //Instance external/internal events to dispatch with extraData
  public array $dispatchesEventsWithBindings = [
    //eg. ['path' => 'path/module/event', 'extraData' => [/*...optional*/]]
    'created' => [['path' => 'Modules\Iaccounting\Events\PurchaseWasCreated']],
    'creating' => [],
    'updated' => [],
    'updating' => [],
    'deleting' => [],
    'deleted' => []
  ];
    protected $fillable = [
        'document_type',
        'invoice_date',
        'total',
        'subtotal',
        'currency_code',
        'invoice_items',
        'options',
        'provider_id',
        'payment_method_id',
        'status_id'
    ];
        
    protected $casts = [
        'invoice_items' => 'array',
        'options' => 'array'
    ];
}
