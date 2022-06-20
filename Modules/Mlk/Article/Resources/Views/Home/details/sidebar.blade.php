<div class="col-lg-4 col-md-12 sidebar-right">
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
                @foreach ($homeRepo->getVipArticlesOrderByView() as $article)
                    <li class="mb-20">
                        <div class="d-flex">
                            <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                <a class="color-white" href="{{ $article->path() }}">
                                    <img src="{{ $article->imagePath }}" alt="{{ $article->title }}">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6 class="post-title mb-10 text-limit-2-row">
                                    <a href="{{ $article->path() }}">{{ $article->title }}</a>
                                </h6>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar-widget mb-30">
        <div class="widget-top-auhor border-radius-10 p-20 bg-white">
            <div class="widget-header widget-header-style-1 position-relative mb-15">
                <h5 class="widget-title pl-5">نویسندگان <span>برتر</span></h5>
            </div>
            @foreach ($homeRepo->getAuthorUsers() as $user)
                <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top"
                   data-original-title="{{ $user->name }} - {{ $user->articles->count() }} مقاله">
                    <img src="assets/imgs/authors/author-2.png" alt="{{ $user->name }}">
                </a>
            @endforeach
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
    <div class="sidebar-widget mb-30">
        <div class="widget-header mb-30">
            <h5 class="widget-title">پرطرفدارترین ها</h5>
        </div>
        <div class="post-aside-style-2">
            <ul class="list-post">
                @foreach ($homeRepo->getArticlesOrderByView() as $article)
                    <li class="mb-30 wow fadeIn animated">
                        <div class="d-flex">
                            <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                <a class="color-white" href="{{ $article->path() }}">
                                    <img src="{{ $article->imagePath }}" alt="{{ $article->title }}">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6 class="post-title mb-10 text-limit-2-row">
                                    <a href="{{ $article->path() }}">{{ $article->title }}</a>
                                </h6>
                                <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                    <span class="post-by">توسط <a href="author.html">{{ $article->user->name }}</a></span>
                                    <span class="post-on">4{{ $article->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar-widget p-20 border-radius-15 bg-white widget-latest-comments wow fadeIn animated">
        <div class="widget-header mb-30">
            <h5 class="widget-title">آخرین <span>نظرات</span></h5>
        </div>
        <div class="post-block-list post-module-6">
            <div class="last-comment mb-20 d-flex wow fadeIn animated">
                <span class="item-count vertical-align">
                    <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="مرجان - 985 پست"><img src="assets/imgs/authors/author-14.png" alt=""></a>
                </span>
                <div class="alith_post_title_small">
                    {{--                    <p class="font-medium mb-10"><a href="{{ $article->path() }}">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان.</a></p>--}}
                    <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                        <span class="post-by">توسط <a href="author.html">مرجان همتی</a></span>
                        <span class="post-on">4 دقیقه پیش</span>
                    </div>
                </div>
            </div>
            <div class="last-comment d-flex wow fadeIn animated">
                <span class="item-count vertical-align">
                    <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="بهمن - 1245 پست"><img src="assets/imgs/authors/author-9.png" alt=""></a>
                </span>
                <div class="alith_post_title_small">
                    <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                        <span class="post-by">توسط <a href="author.html">بهمن راستی</a></span>
                        <span class="post-on">4 دقیقه پیش</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
