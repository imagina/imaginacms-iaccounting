<?php

namespace Modules\Iaccounting\Events;

class PurchaseWasCreated
{

  public $entity;

  public function __construct($providerValue)
  {
    $this->entity = $providerValue;
  }

}