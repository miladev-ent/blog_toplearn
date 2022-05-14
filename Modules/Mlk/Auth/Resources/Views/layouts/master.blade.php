<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ادمین تو - قالب مدیریتی واکنش گرا</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="یک قالب مدیریتی با امکانات فراوان برای ساخت سی آر ام، سیستم مدیریت محتوا و ..." name="description" />
    <meta content="قائم امیدی" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin/images/favicon.ico">

    <!-- App css -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/css/app-rtl.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

<div class="home-btn d-none d-sm-block">
    <a href="index-2.html"><i class="fas fa-home h2 text-dark"></i></a>
</div>

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="text-center">
                    <a href="index-2.html">
                        <span><img src="admin/images/logo-dark.png" alt="تصویر" height="22"></span>
                    </a>
                    <p class="text-muted mt-2 mb-4">قالب مدیریتی واکنش گرا</p>
                </div>
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">ثبت نام</h4>
                        </div>

                        <form action="#">

                            <div class="form-group">
                                <label for="fullname">نام و نام خانوادگی</label>
                                <input class="form-control" type="text" id="fullname" placeholder="نام خود را وارد کنید" required>
                            </div>
                            <div class="form-group">
                                <label for="emailaddress">ایمیل</label>
                                <input class="form-control" type="email" id="emailaddress" required placeholder="ایمیل خود را وارد کنید">
                            </div>
                            <div class="form-group">
                                <label for="password">رمز عبور</label>
                                <input class="form-control" type="password" required id="password" placeholder="رمز عبور خود را وارد کنید">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                    <label class="custom-control-label" for="checkbox-signup"><a href="javascript: void(0);" class="text-dark">شرابط و قوانین</a> را می پذیرم</label>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> ثبت نام </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">حساب کاربری دارید؟  <a href="pages-login.html" class="text-dark ml-1"><b>وارد شوید</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<!-- Vendor js -->
<script src="admin/js/vendor.min.js"></script>

<!-- App js -->
<script src="admin/js/app.min.js"></script>

</body>
</html>
