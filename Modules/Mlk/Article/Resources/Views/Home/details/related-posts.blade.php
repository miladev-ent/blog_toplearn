<div class="related-posts">
    <h3 class="mb-30">مقالات مرتبط</h3>
    <div class="row">
        @foreach ($relatedArticles as $article)
            <article class="col-lg-4">
                <div class="background-white border-radius-10 p-10 mb-30">
                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                        <a href="{{ $article->path() }}">
                            <img class="border-radius-15" src="{{ $article->imagePath }}" alt="article image">
                        </a>
                    </div>
                    <div class="pl-10 pr-10">
                        <div class="entry-meta mb-15 mt-10">
                            <a class="entry-meta meta-2" href="category.html">
                                <span class="post-in text-primary font-x-small">{{ $article->category->title }}</span>
                            </a>
                        </div>
                        <h5 class="post-title mb-15">
                            <a href="{{ $article->path() }}">{{ Illuminate\Support\Str::limit($article->title, 25) }}</a>
                        </h5>
                        <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                            <span class="post-by">توسط <a href="author.html">{{ $article->user->name }}</a></span>
                            <span class="post-on">{{ $article->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</div>
