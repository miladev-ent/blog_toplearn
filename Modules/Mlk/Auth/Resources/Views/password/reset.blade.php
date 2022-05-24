@extends('Auth::layouts.master')

@section('title', 'رمز عبور جدید')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            @include('Auth::section.logo')
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h4 class="text-uppercase mt-0">ایجاد رمز عبور جدید</h4>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input class="form-control @error('email') is-invalid @enderror" value="{{ $email }}"
                            type="email" id="email" name="email" placeholder="ایمیل خود را وارد کنید">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">رمز عبور</label>
                            <input class="form-control @error('password') is-invalid @enderror"
                            type="password" id="password" name="password" placeholder="رمز عبور خود را وارد کنید">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">تایید رمز عبور</label>
                            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="تایید رمز عبور خود را وارد کنید">
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"> ذخیره </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">حساب کاربری ندارید؟
                        <a href="{{ route('auth.register') }}" class="text-dark ml-1"><b>ساخت حساب کاربری</b></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
