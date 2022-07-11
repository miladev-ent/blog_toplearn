@extends('Home::layouts.master')

@section('title', 'مقالات دسته بندی ' . $category->title)

@section('content')
    <main class="position-relative">
        <div class="archive-header text-center mb-50">
            <div class="container">
                <h2><span class="text-danger">دسته بندی {{ $category->title }}</span></h2>
                <div class="breadcrumb">
                    <span class="no-arrow">شما الان اینجا هستید::</span>
                    <a href="{{ route('home.index') }}" rel="nofollow">خانه</a>
                    <span></span>
                    {{ $category->title }}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 primary-sidebar sticky-sidebar sidebar-left order-2 order-md-1">
                    <div class="sidebar-widget widget_categories border-radius-10 bg-white mb-30">
                        <div class="widget-header position-relative mb-15">
                            <h5 class="widget-title"><strong>دسته بندی ها</strong></h5>
                        </div>
                        <ul class="font-small text-muted">
                            @foreach ($categories as $category)
                                <li class="cat-item cat-item-2">
                                    <a href="#">{{ $category->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 order-1 order-md-2">
                    <div class="row mb-50">
                        <div class="col-lg-12 col-md-12">
                            <div class="latest-post mb-50">
                                <div class="loop-grid">
                                    <div class="row">
                                        @foreach ($articles as $article)
                                            <article class="col-lg-4 col-md-12 wow fadeIn animated">
                                                <div class="background-white border-radius-10 p-10 mb-30">
                                                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                                        <a href="{{ $article->path() }}">
                                                            <img class="border-radius-15 style-article-img" src="{{ $article->imagePath }}"
                                                            alt="imagePath">
                                                        </a>
                                                    </div>
                                                    <div class="pl-10 pr-10">
                                                        <div class="entry-meta mb-15 mt-10">
                                                            <a class="entry-meta meta-2" href="{{ $article->category->path() }}">
                                                                <span class="post-in text-primary font-x-small">
                                                                    {{ $article->category->title }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <h5 class="post-title mb-15">
                                                            <a href="{{ $article->path() }}">
                                                                {{ Illuminate\Support\Str::limit($article->title) }}
                                                            </a>
                                                        </h5>
                                                        <p class="post-exerpt font-medium text-muted mb-30">
                                                            {{ Illuminate\Support\Str::limit($article->description) }}
                                                        </p>
                                                        <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                                            <span class="post-by">توسط
                                                                <a href="{{ $article->user->path() }}">{{ $article->user->name }}</a>
                                                            </span>
                                                            <span class="post-on">{{ $article->created_at->diffForHumans() }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-area mb-30">
                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
