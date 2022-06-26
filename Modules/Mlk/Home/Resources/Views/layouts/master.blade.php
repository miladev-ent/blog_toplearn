<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        @include('Home::section.meta')

        <title>@yield('title') | {{ config('app.name') }}</title>

        @include('Home::section.css')
    </head>
    <body>
        <!-- Preloader Start -->
{{--        @include('Home::section.preloader')--}}
        <div class="main-wrap">
            <!--Offcanvas sidebar-->
            @include('Home::section.sidebar')

            <!-- Main Header -->
            @include('Home::section.header')

            <!-- Main Wrap Start -->
            @yield('content')

            <!-- Footer Start-->
            @include('Home::section.footer')
        </div>
        <div class="dark-mark"></div>
        @include('Home::section.js')
        @include('sweetalert::alert') {{-- Load Sweet Alert --}}
    </body>
</html>
