<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EntityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
        } 
        elseif($this->isMethod('put')) {
            return $this->updateRules();
        }
        elseif($this->isMethod('get'))
        {
            return $this->getRules();
        }
         else {
            return $this->deleteRules();
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
            'name' => ['required', 'regex:/^([a-za-z]+)(\s[a-za-z]+)*$/', 'max:20'],
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
            'id' => ['required'],
            'name' => ['required', 'regex:/^([a-za-z]+)(\s[a-za-z]+)*$/', 'max:20'],
        ];
    }

    public function getRules()
    {
        return [
            'id' => ['required'],
        ];
    }

    public function deleteRules()
    {
        return [
            'id' => ['required'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */

}