<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'required' => ':attribute cannot be empty.',
            'email' => ':attribute must be a valid email address.',
            'unique' => ':attribute is already exist.',
            'alpha_space' => ':attribute should only contain letters and spaces.',
            'alpha_num_space' => 'The :attribute may only contain letters, numbers and spaces.',
            'password_format' => 'The :attribute must contain at least 8 characters, including uppercase, lowercase letter, a number and special character.'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        throw new HttpResponseException(
            response()->json(['errors' => $errors], 422)
        );
    }

}
