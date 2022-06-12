@extends('Panel::layouts.master')

@section('title', 'لیست نظرات')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title">لیست تمامی نظرات</h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>عنوان نظرات</th>
                                    <th>وضعیت</th>
                                    <th>برای</th>
                                    <th>تعداد پاسخ ها</th>
                                    <th>کاربر</th>
                                    <th>تاریخ ساخت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                    <tr class="text-center">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $comment->title }}</td>
                                        <td>
                                            <span class="badge badge-dark">
                                                @lang($comment->status)
                                            </span>
                                        </td>
                                        <td>{{ $comment->commentable->title }}</td>
                                        <td>{{ $comment->comments->count() }}</td>
                                        <td>{{ $comment->user->name }}</td>
                                        <td>{{ jdate($comment->created_at)->format('Y-m-d') }}</td>
                                        <td>
                                            <div class="row">
                                                <form action="{{ route('comments.change.status.inactive', $comment->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-dark ml-1">
                                                        <i class="fas fa-minus-circle"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('comments.change.status.active', $comment->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-dark ml-1">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
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
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
