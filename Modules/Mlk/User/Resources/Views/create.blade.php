@extends('Panel::layouts.master')

@section('title', 'ساخت کاربر جدید')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">ساخت کاربر جدید</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="simpleinput">متن</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="simpleinput" class="form-control" value="متن دلخواه شما...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-email">ایمیل</label>
                                        <div class="col-sm-10">
                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="ایمیل">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-password">رمز عبور</label>
                                        <div class="col-sm-10">
                                            <input type="password" id="example-password" class="form-control" value="password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-placeholder">نگهدارنده متن</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="example-placeholder" class="form-control" placeholder="نگهدارنده متن">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-textarea">ناحیه متن</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label">فقط خواندنی</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" readonly="" value="مقدار فقط خواندنی">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label">غیر فعال</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" disabled="" value="مقدار غیرفعال">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-static">کنترل استاتیک</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly="" class="form-control-plaintext" id="example-static" value="ghaemomidi@yahoo.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-helping">متن راهنما</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="example-helping" class="form-control" placeholder="متن راهنما">
                                            <span class="help-block"><small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label">انتخاب</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <h6>چند انتخاب</h6>
                                            <select multiple="" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-fileinput">ورودی فایل پیش فرض</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="example-fileinput">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-date">تاریخ</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="example-date" type="date" name="date">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-month">ماه</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="example-month" type="month" name="month">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-time">زمان</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="time" name="time" id="example-time">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-week">هفته</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="week" name="week" id="example-week">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-number">عدد</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" name="number" id="example-number">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label">آدرس</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="url" name="url">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label">جست و جو</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="search" name="search">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label">تلفن</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="tel" name="tel">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-color">رنگ</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="color" name="color" value="#71b6f9" id="example-color">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <label class="col-sm-2  col-form-label" for="example-range">محدوده</label>
                                        <div class="col-md-10">
                                            <input class="custom-range" type="range" name="range" min="0" max="10" id="example-range">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mt-0 header-title">منوی انتخاب</h4>
                            <p class="text-muted font-14">
                                برای داشتن یک منوی <code class="highlighter-rouge">&lt;select&gt;</code> سفارشی کافیست کلاس <code class="highlighter-rouge">.custom-select</code> را به منوی انتخاب خود اضافه کنید.
                            </p>

                            <select class="custom-select mt-3">
                                <option selected="">این منوی انتخاب را باز کنید</option>
                                <option value="1">یک</option>
                                <option value="2">دو</option>
                                <option value="3">سه</option>
                            </select>

                            <h4 class="header-title mt-5">سوییچ</h4>
                            <p class="text-muted">
                                سوییچ همان چک باکس سفارشی است که از کلاس <code>.custom-switch</code> برای تبدیل به سوییچ استفاده می شود. سوییچ ها از ویژگی <code>disabled</code> نیز پشتیبانی می کنند.
                            </p>

                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">سوییچ معمولی</label>
                            </div>
                            <div class="custom-control custom-switch mt-1">
                                <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">سوییچ غیرفعال</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4 class="header-title">چک باکس و دکمه رادیویی</h4>
                            <div class="mt-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">چک باکس سفارشی</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">چک باکس سفارشی</label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">دکمه رادیویی سفارشی</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">یک دکمه رادیویی سفارشی دیگر</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">اندازه ها و گروه بندی ورودی ها</h4>
                    <p class="text-muted mb-3 font-14">
                        ارتفاع ورودی ها را با استفاده از کلاس هایی مانند <code>.input-lg</code> و عرض ها را با استفاده از کلاس هایی مانند <code>.col-lg-*</code> تغییر دهید.
                    </p>

                    <div class="p-2">
                        <form role="form" class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-input-small">کوچک</label>
                                <div class="col-sm-10">
                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-input-normal">معمولی</label>
                                <div class="col-sm-10">
                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="معمولی">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-input-large">بزرگ</label>
                                <div class="col-sm-10">
                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">اندازه های گرید</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder=".col-sm-4">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">استاتیک</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="نام کاربری" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">منوهای کشویی</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">منوی کشویی <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">اقدام</a>
                                                <a class="dropdown-item" href="#">اقدام دیگر</a>
                                                <a class="dropdown-item" href="#">گزینه دیگر</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">لینک جدا</a>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">دکمه ها</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="نام کاربری گیرنده" aria-label="نام کاربری گیرنده" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-dark waves-effect waves-light" type="button">دکمه</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="mt-0 mb-3 header-title">نمونه ساده</h4>

                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ایمیل</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل را وارد کنید">
                            <small id="emailHelp" class="form-text text-muted">ما ایمیل شما را با کسی به اشتراک نمی گذاریم.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">رمز عبور</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox0" type="checkbox">
                                <label for="checkbox0">
                                    من را انتخاب کن
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">پرداخت</button>
                    </form>
                </div>
            </div>
            <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="mt-0 mb-3 header-title">فرم افقی</h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">ایمیل</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="ایمیل">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">رمز عبور</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="رمز عبور">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-sm-3 col-form-label">تکرار رمز عبور</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword5" placeholder="تکرار رمز عبور">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class=" col-sm-9">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        من را انتخاب کن !
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-info waves-effect waves-light">ورود</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- end row -->


        <!-- Inline Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title">فرم درون خط</h4>
                    <p class="text-muted mb-3 font-13">
                        کلاس <code>.form-inline</code> را به فرم خود اضافه کنید. این قابلیت فقط در صفحه نمایش هایی کار می کند که حداقل عرض 768 پیکسل دارند.
                    </p>
                    <div class="row m-b-30">
                        <div class="col-sm-12">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="staticEmail2" class="sr-only">ایمیل</label>
                                    <input type="text" readonly="" class="form-control-plaintext" id="staticEmail2" value="ghaemomidi@yahoo.com">
                                </div>
                                <div class="form-group mx-sm-3">
                                    <label for="inputPassword2" class="sr-only">رمز عبور</label>
                                    <input type="password" class="form-control" id="inputPassword2" placeholder="رمز عبور">
                                </div>
                                <button type="submit" class="btn btn-primary">تایید هویت</button>
                            </form>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            <h6 class="font-13 mt-4">اندازه خودکار</h6>

                            <form>
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInput">نام</label>
                                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="قائم امیدی">
                                    </div>
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">نام کاربری</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="نام کاربری">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                            <label class="custom-control-label" for="autoSizingCheck">من را به خاطر بسپار</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">پرداخت</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <!-- Form row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">ردیف فرم</h4>
                    <p class="text-muted mb-3 font-13">
                        شما می توانید برای ستون بندی فرم ها به جای استفاده از <code class="highlighter-rouge">.row</code> از <code class="highlighter-rouge">.form-row</code> استفاده کنید.
                    </p>

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">ایمیل</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="ایمیل">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">رمز عبور</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="رمز عبور">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="col-form-label">آدرس</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="خیابان آزادی">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" class="col-form-label">آدرس 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="ساختمان 3 - طبقه 2">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity" class="col-form-label">شهر</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="col-form-label">استان</label>
                                <select id="inputState" class="form-control">
                                    <option>انتخاب کنید</option>
                                    <option>گزینه 1</option>
                                    <option>گزینه 2</option>
                                    <option>گزینه 3</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip" class="col-form-label">کد پستی</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkmeout">
                                <label class="custom-control-label" for="checkmeout">من را انتخاب کن</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ورود</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
