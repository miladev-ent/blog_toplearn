<?php

namespace Mlk\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Milwad\LaravelValidate\Rules\ValidStrongPassword;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255|unique:users,name',
            'email' => 'required|email|min:3|max:255|unique:users,email',
            'password' => ['required', 'string', 'min:6', 'max:255', new ValidStrongPassword()],
            'privacy' => 'required'
        ];
    }
}
