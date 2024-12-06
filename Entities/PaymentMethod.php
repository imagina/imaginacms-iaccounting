<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudStaticModel;

class PaymentMethod extends CrudStaticModel
{
  const CREDIT = 0;
  const CASH = 1;
  const BANKACCOUNT = 2;

  public function __construct()
  {
    $this->records = [
      self::CREDIT => [
        'id' => self::CREDIT,
        'title' => trans('iaccounting::cms.label.credit')
      ],
      self::CASH => [
        'id' => self::CASH,
        'title' => trans('iaccounting::cms.label.cash')
      ],
      self::BANKACCOUNT => [
        'id' => self::BANKACCOUNT,
        'title' => trans('iaccounting::cms.label.bankAccount')
      ]
    ];
  }
}
