<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudStaticModel;

class DocumentTypePerson extends CrudStaticModel
{
  const NIT = 0;
  const CC = 1;
  const DE = 2;
  const CE = 3;

  public function __construct()
  {
    $this->records = [
      self::NIT => [
        'id' => self::NIT,
        'title' => trans('iaccounting::cms.label.NIT')
      ],
      self::CC => [
        'id' => self::CC,
        'title' => trans('iaccounting::cms.label.CC')
      ],
      self::DE => [
        'id' => self::DE,
        'title' => trans('iaccounting::cms.label.DE')
      ],
      self::CE => [
        'id' => self::CE,
        'title' => trans('iaccounting::cms.label.CE')
      ]
    ];
  }
}
