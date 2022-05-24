@extends('Auth::layouts.master')

@section('title', 'بازیابی رمز عبور')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            @include('Auth::section.logo')
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h4 class="text-uppercase mt-0 mb-3">بازنشانی رمز عبور</h4>
                        <p class="text-muted mb-0 font-13">ایمیل خود را وارد کنید. ما راهنمای بازنشانی رمز عبور را برای شما ارسال می کنیم.  </p>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session()->get('message') }}</div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">{{ session()->get('error') }}</div>
                    @endif
                    <form action="{{ route('auth.password.send.email') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">ایمیل</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="ایمیل خود را وارد کنید">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"> بازنشانی رمز عبور </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">بازگشت به <a href="{{ route('login') }}" class="text-dark ml-1"><b>صفحه ورود</b></a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
