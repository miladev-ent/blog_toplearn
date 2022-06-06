<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>@yield('title') | {{ config('app.name') }}</title>

        @include('Panel::section.css') {{-- Load Css --}}
    </head>
    <body>
        <div id="wrapper">
            @include('Panel::section.navbar') {{-- Load Navbar --}}
            @include('Panel::section.sidebar') {{-- Load Sidebar --}}
            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>
                @include('Panel::section.footer')
            </div>
        </div>
        <div class="rightbar-overlay"></div>
        @include('Panel::section.js') {{-- Load Js --}}
        @include('sweetalert::alert') {{-- Load Sweet Alert --}}
    </body>
</html>
