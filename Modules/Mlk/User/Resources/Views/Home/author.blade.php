@extends('Home::layouts.master')

@section('title', 'نویسنده ' . $author->name)

@section('content')
    <main class="position-relative">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-2 d-none d-lg-block"></div>
                <div class="col-lg-8 col-md-12">
                    <div class="author-bio border-radius-10 bg-white p-30 mb-50">
                        <div class="author-image mb-30">
                            <a href="#"><img src="{{ $author->image() }}" alt="author image" class="avatar"></a>
                        </div>
                        <div class="author-info">
                            <h3>
                                <span class="vcard author">
                                    <span class="fn">
                                        <a href="#" rel="author">{{ $author->name }}</a>
                                    </span>
                                </span>
                            </h3>
                            <div class="author-description">
                                {{ $author->bio }}
                            </div>
                            {{-- TODO --}}
                            <a href="author.html" class="author-bio-link text-muted"><span class="ml-5 font-x-small"><ion-icon name="person-add"></ion-icon></span>این نویسنده را دنبال کنید</a>
                            <div class="author-social">
                                <ul class="author-social-icons">
                                    <li class="author-social-link-facebook">
                                        <a href="{{ $author->telegram }}" target="_blank">
                                            <img src="{{ asset('home/imgs/telegra.png') }}" alt="telegram">
                                        </a>
                                    </li>
                                    <li class="author-social-link-twitter">
                                        <a href="{{ $author->twitter }}" target="_blank"><i class="ti-twitter-alt"></i></a>
                                    </li>
                                    <li class="author-social-link-pinterest">
                                        <a href="{{ $author->linkedin }}" target="_blank"><i class="ti-linkedin"></i></a>
                                    </li>
                                    <li class="author-social-link-instagram">
                                        <a href="{{ $author->instagram }}" target="_blank"><i class="ti-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h2>همه پست های {{ $author->name }}</h2>
                    <hr class="wp-block-separator is-style-wide">
                    <div class="latest-post mb-50">
                        <div class="loop-list-style-1">
                            @foreach ($articles as $article)
                                <article class="p-10 background-white border-radius-10 mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="d-md-flex d-block">
                                        <div class="post-thumb post-thumb-big d-flex ml-15 border-radius-15 img-hover-scale">
                                            <a class="color-white" href="{{ $article->path() }}">
                                                <img class="border-radius-15" src="{{ $article->imagePath }}" alt="article image">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <div class="entry-meta mb-15 mt-10">
                                                <a class="entry-meta meta-2" href="{{ $article->category->path() }}">
                                                    <span class="post-in text-danger font-x-small">{{ $article->category->title }}</span>
                                                </a>
                                            </div>
                                            <h5 class="post-title mb-15 text-limit-2-row">
                                                <a href="{{ $article->path() }}">
                                                    {{ Illuminate\Support\Str::limit($article->title) }}
                                                </a>
                                            </h5>
                                            <p class="post-exerpt font-medium text-muted mb-30 d-none d-lg-block">
                                                {{ $article->description }}
                                            </p>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                                <span class="post-by">توسط
                                                    <a href="#">{{ $article->user->name }}</a>
                                                </span>
                                                <span class="post-on">({{ $article->created_at->diffForHumans() }})</span>
                                                <span class="time-reading">{{ $article->time_to_read }} دقیقه خوانده شد</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination-area mb-30">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
