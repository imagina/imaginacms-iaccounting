<?php

namespace Modules\Iaccounting\Events;

class PurchaseIsCreating
{

  public $entity;

  public function __construct($providerValue)
  {
    $this->entity = $providerValue;
  }

}