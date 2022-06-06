<?php

namespace Mlk\Role\Http\Controllers;

use App\Http\Controllers\Controller;
use Mlk\Role\Http\Requests\RoleRequest;
use Mlk\Role\Repositories\PermissionRepo;
use Mlk\Role\Repositories\RoleRepo;
use Mlk\Role\Services\RoleService;

class RoleController extends Controller
{
    public RoleRepo $repo;
    public RoleService $service;

    public function __construct(RoleRepo $roleRepo, RoleService $roleService)
    {
        $this->repo = $roleRepo;
        $this->service = $roleService;
    }

    public function index()
    {
        $roles = $this->repo->index()->paginate(10);
        return view('Role::index', compact('roles'));
    }

    public function create(PermissionRepo $permissionRepo)
    {
        $permissions = $permissionRepo->all();
        return view('Role::create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $this->service->store($request);
        return to_route('roles.index');
    }

    public function edit($id, PermissionRepo $permissionRepo)
    {
        $role = $this->repo->findById($id);
        $permissions = $permissionRepo->all();

        return view('Role::create', compact(['role', 'permissions']));
    }

    public function update(RoleRequest $request, $id)
    {
        $this->service->update($request, $id);
        return to_route('roles.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return to_route('roles.index');
    }
}
