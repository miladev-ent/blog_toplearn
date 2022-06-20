<div class="post-carausel-1-items mb-50">
    @foreach ($homeRepo->vip_posts()->get() as $article)
        <div class="col">
            <div class="slider-single bg-white p-10 border-radius-15">
                <div class="img-hover-scale border-radius-10">
                    <a href="{{ $article->path() }}">
                        <img class="border-radius-10" src="{{ $article->imagePath }}" alt="{{ $article->title }}">
                    </a>
                </div>
                <h6 class="post-title pr-5 pl-5 mb-10 mt-15 text-limit-2-row">
                    <a href="{{ $article->path() }}">{{ $article->title }}</a>
                </h6>
                <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase pr-5 pb-15">
                    <span class="post-by">توسط <a href="author.html">{{ $article->user->name }}</a></span>
                    <span class="post-on">{{ $article->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
