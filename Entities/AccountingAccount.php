<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudModel;

class AccountingAccount extends CrudModel
{
  protected $table = 'iaccounting__accountingaccounts';
  public $transformer = 'Modules\Iaccounting\Transformers\AccountingAccountTransformer';
  public $requestValidation = [
    'create' => 'Modules\Iaccounting\Http\Requests\CreateAccountingAccountRequest',
    'update' => 'Modules\Iaccounting\Http\Requests\UpdateAccountingAccountRequest',
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
  protected $fillable = ['name', 'external_id', 'parent_id'];
}
