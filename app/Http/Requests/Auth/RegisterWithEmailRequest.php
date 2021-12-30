<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class RegisterWithEmailRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'firstname' => ['required', 'alpha_space'],
            'lastname' => ['required', 'alpha_space'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'password_format'],
            'test.*.name' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email ID',
            'password' => 'Password'
        ];
    }
}
