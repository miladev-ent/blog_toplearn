@extends('Panel::layouts.master')

@section('title', 'ساخت مقاله جدید')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">ساخت مقاله جدید</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('articles.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="title">عنوان</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title') }}" id="title" name="title" placeholder="عنوان مقاله را وارد کنید">
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
                                            value="{{ old('keywords') }}" id="keywords" name="keywords"
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
                                            value="{{ old('time_to_read') }}" id="time_to_read" name="time_to_read"
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
                                                    <option value="{{ $status }}">@lang($status)</option>
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
                                                    <option value="{{ $type }}">@lang($type)</option>
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
                                                <option value="" selected>دسته بندی مقاله را وارد کنید</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="type_text">نوع متن مقاله</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('type_text') is-invalid @enderror" name="type_text">
                                                <option value="" selected>نوع متن مقاله را وارد کنید</option>
                                                @foreach (\Mlk\Article\Enums\TypeTextArticleEnum::cases() as $type)
                                                    <option value="{{ $type->value }}">@lang($type->value)</option>
                                                @endforeach
                                            </select>
                                            @error('type_text')
                                            <br>
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="body">توضیحات اصلی</label>
                                        <div class="col-sm-10">
                                            <textarea rows="3"
                                                class="form-control ckeditor @error('body') is-invalid @enderror"
                                                id="body"
                                                name="body"
                                                placeholder="توضیحات اصلی مقاله را وارد کنید"
                                                >{{ old('body') }}</textarea>
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
                                            placeholder="توضیحات مقاله را وارد کنید">{{ old('description') }}</textarea>
                                            @error('description')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="image">عکس</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="image">
                                            @error('image')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="video">ویدیو</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control @error('video') is-invalid @enderror"
                                            id="video" name="video">
                                            @error('video')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <x-panel-button />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
