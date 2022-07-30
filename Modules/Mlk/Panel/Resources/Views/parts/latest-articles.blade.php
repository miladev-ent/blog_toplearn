<div class="row">
    <div class="col-xl-12">
        <div class="card-box">
            <h4 class="header-title mt-0 mb-3">آخرین مقالات</h4>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>عکس مقالات</th>
                            <th>عنوان مقالات</th>
                            <th>وضعیت</th>
                            <th>نوع</th>
                            <th>زمان خوندن</th>
                            <th>امتیاز</th>
                            <th>دسته بندی</th>
                            <th>کاربر</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($panelRepo->getLatestArticles() as $article)
                            <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    <img src="{{ $article->imagePath }}" width="80">
                                </td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    <span class="badge badge-{{ $article->cssStatus() }}">
                                        @lang($article->status)
                                    </span>
                                </td>
                                <td>@lang($article->type)</td>
                                <td>{{ $article->time_to_read }} دقیقه </td>
                                <td>{{ $article->score }} امتیاز </td>
                                <td>{{ $article->category->title }}</td>
                                <td>{{ $article->user->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
