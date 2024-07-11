<?php

namespace Modules\Iaccounting\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateProviderRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
          'person_kind' => 'required|min:2',
          'name' => 'required|min:2',
          'type_id' => 'required|min:2',
          'identification' => 'required|min:2',
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
