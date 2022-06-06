@extends('Panel::layouts.master')

@section('title', 'ویرایش مقام ' . $role->name)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">ویرایش مقام {{ $role->name }}</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2">
                                <form class="form-horizontal" role="form" method="POST"
                                    action="{{ route('roles.update', $role->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ $role->id }}">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="name">عنوان</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $role->name }}" id="name" name="name" placeholder="عنوان مقام را وارد کنید">
                                            @error('name')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-12">
                                            @foreach ($permissions as $permission)
                                                <div class="checkbox checkbox-primary">
                                                    <input id="permission[{{ $permission->name }}]" type="checkbox"
                                                    name="permissions[{{ $permission->name }}]" value="{{ $permission->name }}"
                                                    @if ($role->hasPermissionTo($permission)) checked @endif>
                                                    <label for="permission[{{ $permission->name }}]">
                                                        @lang($permission->name)
                                                    </label>
                                                </div>
                                            @endforeach
                                            @error('permissions')
                                            <br>
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">ذخیره</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
