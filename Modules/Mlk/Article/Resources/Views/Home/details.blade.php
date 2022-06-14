@extends('Home::layouts.master')

@section('title', $article->title)

@section('content')
    <main class="position-relative" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="entry-header entry-header-1 mb-30 mt-50">
                <div class="entry-meta meta-0 font-small mb-30">
                    <a href="">
                        <span class="post-cat bg-success color-white">{{ $article->category->title }}</span>
                    </a>
                </div>
                <h1 class="post-title mb-30">
                    {{ $article->title }}
                </h1>
                <div class="entry-meta meta-1 font-x-small color-grey text-uppercase">
                    <span class="post-by">توسط <a href="author.html"> {{ $article->user->name }}</a></span>
                    <span class="post-on">تاریخ انتشار : {{ jdate($article->created_at)->format('Y-m-d') }}</span>{{-- TODO --}}
                    <span class="time-reading">زمان خواندن {{ $article->time_to_read }} دقیقه</span>
                    <p class="font-x-small mt-10">
                        <span class="hit-count"><i class="ti-comment ml-5"></i>نظرات 82</span>
                        <span class="hit-count"><i class="ti-heart ml-5"></i>لایک {{ $article->likers()->count() }}</span>
                        <span class="hit-count"><i class="ti-star ml-5"></i>امتیاز {{ $article->score }}/10</span>
                    </p>
                </div>
            </div>
            <div class="row mb-50" style="transform: none;">
                <div class="col-lg-8 col-md-12">
                    <div class="single-social-share single-sidebar-share mt-30">
                        <ul>
                            <li><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                            <li><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                            <li><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                            <li><a class="social-icon linkedin-icon text-xs-center" target="_blank" href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a class="social-icon email-icon text-xs-center" target="_blank" href="#"><i class="ti-email"></i></a></li>
                        </ul>
                    </div>
                    <div class="bt-1 border-color-1 mb-30"></div>
                    <figure class="single-thumnail mb-30">
                        <img src="{{ $article->imagePath }}" alt="{{ $article->title }}">
                    </figure>
                    <div class="entry-main-content">
                        <h2>توضیحات</h2>
                        <hr class="wp-block-separator is-style-wide">
                        <p>
                            {!! $article->body !!}
                        </p>
                        <p class="text-center mt-30">
                            <a href="#"><img class="d-inline border-radius-10" src="{{ asset('assets/imgs/ads.jpg') }}" alt=""></a>
                        </p>
                    </div>
                    <div class="entry-bottom mt-50 mb-30">
                        <div class="overflow-hidden mt-30">
                            <div class="tags float-right text-muted mb-md-30">
                                <span class="font-small ml-10"><i class="fa fa-tag ml-5"></i>برچسب ها: </span>
                                <a href="category.html" rel="tag">فناوری</a>
                                <a href="category.html" rel="tag">جهان</a>
                                <a href="category.html" rel="tag">جهانی</a>
                            </div> {{-- TODO --}}
                            <div class="single-social-share float-left">
                                <ul class="d-inline-block list-inline">
                                    <li class="list-inline-item"><span class="font-small text-muted"><i class="ti-sharethis ml-5"></i>اشتراک: </span></li>
                                    <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="social-icon linkedin-icon text-xs-center" target="_blank" href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>{{-- TODO --}}
                            </div>
                        </div>
                    </div>
                    <div class="author-bio border-radius-10 bg-white p-30 mb-40">
                        <div class="author-image mb-30">
                            <a href="author.html">
                                <img src="assets/imgs/authors/author.png" alt="" class="avatar">
                            </a>
                        </div>
                        <div class="author-info">
                            <h3>
                                <span class="vcard author">
                                    <span class="fn">
                                        <a href="author.html" rel="author">{{ $article->user->name }}</a>
                                    </span>
                                </span>
                            </h3>
                            <h5 class="text-muted">
                                <span class="ml-15">نویسنده نخبه</span>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                            </h5>
                            <div class="author-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز. </div>
                            <a href="author.html" class="author-bio-link text-muted">مشاهده همه پست ها</a>
                            <div class="author-social">
                                <ul class="author-social-icons">
                                    <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                    <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                    <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                                    <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--related posts-->
                    <div class="related-posts">
                        <h3 class="mb-30">پست های مرتبط</h3>
                        <div class="row">
                            <article class="col-lg-4">
                                <div class="background-white border-radius-10 p-10 mb-30">
                                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                        <a href="single.html">
                                            <img class="border-radius-15" src="assets/imgs/news-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pl-10 pr-10">
                                        <div class="entry-meta mb-15 mt-10">
                                            <a class="entry-meta meta-2" href="category.html"><span class="post-in text-primary font-x-small">سیاسی</span></a>
                                        </div>
                                        <h5 class="post-title mb-15">
                                                <span class="post-format-icon">
                                                    <ion-icon name="image-outline" role="img" class="md hydrated" aria-label="image outline"></ion-icon>
                                                </span>
                                            <a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی </a></h5>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                            <span class="post-by">توسط <a href="author.html">الناز روستایی</a></span>
                                            <span class="post-on">8 دقیقه پیش</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-lg-4">
                                <div class="background-white border-radius-10 p-10 mb-30">
                                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                        <a href="single.html">
                                            <img class="border-radius-15" src="assets/imgs/news-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pl-10 pr-10">
                                        <div class="entry-meta mb-15 mt-10">
                                            <a class="entry-meta meta-2" href="category.html"><span class="post-in text-success font-x-small">فناوری</span></a>
                                        </div>
                                        <h5 class="post-title mb-15">
                                                <span class="post-format-icon">
                                                    <ion-icon name="headset-outline" role="img" class="md hydrated" aria-label="headset outline"></ion-icon>
                                                </span>
                                            <a href="single.html">سه درصد گذشته، حال و آینده شناخت فراوان جامعه</a></h5>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                            <span class="post-by">توسط <a href="author.html">مهتاب رضایی</a></span>
                                            <span class="post-on">24 دقیقه پیش</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-lg-4">
                                <div class="background-white border-radius-10 p-10">
                                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                        <a href="single.html">
                                            <img class="border-radius-15" src="assets/imgs/news-7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pl-10 pr-10">
                                        <div class="entry-meta mb-15 mt-10">
                                            <a class="entry-meta meta-2" href="category.html"><span class="post-in text-danger font-x-small">جهانی</span></a>
                                        </div>
                                        <h5 class="post-title mb-15">
                                            <a href="single.html">طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد</a></h5>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                            <span class="post-by">توسط <a href="author.html">سعید شمس</a></span>
                                            <span class="post-on">24 دقیقه پیش</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!--Comments-->
                    <div class="comments-area">
                        <h3 class="mb-30">3 نظرات</h3>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/imgs/authors/author-2.png" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی.
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">الناز روستایی</a>
                                                </h5>
                                                <p class="date">4 فروردین 1400 ساعت 3:12 بعد از ظهر </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">پاسخ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/imgs/authors/author-3.png" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">سعید شمس</a>
                                                </h5>
                                                <p class="date">4 فروردین 1400 ساعت 3:12 بعد از ظهر </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">پاسخ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/imgs/authors/author-16.png" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل.
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">مهتاب رضایی</a>
                                                </h5>
                                                <p class="date">4 فروردین 1400 ساعت 3:12 بعد از ظهر </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">پاسخ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--comment form-->
                    <div class="comment-form">
                        <h3 class="mb-30">ارسال نظرات</h3>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="نام">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="ایمیل">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text" placeholder="سایت">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="نظرات"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm">ارسال نظر</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End col-lg-8-->
                <div class="col-lg-4 col-md-12 sidebar-right sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 26.5px;"><div class="pl-lg-50">
                            <!--Post aside style 1-->
                            <div class="sidebar-widget mb-30">
                                <div class="widget-header position-relative mb-30">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4 class="widget-title mb-0">از دست <span>ندهید</span></h4>
                                        </div>
                                        <div class="col-5 text-left">
                                            <h6 class="font-medium pl-15">
                                                <a class="text-muted font-small" href="#">مشاهده همه</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-aside-style-1 border-radius-10 p-20 bg-white">
                                    <ul class="list-post">
                                        <li class="mb-20">
                                            <div class="d-flex">
                                                <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="single.html">
                                                        <img src="assets/imgs/thumbnail-4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-20">
                                            <div class="d-flex">
                                                <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="single.html">
                                                        <img src="assets/imgs/thumbnail-15.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">سه درصد گذشته، حال و آینده شناخت فراوان</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-20">
                                            <div class="d-flex">
                                                <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="single.html">
                                                        <img src="assets/imgs/thumbnail-16.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="single.html">
                                                        <img src="assets/imgs/thumbnail-15.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">سه درصد گذشته، حال و آینده شناخت فراوان</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Top authors-->
                            <div class="sidebar-widget mb-30">
                                <div class="widget-top-auhor border-radius-10 p-20 bg-white">
                                    <div class="widget-header widget-header-style-1 position-relative mb-15">
                                        <h5 class="widget-title pl-5">نویسندگان <span>برتر</span></h5>
                                    </div>
                                    <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="الناز - 1034 پست"><img src="assets/imgs/authors/author-2.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="مسعود - 245 پست"><img src="assets/imgs/authors/author-3.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="مریم - 356 پست"><img src="assets/imgs/authors/author-4.png" alt=""></a>
                                    <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="مجید - 152 پست"><img src="assets/imgs/authors/author-5.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="بهمن - 245 پست"><img src="assets/imgs/authors/author-17.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="حامد - 758 پست"><img src="assets/imgs/authors/author-7.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="نادیا - 231 پست"><img src="assets/imgs/authors/author-8.png" alt=""></a>
                                    <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="فردین - 256 پست"><img src="assets/imgs/authors/author-9.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="ستاره - 652 پست"><img src="assets/imgs/authors/author-10.png" alt=""></a>
                                    <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="حمید - 125 پست"><img src="assets/imgs/authors/author-11.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="مهتاب - 452 پست"><img src="assets/imgs/authors/author-12.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="ناصر - 124 پست"><img src="assets/imgs/authors/author-13.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="مرجان - 1245 پست"><img src="assets/imgs/authors/author-14.png" alt=""></a>
                                    <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="مرتضی - 1325 پست"><img src="assets/imgs/authors/author-15.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="نیلوفر - 562 پست"><img src="assets/imgs/authors/author-16.png" alt=""></a>
                                    <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="رضا - 256 پست"><img src="assets/imgs/authors/author-17.png" alt=""></a>
                                    <a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="یکتا  - 652 پست"><img src="assets/imgs/authors/author-18.png" alt=""></a>
                                    <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="فرانک - 125 پست"><img src="assets/imgs/authors/author-20.png" alt=""></a>
                                </div>
                            </div>
                            <!--Newsletter-->
                            <div class="sidebar-widget widget_newsletter border-radius-10 p-20 bg-white mb-30">
                                <div class="widget-header widget-header-style-1 position-relative mb-15">
                                    <h5 class="widget-title">خبرنامه</h5>
                                </div>
                                <div class="newsletter">
                                    <p class="font-medium">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                    <form target="_blank" action="#" method="get" class="subscribe_form relative mail_part">
                                        <div class="form-newsletter-cover">
                                            <div class="form-newsletter position-relative">
                                                <input type="email" name="EMAIL" placeholder="ایمیل خود را اینجا وارد کنید" required="">
                                                <button type="submit">
                                                    <i class="ti ti-email"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Post aside style 2-->
                            <div class="sidebar-widget mb-50">
                                <div class="widget-header mb-30">
                                    <h5 class="widget-title">پست های <span>اخیر</span></h5>
                                </div>
                                <div class="post-aside-style-3">
                                    <article class="bg-white border-radius-15 mb-30 p-10 wow fadeIn   animated" style="visibility: visible; animation-name: fadeIn;">
                                        <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                            <a href="single.html">
                                                <video autoplay="" class="photo-item__video" loop="" muted="" preload="none">
                                                    <source src="#" type="video/mp4">
                                                </video>
                                            </a>
                                        </div>
                                        <div class="pl-10 pr-10">
                                            <h5 class="post-title mb-15"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a></h5>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                                <span class="post-in">در <a href="category.html">جهان</a></span>
                                                <span class="post-by">توسط <a href="author.html">الناز روستایی</a></span>
                                                <span class="post-on">4 دقیقه پیش</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="bg-white border-radius-15 mb-30 p-10 wow fadeIn   animated" style="visibility: visible; animation-name: fadeIn;">
                                        <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                            <a href="single.html">
                                                <img class="border-radius-15" src="assets/imgs/news-22.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="pl-10 pr-10">
                                            <h5 class="post-title mb-15"><a href="single.html">طراحان خلاقی و فرهنگ پیشرو در زبان</a></h5>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                                <span class="post-in">در <a href="category.html">سلامت</a></span>
                                                <span class="post-by">توسط <a href="author.html">سعید شمس</a></span>
                                                <span class="post-on">14 دقیقه پیش</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="bg-white border-radius-15 mb-30 p-10 wow fadeIn   animated" style="visibility: visible; animation-name: fadeIn;">
                                        <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                            <a href="single.html">
                                                <img class="border-radius-15" src="assets/imgs/news-20.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="pl-10 pr-10">
                                            <h5 class="post-title mb-15"><a href="single.html">سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف</a></h5>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                                <span class="post-in">در <a href="category.html">کانادا</a></span>
                                                <span class="post-by">توسط <a href="author.html">بهمن راستی</a></span>
                                                <span class="post-on">16 دقیقه پیش</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div></div></div>
                <!--End col-lg-4-->
            </div>
            <!--End row-->
            <div class="row">
                <div class="col-12 text-center mb-50">
                    <a href="#">
                        <img class="border-radius-10 d-inline" src="assets/imgs/ads-3.png" alt="">
                    </a>
                </div>
            </div>
            <div class="row mb-50">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sidebar-widget mb-md-30">
                        <div class="widget-header mb-30">
                            <h5 class="widget-title">پرطرفدارترین ها</h5>
                        </div>
                        <div class="post-aside-style-2">
                            <ul class="list-post">
                                <li class="mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-12.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                                <span class="post-by">توسط <a href="author.html">رضا کیمیا</a></span>
                                                <span class="post-on">4 دقیقه پیش</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-13.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                                <span class="post-by">توسط <a href="author.html">مسعود راستی</a></span>
                                                <span class="post-on">3 ساعت قبل</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-15.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                                <span class="post-by">توسط <a href="author.html">الناز روستایی</a></span>
                                                <span class="post-on">4 ساعت قبل</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sidebar-widget mb-md-30">
                        <div class="widget-header mb-30">
                            <h5 class="widget-title">انتخاب <span>ویرایشگر</span></h5>
                        </div>
                        <div class="post-aside-style-1 border-radius-10 p-20 bg-white">
                            <ul class="list-post">
                                <li class="mb-20">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-20">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-15.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-20">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-16.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-15.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sidebar-widget mb-sm-30">
                        <div class="widget-header mb-30">
                            <h5 class="widget-title">محبوب ترین</h5>
                        </div>
                        <div class="post-aside-style-2">
                            <ul class="list-post">
                                <li class="mb-30 wow fadeIn    animated" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                                <span class="post-by">توسط <a href="author.html">رضا کیمیا</a></span>
                                                <span class="post-on">4 دقیقه پیش</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30 wow fadeIn    animated" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                                <span class="post-by">توسط <a href="author.html">مسعود راستی</a></span>
                                                <span class="post-on">3 ساعت قبل</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="d-flex">
                                        <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/thumbnail-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                                <span class="post-by">توسط <a href="author.html">الناز روستایی</a></span>
                                                <span class="post-on">4 ساعت قبل</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget-header mb-30">
                        <h5 class="widget-title">آخرین <span>نظرات</span></h5>
                    </div>
                    <div class="sidebar-widget p-20 border-radius-15 bg-white widget-latest-comments wow fadeIn   animated" style="visibility: visible; animation-name: fadeIn;">
                        <div class="post-block-list post-module-6">
                            <div class="last-comment mb-20 d-flex wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                    <span class="item-count vertical-align">
                                        <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Azumi - 985 posts"><img src="assets/imgs/authors/author-14.png" alt=""></a>
                                    </span>
                                <div class="alith_post_title_small">
                                    <p class="font-medium mb-10"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان.</a></p>
                                    <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                        <span class="post-by">توسط <a href="author.html">الناز روستایی</a></span>
                                        <span class="post-on">4 دقیقه پیش</span>
                                    </div>
                                </div>
                            </div>
                            <div class="last-comment d-flex wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                    <span class="item-count vertical-align">
                                        <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Johny - 445 posts"><img src="assets/imgs/authors/author-3.png" alt=""></a>
                                    </span>
                                <div class="alith_post_title_small">
                                    <p class="font-medium mb-10"><a href="single.html">سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان.</a></p>
                                    <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                        <span class="post-by">توسط <a href="author.html">مسعود راستی</a></span>
                                        <span class="post-on">4 دقیقه پیش</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
