<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required|unique:users,phone,'.$this->id,
            'email' => 'required|unique:users,email,'.$this->id,
            'role_id' => 'required|integer',
            'password' => 'required|min:8|confirmed',
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
            'id' => 'required',
            'name' => 'required',
            'phone' => 'required|unique:users,phone,'.$this->id,
            'email' => 'required|unique:users,email,'.$this->id,
            'password' => 'required|min:8|confirmed',
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
     * Get custom users for validator errors.
     *
     * @return array
     */

}