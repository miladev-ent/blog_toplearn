@extends('Auth::layouts.master')

@section('title', 'تایید ایمیل کاربری')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            @include('Auth::section.logo')
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif
            <div class="card text-center">
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h4 class="text-uppercase mt-0">تایید ایمیل</h4>
                    </div>
                    <img src="{{ asset('admin/images/mail_confirm.png') }}" alt="img" width="86" class="mx-auto d-block" />
                    <p class="text-muted font-14 mt-2">
                        یک ایمیل به
                        <b>{{ auth()->user()->email }}</b>
                        ارسال شده است. لطفا روی لینک موجود در ایمیل کلیک کنید.
                    </p>
                    <a href="#" onclick="event.preventDefault();document.getElementById('resend-verify-email').submit()"
                       class="btn btn-block btn-pink waves-effect waves-light mt-3">
                        ارسال دوباره لینک برای ایمیل
                    </a>
                    <form action="{{ route('verify.resend') }}" method="POST" id="resend-verify-email">@csrf</form>
                </div>
            </div>
        </div>
    </div>
@endsection
