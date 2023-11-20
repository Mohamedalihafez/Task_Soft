<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the supervisor is authorized to make this request.
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
        return [
            'email' => ['required', 'email'],
            'password' => 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes():array
    {
        return [
            'date_of_birth.before_or_equal' => ' يجب ان يكون عمرك علي الاقل 20 عاما لتتمكن من الاشتراك معنا',
            'phone.unique' => ' رقم الهاتف مسجل لدينا بالفعل',
            'email.unique' => 'البريد الالكتروني مسجل لدينا بالفعل',
        ];
    }
}
