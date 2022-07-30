@extends('Panel::layouts.master')

@section('title', 'پنل کاربری')

@section('content')
    <div class="container-fluid">
        @include('Panel::parts.counter')
        @include('Panel::parts.latest-authors')
        @include('Panel::parts.latest-articles')
    </div>
@endsection
