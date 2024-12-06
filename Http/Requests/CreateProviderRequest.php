<?php

namespace Modules\Iaccounting\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateProviderRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
          'person_kind' => 'required',
          'name' => 'required|min:2',
          'type_id' => 'required',
          'identification' => 'required|min:4',
          'city_id' => 'required',
        ];
    }

    public function translationRules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }

    public function translationMessages()
    {
        return [];
    }

    public function getValidator(){
        return $this->getValidatorInstance();
    }
    
}
