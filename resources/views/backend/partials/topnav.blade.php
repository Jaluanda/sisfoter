<form class="form-inline mr-auto" action="#">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
</form>

<ul class="navbar-nav navbar-right">
    <p class="text-white">
        {{ \Illuminate\Support\Carbon::now()->translatedFormat('l, d F Y - H.i') }}
    </p>
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Halo, Commander</div></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="/user/profile" class="dropdown-item has-icon">
                <i class="fas fa-user"></i> Profile
            </a>
{{--            @if (request()->get('is_admin'))--}}
                <a href="/setting" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Setting
                </a>
{{--            @endif--}}
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Keluar
            </a>
        </div>
    </li>
</ul>
