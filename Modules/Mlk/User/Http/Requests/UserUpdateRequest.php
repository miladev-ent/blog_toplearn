<?php

namespace Mlk\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() === true;
    }

    public function rules()
    {
        return [
            'name'      => 'required|string|min:3|max:190',
            'email'     => 'required|email|min:3|max:190|unique:users,email,' . request()->id,
            'password'  => 'nullable|string|min:6|max:190',
        ];
    }
}
