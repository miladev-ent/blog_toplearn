<div class="col-lg-2 col-md-3 primary-sidebar sticky-sidebar sidebar-left order-2 order-md-1">
    <div class="sidebar-widget widget-weather border-radius-10 bg-white mb-30">
        <div class="d-flex">
            <div class="font-medium">
                <p>دوشنبه</p>
                <h2>12</h2>
                <p><strong>فروردین</strong></p>
            </div>
            <div class="font-medium mr-10 pt-20">
                <div id="datetime" class="d-inline-block">
                    <ul>
                        <li><span class="font-small">
                                                            <a class="text-primary" href="#">تهران</a><br>
                                                            <i class="wi wi-day-sunny ml-5"></i>32ºc
                                                        </span>
                            <p>آفتابی</p>
                        </li>
                        <li><span class="font-small">
                                                            <a class="text-danger" href="#">کرج</a><br>
                                                            <i class="wi wi-day-cloudy ml-5"></i>28ºc
                                                        </span>
                            <p>ابری</p>
                        </li>
                        <li><span class="font-small">
                                                            <a class="text-success" href="#">رشت</a><br>
                                                            <i class="wi wi-rain-mix ml-5"></i>25ºc
                                                        </span>
                            <p>بارانی</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-widget widget_categories border-radius-10 bg-white mb-30">
        <div class="widget-header position-relative mb-15">
            <h5 class="widget-title"><strong>چپ چین</strong></h5>
        </div>
        <ul class="font-small text-muted">
            @foreach ($homeRepo->getChapchinArticles() as $article)
                <li class="cat-item cat-item-2">
                    <a href="{{ $article->path() }}">{{ $article->title }}</a>
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
    <div class="sidebar-widget widget_categories border-radius-10 bg-white mb-30">
        <div class="widget-header position-relative mb-15">
            <h5 class="widget-title"><strong>دسته بندی ها</strong></h5>
        </div>
        <ul class="font-small text-muted">
            @foreach ($homeRepo->getActiveCategories() as $category)
                <li class="cat-item cat-item-2">
                    <a href="#">{{ $category->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
