@extends('Panel::layouts.master')

@section('title', 'لیست دسته بندی')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="float-right">
                        <a href="{{ route('categories.create') }}" class="arrow-none btn btn-primary text-white" aria-expanded="false">
                            ساخت دسته بندی جدید
                        </a>
                    </div>
                    <h4 class="mt-0 header-title">لیست تمامی دسته بندی</h4>
                    @if (session()->has('success_message'))
                        <br>
                        <div class="alert alert-success">{{ session()->get('success_message') }}</div>
                    @endif
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>عنوان دسته بندی</th>
                                    <th>وضعیت</th>
                                    <th>زیر دسته</th>
                                    <th>کاربر</th>
                                    <th>تاریخ ساخت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr class="text-center">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->title }}</td>
                                        <td>
                                            <span class="badge badge-primary">
                                                @lang($category->status)
                                            </span>
                                        </td>
                                        <td>{{ $category->getParent() }}</td>
                                        <td>{{ $category->user->name }}</td>
                                        <td>{{ jdate($category->created_at)->format('Y-m-d') }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('categories.change.status', $category->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-dark ml-1">
                                                        <i class="fas fa-spinner"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
