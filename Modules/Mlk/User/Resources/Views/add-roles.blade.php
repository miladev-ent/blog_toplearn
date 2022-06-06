@extends('Panel::layouts.master')

@section('title', 'اد کردن مقام به کاربر')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">اد کردن مقام به کاربر</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2">
                                @if (count($errors) > 0)
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('users.add.role.store', $user_id) }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="role">مقام</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('role') is-invalid @enderror" name="role">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('role')
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
