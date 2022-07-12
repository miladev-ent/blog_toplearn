@extends('Panel::layouts.master')

@section('title', 'لیست تبلیغات')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="float-right">
                        <a href="{{ route('advertisings.create') }}" class="arrow-none btn btn-primary text-white" aria-expanded="false">
                            ساخت تبلیغات جدید
                        </a>
                    </div>
                    <h4 class="mt-0 header-title">لیست تمامی تبلیغات</h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>عکس تبلیغات</th>
                                    <th>عنوان تبلیغات</th>
                                    <th>مکان</th>
                                    <th>لینک</th>
                                    <th>کاربر</th>
                                    <th>تاریخ ساخت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($advertisings as $advs)
                                    <tr class="text-center">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            <img src="{{ $advs->imagePath }}" width="80" class="img-thumbnail">
                                        </td>
                                        <td>{{ $advs->title }}</td>
                                        <td>
                                            <span class="badge badge-info">
                                                @lang($advs->location)
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ $advs->link }}" target="_blank">{{ $advs->link }}</a>
                                        </td>
                                        <td>{{ $advs->user->name }}</td>
                                        <td>{{ jdate($advs->created_at)->format('Y-m-d') }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('advertisings.edit', $advs->id) }}" class="btn btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('advertisings.destroy', $advs->id) }}" method="POST">
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
                        {{ $advertisings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
