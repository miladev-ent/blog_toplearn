@extends('Panel::layouts.master')

@section('title', 'ویرایش دسته بندی ' . $category->title)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">ویرایش دسته بندی {{ $category->title }}</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2">
                                <form class="form-horizontal" role="form" method="POST"
                                    action="{{ route('categories.update', $category->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="title">عنوان</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            value="{{ $category->title }}" id="title" name="title"
                                            placeholder="عنوان دسته بندی را وارد کنید">
                                            @error('title')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="keywords">کلمات کلیدی (اجباری نیست)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('keywords') is-invalid @enderror"
                                            value="{{ $category->keywords }}" id="keywords" name="keywords"
                                            placeholder="کلمات کلیدی دسته بندی را وارد کنید">
                                            @error('keywords')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="status">وضعیت دسته بندی</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('status') is-invalid @enderror" name="status">
                                                @foreach (Mlk\Category\Models\Category::$statuses as $status)
                                                    <option @if ($category->status === $status) selected @endif
                                                        value="{{ $status }}">@lang($status)
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('status')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="parent_id">زیر دسته (اجباری نیست)</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('parent_id') is-invalid @enderror" name="parent_id">
                                                <option value="" selected>زیر دسته دسته بندی را وارد کنید</option>
                                                @foreach ($categories as $cat)
                                                    <option @if ($category->parent_id === $cat->id) selected @endif
                                                        value="{{ $cat->id }}">{{ $cat->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('parent_id')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="description">توضیحات (اجباری نیست)</label>
                                        <div class="col-sm-10">
                                            <textarea rows="3" class="form-control @error('description') is-invalid @enderror"
                                            id="description" name="description"
                                            placeholder="توضیحات دسته بندی را وارد کنید">{{ $category->description }}</textarea>
                                            @error('description')
                                            <br>
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">ذخیره</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
