@extends('Home::layouts.master')

@section('title', 'صفحه اصلی')

@section('content')
    <main class="position-relative">
        @include('Home::parts.vip_posts', ['vip_posts' => $homeRepo]) {{-- Load Vip Posts --}}
        <div class="container">
            @include('Home::parts.advs_top') {{-- Load Advs Top --}}
            <div class="row">
                @include('Home::parts.sidebar_right') {{-- Load Sidebar Right --}}
                <div class="col-lg-10 col-md-9 order-1 order-md-2">
                    <div class="row">
                        @include('Home::parts.news_posts') {{-- Load News Posts --}}
                        @include('Home::parts.sidebar_left') {{-- Load Sidebar Left --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
