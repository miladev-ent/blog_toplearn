<div id="sidebar-menu">
    <ul class="metismenu" id="side-menu">
        <li class="menu-title">منو</li>
        @foreach (config('panelConfig.menus') as $menu)
            @if (! array_key_exists('permissions', $menu) ||
                   auth()->user()->hasAnyPermission($menu['permissions']) ||
                    auth()->user()->hasPermissionTo(\Mlk\Role\Models\Permission::PERMISSION_SUPER_ADMIN))
                <li>
                    <a href="{{ $menu['url'] }}">
                        <i class="mdi mdi-{{ $menu['icon'] }}"></i>
                        <span> {{ $menu['title'] }} </span>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
