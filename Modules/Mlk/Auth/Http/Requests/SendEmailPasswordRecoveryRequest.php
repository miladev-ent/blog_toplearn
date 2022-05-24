<?php

namespace Mlk\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailPasswordRecoveryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|min:3|max:190|exists:users,email',
        ];
    }
}
