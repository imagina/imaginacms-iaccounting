<?php

namespace Modules\Iaccounting\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateAccountingAccountRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
          'name' => 'required|min:2',
          'external_id' => 'required',
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
