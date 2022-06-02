@extends('Panel::layouts.master')

@section('title', 'لیست کاربران')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="float-right">
                        <a href="{{ route('users.create') }}" class="arrow-none btn btn-primary text-white" aria-expanded="false">
                            ساخت کاربر جدید
                        </a>
                    </div>
                    <h4 class="mt-0 header-title">لیست تمامی کاربران</h4>
                    @if (session()->has('success_delete'))
                        <br>
                        <div class="alert alert-success">{{ session()->get('success_delete') }}</div>
                    @endif
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>نام کاربری</th>
                                    <th>ایمیل</th>
                                    <th>وضعیت تایید ایمیل</th>
                                    <th>تاریخ عضویت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="text-center">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
{{--                                            <span class="badge badge-@if($user->email_verified_at)success @elseif(! $user->email_verified_at)danger @endif">--}}
                                            <span class="badge badge-{{ $user->cssStatusEmailVerifiedAt() }}">
                                                {{ $user->textStatusEmailVerifiedAt() }}
                                            </span>
                                        </td>
                                        <td>{{ jdate($user->created_at)->format('Y-m-d') }}</td>
                                        <td>
                                            <div class="row">
{{--                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">ویرایش</a>--}}
{{--                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-danger ml-1">حذف</a>--}}
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger ml-1">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
