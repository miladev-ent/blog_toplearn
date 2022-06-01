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
            //
        ];
    }
}
