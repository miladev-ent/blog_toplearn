@extends('Panel::layouts.master')

@section('title', 'ویرایش مقاله ' . $article->title)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">ویرایش مقاله {{ $article->title }}</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('articles.update', $article->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ $article->id }}">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="title">عنوان</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            value="{{ $article->title }}" id="title" name="title" placeholder="عنوان مقاله را وارد کنید">
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
                                            value="{{ $article->keywords }}" id="keywords" name="keywords"
                                            placeholder="کلمات کلیدی مقاله را وارد کنید">
                                            @error('keywords')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="time_to_read">زمان برای خوانده شدن</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('time_to_read') is-invalid @enderror"
                                            value="{{ $article->time_to_read }}" id="time_to_read" name="time_to_read"
                                            placeholder="زمان برای خوانده شدن مقاله را وارد کنید">
                                            @error('time_to_read')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="status">وضعیت مقاله</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('status') is-invalid @enderror" name="status">
                                                @foreach (Mlk\Article\Models\Article::$statuses as $status)
                                                    <option @if ($article->status === $status) selected @endif
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
                                        <label class="col-sm-2 col-form-label" for="score">امتیاز مقاله</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('score') is-invalid @enderror" name="score">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            @error('score')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="type">نوع مقاله</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('type') is-invalid @enderror" name="type">
                                                @foreach (Mlk\Article\Models\Article::$types as $type)
                                                    <option @if ($article->type === $type) selected @endif
                                                        value="{{ $type }}">@lang($type)
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('type')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="category_id">دسته بندی</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                                @foreach ($categories as $category)
                                                    <option @if ($article->category_id === $category->id) selected @endif
                                                        value="{{ $category->id }}">{{ $category->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="body">توضیحات اصلی</label>
                                        <div class="col-sm-10">
                                            <textarea rows="3" class="form-control @error('body') is-invalid @enderror"
                                            id="body" name="body"
                                            placeholder="توضیحات اصلی مقاله را وارد کنید">{{ $article->body }}</textarea>
                                            @error('body')
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
                                            placeholder="توضیحات مقاله را وارد کنید">{{ $article->description }}</textarea>
                                            @error('description')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="image">عنوان</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                           id="image" name="image">
                                            @error('image')
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
