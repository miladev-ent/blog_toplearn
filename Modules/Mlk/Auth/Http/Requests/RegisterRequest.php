<?php

namespace Mlk\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:3|max:255|unique:users,email',
            'password' => 'required|string|min:6|max:255',
            'privacy' => 'required'
        ];
    }
}
