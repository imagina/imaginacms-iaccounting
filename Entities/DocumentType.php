<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudStaticModel;

class documentType extends CrudStaticModel
{
  const ELECTRONIC_INVOICE = 0;
  const SUPPORT_DOCUMENT = 1;

  public function __construct()
  {
    $this->records = [
      self::ELECTRONIC_INVOICE => [
        'id' => self::ELECTRONIC_INVOICE,
        'title' => trans('iaccounting::cms.label.electronicInvoice')
      ],
      self::SUPPORT_DOCUMENT => [
        'id' => self::SUPPORT_DOCUMENT,
        'title' => trans('iaccounting::cms.label.documentSupport')
      ]
    ];
  }
}
