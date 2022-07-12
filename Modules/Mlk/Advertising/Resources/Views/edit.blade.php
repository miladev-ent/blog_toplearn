@extends('Panel::layouts.master')

@section('title', 'ویرایش تبلیغات ' . $advertising->title)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">ویرایش تبلیغات {{ $advertising->title }}</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('advertisings.update', $advertising->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="title">عنوان</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            value="{{ $advertising->title }}" id="title" name="title" placeholder="عنوان تبلیغات را وارد کنید">
                                            @error('title')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="link">لینک (اجباری نیست)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                            value="{{ $advertising->link }}" id="link" name="link"
                                            placeholder="لینک تبلیغات را وارد کنید">
                                            @error('link')
                                                <br>
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> policy
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="location">مکان تبلیغات</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('location') is-invalid @enderror" name="location"
                                                id="location">
                                                @foreach (Mlk\Advertising\Models\Advertising::$locations as $location)
                                                    <option @if ($advertising->location === $location) selected @endif
                                                        value="{{ $location }}">@lang($location)
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('location')
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
