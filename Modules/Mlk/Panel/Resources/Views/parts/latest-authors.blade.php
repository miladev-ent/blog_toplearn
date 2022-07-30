<div class="row">
    @foreach ($panelRepo->getLatestAuthorUsers() as $author)
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <div class="avatar-lg float-left mr-3">
                        <img src="/admin/images/users/user-3.jpg" class="img-fluid rounded-circle" alt="{{ $author->name }}">
                    </div>
                    <div class="wid-u-info">
                        <h5 class="mt-0">{{ $author->name }}</h5>
                        <p class="text-muted mb-1 font-13 text-truncate">{{ $author->email }}</p>
                        <small class="text-warning"><b>نویسنده</b></small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
