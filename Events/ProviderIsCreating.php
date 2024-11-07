<?php

namespace Modules\Iaccounting\Events;

class ProviderIsCreating
{

  public $entity;

  public function __construct($providerValue)
  {
    $this->entity = $providerValue;
  }

}