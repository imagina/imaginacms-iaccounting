<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudStaticModel;

class KindPerson extends CrudStaticModel
{
  const PERSON = 0;
  const COMPANY = 1;

  public function __construct()
  {
    $this->records = [
      self::PERSON => [
        'id' => self::PERSON,
        'title' => trans('iaccounting::cms.label.person'),
        'sigoId' => 'Person'
      ],
      self::COMPANY => [
        'id' => self::COMPANY,
        'title' => trans('iaccounting::cms.label.company'),
        'sigoId' => 'Company'
      ]
    ];
  }
}
