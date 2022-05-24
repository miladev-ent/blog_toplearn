@extends('Auth::layouts.master')

@section('title', 'ثبت نام')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            @include('Auth::section.logo')
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h4 class="text-uppercase mt-0">ثبت نام</h4>
                    </div>
                    <form action="{{ route('auth.register.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">نام و نام خانوادگی</label>
                            <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                            type="text" id="name" name="name" placeholder="نام خود را وارد کنید">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            type="email" id="email" name="email" placeholder="ایمیل خود را وارد کنید">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">رمز عبور</label>
                            <input class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
                            type="password" id="password" name="password" placeholder="رمز عبور خود را وارد کنید">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="privacy" name="privacy" value="1">
                                <label class="custom-control-label" for="privacy">
                                    <a href="javascript: void(0);" class="text-dark">شرابط و قوانین</a> را می پذیرم
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"> ثبت نام </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">حساب کاربری دارید؟
                        <a href="{{ route('login') }}" class="text-dark ml-1"><b>وارد شوید</b></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
