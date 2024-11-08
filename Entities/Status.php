<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudStaticModel;

class Status extends CrudStaticModel
{
  const PENDING = 0;
  const SENDING = 1;
  const FAILED = 2;

  public function __construct()
  {
    $this->records = [
      self::PENDING => [
        'id' => self::PENDING,
        'title' => trans('iaccounting::cms.label.pending')
      ],
      self::SENDING => [
        'id' => self::SENDING,
        'title' => trans('iaccounting::cms.label.sending')
      ],
      self::FAILED => [
        'id' => self::FAILED,
        'title' => trans('iaccounting::cms.label.failed')
      ]
    ];
  }
}
