<?php

namespace Mlk\User\Services;

use Illuminate\Support\Facades\Hash;
use Mlk\User\Models\User;

class UserService
{
    public function store($request)
    {
        return User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
//            'password' => Hash::make($request->password),
        ]);
    }

    public function update($request, $id)
    {
        return User::query()->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }
}
