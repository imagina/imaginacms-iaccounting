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
    'invoice_date',
    'total',
    'subtotal',
    'currency_code',
    'invoice_items',
    'options',
    'provider_id',
    'accounting_account_id',
    'payment_method_id'
  ];

  protected $casts = [
    'invoice_items' => 'array',
    'options' => 'array'
  ];

  public function provider()
  {
    return $this->belongsTo(Provider::class);
  }

  public function accountingAccount()
  {
    return $this->belongsTo(Mapping::class);
  }

  public function getPaymentNameAttribute()
  {
    $payment = new PaymentMethod();

    return $payment->get($this->payment_method_id);
  }

  public function getDocumentTypeNameAttribute()
  {
    $payment = new documentType();

    return $payment->get($this->document_type);
  }
}
