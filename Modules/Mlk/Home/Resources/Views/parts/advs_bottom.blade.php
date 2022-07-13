@if (!is_null($adv_bottom))
    <div class="sidebar-widget widget-ads mb-30 text-center">
        <a href="{{ $adv_bottom->link }}" title="{{ $adv_bottom->title }}">
            <img class="border-radius-10" src="{{ $adv_bottom->imagePath }}" alt="{{ $adv_bottom->title }}">
        </a>
    </div>
@endif

