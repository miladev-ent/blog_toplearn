<div class="left-side-menu">
    <div class="slimscroll-menu">
        <div class="user-box text-center">
            <img src="{{ asset('admin/images/users/user-1.jpg') }}" alt="تصویر کاربر" title="{{ auth()->user()->name }}"
            class="rounded-circle img-thumbnail avatar-lg">
            <div class="dropdown">
                <a href="#" class="text-dark h5 mt-2 mb-1 d-block">{{ auth()->user()->name }}</a>
            </div>
            <p class="text-muted">مدیر</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="{{ route('auth.logout') }}" class="text-custom">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        @include('Panel::section.side-menu')
        <div class="clearfix"></div>
    </div>
</div>
