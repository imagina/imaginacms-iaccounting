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
        'title' => trans('iaccounting::cms.label.pending'),
        'bg' => '#BBC9FE',
        'color' => '#3040C2',
      ],
      self::SENDING => [
        'id' => self::SENDING,
        'title' => trans('iaccounting::cms.label.sending'),
        'bg' => '#D6EEE0',
        'color' => '#185340',
      ],
      self::FAILED => [
        'id' => self::FAILED,
        'title' => trans('iaccounting::cms.label.failed'),
        'bg' => '#FCE0DF',
        'color' => '#881915',
      ]
    ];
  }
}
