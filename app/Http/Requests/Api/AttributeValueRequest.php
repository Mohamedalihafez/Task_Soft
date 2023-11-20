<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AttributeValueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize( )
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('POST')) {
            return $this->createRules();
        } else {
            return $this->updateRules();
        }
    }

    /**
     * Get the create validation rules that apply to the request.
     *
     * @return array
     */
    public function createRules()
    {
        
        return [
            'entity_id'=>' required|exists:entities,id',
            'attribute_ids' => 'required|exists:attributes,id|array',
            'attribute_ids.*' => 'required|integer',
            'values' => 'required|array',
            'values.*' => 'required',
        ];
    }

    /**
     * Get the update validation rules that apply to the request.
     *
     * @return array
     */
    public function updateRules()
    {
        return [
            'entity_id'=>' required|exists:entities,id',
            'attribute_ids' => 'required|exists:attributes,id|array',
            'attribute_ids.*' => 'required|integer',
            'values' => 'required|array',
            'values.*' => 'required',
            'id'=> 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */

}
