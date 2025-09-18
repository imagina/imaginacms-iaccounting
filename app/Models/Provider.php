<?php

namespace Modules\Iaccounting\Models;

use Imagina\Icore\Models\CoreModel;

class Provider extends CoreModel
{
  protected $table = 'iaccounting__providers';
  public string $transformer = 'Modules\Iaccounting\Transformers\ProviderTransformer';
  public string $repository = 'Modules\Iaccounting\Repositories\ProviderRepository';
  public array $requestValidation = [
      'create' => 'Modules\Iaccounting\Http\Requests\CreateProviderRequest',
      'update' => 'Modules\Iaccounting\Http\Requests\UpdateProviderRequest',
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
    protected $fillable = [
        'person_kind',
        'name',
        'lastname',
        'type_id',
        'email',
        'identification',
        'check_digit',
        'address',
        'indicative_phone',
        'phone_number',
        'city_id',
        'external_id'
    ];
}
