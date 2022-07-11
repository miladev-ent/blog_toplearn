<?php

namespace Mlk\Advertising\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisingRequest extends FormRequest
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
