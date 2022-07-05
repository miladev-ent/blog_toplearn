<?php

namespace Mlk\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() === true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255|unique:users,name',
            'email' => 'required|email|min:3|max:255|unique:users,email',
            'password' => 'required|string|min:6|max:255',
            'telegram' => 'nullable|string|min:3|max:255|unique:users,telegram',
            'linkedin' => 'nullable|string|min:3|max:255|unique:users,linkedin',
            'twitter' => 'nullable|string|min:3|max:255|unique:users,twitter',
            'instagram' => 'nullable|string|min:3|max:255|unique:users,instagram',
            'bio' => 'nullable|string|min:3',
            'imageName' => 'nullable|string',
            'imagePath' => 'nullable|string',
        ];
    }
}
