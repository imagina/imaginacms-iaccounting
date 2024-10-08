<?php

namespace Modules\Iaccounting\Entities;

use Modules\Core\Icrud\Entities\CrudModel;
use Modules\Ilocations\Entities\City;

class Provider extends CrudModel
{
  protected $table = 'iaccounting__providers';
  public $transformer = 'Modules\Iaccounting\Transformers\ProviderTransformer';
  public $requestValidation = [
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
    'identification',
    'check_digit',
    'address',
    'indicative_phone',
    'phone_number',
    'city_id',
    'external_id'
  ];

  public function city()
  {
    return $this->belongsTo(City::class);
  }

  public function getTypeNameAttribute()
  {
    $type = new DocumentTypePerson();

    return $type->show($this->type_id);
  }

  public function getKindPersonNameAttribute()
  {
    $kindPerson = new KindPerson();

    return $kindPerson->show($this->person_kind);
  }
}
