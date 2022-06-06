<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>خطای 404 - صفحه یافت نشد</title>

        @include('Home::section.css')
    </head>
    <body>
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img class="jump mb-50" src="{{ asset('assets/imgs/loading.svg') }}" alt="loading">
                        <h6>در حال بارگذاری</h6>
                        <div class="loader">
                            <div class="bar bar1"></div>
                            <div class="bar bar2"></div>
                            <div class="bar bar3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-wrap">
            <main class="position-relative">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-12">
                            <div class="content-404 text-center mb-30">
                                <h1 class="mb-30">404</h1>
                                <p>صفحه مورد نظر شما یافت نشد.</p>
                                <p class="text-muted">ممکن است آدرس را اشتباه تایپ کرده باشید یا از پیوند قدیمی استفاده کرده باشید :) </p>
                                <p>بازدید از <a href="{{ route('home.index') }}">صفحه نخست</a> یا در مورد مشکل <a href="contact.html">با ما تماس بگیرید</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="dark-mark"></div>
        @include('Home::section.js')
    </body>
</html>
