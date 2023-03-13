@extends('Panel::layouts.master')

@section('title', 'لیست مقالات')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="float-right">
                        <a href="{{ route('articles.create') }}" class="arrow-none btn btn-primary text-white" aria-expanded="false">
                            ساخت مقالات جدید
                        </a>
                    </div>
                    <h4 class="mt-0 header-title">لیست تمامی مقالات</h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>عکس مقالات</th>
                                    <th>عنوان مقالات</th>
                                    <th>وضعیت</th>
                                    <th>نوع</th>
                                    <th>زمان خوندن</th>
                                    <th>امتیاز</th>
                                    <th>دسته بندی</th>
                                    <th>کاربر</th>
                                    <th>نوع متن مقاله</th>
                                    <th>تاریخ ساخت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
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
                                        <td>@lang($article->type_text)</td>
                                        <td>{{ jdate($article->created_at)->format('Y-m-d') }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('articles.change.status', $article->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-dark ml-1">
                                                        <i class="fas fa-spinner"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger ml-1">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
