<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class resetpasswordrequest extends FormRequest
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
        return [
            "password"=>'required|same:password_confirmation|min:8',
            'password_confirmation'=>'required|min:8',
        ];
    }
    public function messages()
    {
        return [
            'password.required'=>'vui lòng nhập password',
            'password.same'=>'Hai mậy khẩu không giống nhau',
            'password.min'=>'nhập mậy khẩu',
            'password_confirmation.required'=>'vui lòng nhập lại password',
            'password_confirmation.min'=>'vui lòng nhập lại password',
        ];
    }
}
