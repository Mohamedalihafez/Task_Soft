<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'phone' => 'required|unique:users,phone,'.$this->id,
            'countryCode' => 'required|integer',
        ];
    }

    public function attributes():array
    {
        return [
            'date_of_birth.before_or_equal' => ' يجب ان يكون عمرك علي الاقل 20 عاما لتتمكن من الاشتراك معنا',
            'phone.unique' => ' رقم الهاتف مسجل لدينا بالفعل',
            'email.unique' => 'البريد الالكتروني مسجل لدينا بالفعل',
        ];
    }
}
