<?php

namespace Mlk\Advertising\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Mlk\Advertising\Models\Advertising;

class AdvertisingRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() === true;
    }

    public function rules()
    {
        $rules = [
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'link' => 'nullable|string|min:3|max:190',
            'title' => 'required|string|min:3|max:190',
            'location' => ['required', 'string', Rule::in(Advertising::$locations)],
        ];

        if (request()->method === 'PATCH') {
            $rules['image'] = 'nullable|file|mimes:jpg,jpeg,png|max:2048';
        }

        return $rules;
    }
}
