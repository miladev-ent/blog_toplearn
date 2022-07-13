@if (!is_null($adv_top))
    <div class="row">
        <div class="col-12 text-center mb-50">
            <a href="{{ $adv_top->link }}" title="{{ $adv_top->title }}">
                <img class="border-radius-10 d-inline" src="{{ $adv_top->imagePath }}" alt="{{ $adv_top->title }}">
            </a>
        </div>
    </div>
@endif
