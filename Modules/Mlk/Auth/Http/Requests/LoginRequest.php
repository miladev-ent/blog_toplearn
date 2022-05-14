<?php

namespace Mlk\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|string|min:3|max:255|exists:users,email',
            'password' => 'required|string|min:8|max:255'
        ];
    }
}
