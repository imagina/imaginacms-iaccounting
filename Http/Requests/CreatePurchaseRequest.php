<?php

namespace Modules\Iaccounting\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreatePurchaseRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
          'document_type' => 'required|min:2',
          'invoice_date' => 'required|min:2',
          'total' => 'required',
          'subtotal' => 'required',
          'payment_method' => 'required',
          'provider_id' => 'required',
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
