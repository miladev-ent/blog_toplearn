<div class="comments-area">
    <h3 class="mb-30">{{ $article->activeComments()->count() }} نظرات</h3>
    @foreach ($article->activeComments()->latest()->get() as $comment)
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="{{ $comment->user->image() }}" alt="user img">
                    </div>
                    <div class="desc">
                        <p class="comment">
                            {{ $comment->body }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="{{ $comment->user->path() }}">{{ $comment->user->name }}</a>
                                </h5>
                                <p class="date"> {{ jdate($comment->created_at)->format('%d %B %y') }}</p>
                            </div>
                            <div class="reply-btn">
                                <a href="#" class="btn-reply text-uppercase">پاسخ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($comment->comments as $commentReply)
            <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="{{ $commentReply->user->image() }}" alt="user img">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                {{ $commentReply->body }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                        <a href="{{ $commentReply->user->path() }}">{{ $commentReply->user->name }}</a>
                                    </h5>
                                    <p class="date"> {{ jdate($commentReply->created_at)->format('%d %B %y') }}</p>
                                </div>
                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">پاسخ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</div>
