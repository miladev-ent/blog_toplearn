<div id="sidebar-menu">
    <ul class="metismenu" id="side-menu">
        <li class="menu-title">منو</li>
        @foreach (config('panelConfig.menus') as $menu)
            <li>
                <a href="{{ $menu['url'] }}">
                    <i class="mdi mdi-{{ $menu['icon'] }}"></i>
                    <span> {{ $menu['title'] }} </span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
