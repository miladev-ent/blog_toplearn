<?php

namespace Mlk\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Mlk\Role\Repositories\RoleRepo;
use Mlk\User\Http\Requests\AddRoleRequest;
use Mlk\User\Http\Requests\UserRequest;
use Mlk\User\Http\Requests\UserUpdateRequest;
use Mlk\User\Repositories\UserRepo;
use Mlk\User\Services\UserService;

class UserController extends Controller
{
    // SOLID
    // S => Single Responsibility Principle
    //    public function show($id)
    //    {
    //        abort(404);
    //    }

    public UserRepo $repo;
    public UserService $service;

    public function __construct(UserRepo $userRepo, UserService $userService)
    {
        $this->repo = $userRepo;
        $this->service = $userService;
    }

    public function index()
    {
        $users = $this->repo->index();
        return view('User::index', compact('users'));
    }

    public function create()
    {
        return view('User::create');
    }

    public function store(UserRequest $request)
    {
        $this->service->store($request);
        return to_route('users.index');
    }

    public function edit($id)
    {
        $user = $this->repo->findById($id);
        return view('User::edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->service->update($request, $id);
        return to_route('users.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return to_route('users.index')->with(['success_delete' => 'کاربر با موفقیت حذف شد']);
    }

    // Role
    public function addRole($user_id, RoleRepo $roleRepo)
    {
        $roles = $roleRepo->index()->get();
        return view('User::add-roles', compact(['user_id', 'roles']));
    }

    public function addRoleStore(AddRoleRequest $request, $userId)
    {
        $user = $this->repo->findById($userId);
        $this->service->addRole($request->role, $user);

        alert()->success('اد کردن مقام به کاربر', 'عملیات با موفقیت انجام شد');
        return to_route('users.index');
    }

    public function removeRole($userId, $roleId, RoleRepo $roleRepo)
    {
        $user = $this->repo->findById($userId);
        $role = $roleRepo->findById($roleId);
        $this->service->deleteRole($user, $role->name);

        alert()->success('حذف کردن مقام', 'عملیات با موفقیت انجام شد');
        return to_route('users.index');
    }
}
