<?php

namespace Mlk\Role\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() === true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|string|min:3|max:190|unique:roles,name',
            'permissions' => 'required|array|min:1',
        ];

        if (request()->method === 'PATCH') {
            $rules['name'] = 'required|string|min:3|max:190|unique:roles,name,' . request()->id;
            $rules['permissions'] = 'nullable|array|min:1';
        }

        return $rules;
    }

    public function attributes()
    {
        return ['permissions' => 'دسترسی ها'];
    }
}
