<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <div class="c-icon c-icon-lg">
            <i class="fas fa-bars"></i>
        </div>
    </button>
    <a class="c-header-brand d-lg-none" href="/">
        <div class="c-icon c-icon-lg">
            BEX
        </div>
    </a>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <div class="c-icon c-icon-lg">
            <i class="fas fa-bars"></i>
        </div>
    </button>
    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-icon"><i class="fas fa-bell"></i></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                    </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                    </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                    </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square"></use>
                    </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                    </svg> Profile</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                    </svg> Settings</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card"></use>
                    </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                    </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                    </svg> Lock Account</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                    </svg> Logout</a>
            </div>
        </li>
        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-icon"><i class="fas fa-user-circle"></i></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                <a class="dropdown-item" href="{{ route('logout') }}">
                    <div class="c-icon mr-2">
                        <i class="fas fa-unlock"></i>
                    </div> Logout
                </a>
            </div>
        </li>
    </ul>
{{--    <div class="c-subheader px-3">--}}
{{--        <!-- Breadcrumb-->--}}
{{--        <ol class="breadcrumb border-0 m-0">--}}
{{--            <li class="breadcrumb-item">Home</li>--}}
{{--            <li class="breadcrumb-item"><a href="#">Admin</a></li>--}}
{{--            <li class="breadcrumb-item active">Dashboard</li>--}}
{{--            <!-- Breadcrumb Menu-->--}}
{{--        </ol>--}}
{{--    </div>--}}
</header>
