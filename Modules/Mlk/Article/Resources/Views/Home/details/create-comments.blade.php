<div class="comment-form">
    <h3 class="mb-30">ارسال نظرات</h3>
    <form class="form-contact comment_form" action="{{ route('comments.store') }}" id="commentForm" method="POST">
        @csrf
        <input type="hidden" name="commentable_id" value="{{ $article->id }}">
        <input type="hidden" name="commentable_type" value="{{ get_class($article) }}">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100 @error('body') is-invalid @enderror" name="body"
                    id="body" cols="30" rows="9" placeholder="نظر">{{ old('body') }}</textarea>
                    @error('body')
                        <br>
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="button button-contactForm">ارسال نظر</button>
        </div>
    </form>
</div>
