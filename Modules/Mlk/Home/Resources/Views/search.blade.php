@extends('Home::layouts.master')

@section('title', 'جستجو ' . $title)

@section('content')
    @foreach($articles as $article)
        <p>{{ $article->title }}</p>
    @endforeach
@endsection
