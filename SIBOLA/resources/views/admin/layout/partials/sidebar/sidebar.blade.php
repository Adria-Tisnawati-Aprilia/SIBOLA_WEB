<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{url('web/dist')}}/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item active ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="{{ url('/admin/hak_akses') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Hak Akses</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="{{ url('/admin/arena') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Arena</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="{{ url('/admin/lapangan') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Lapangan</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="{{ url('/admin/user') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>User</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="{{ url('/admin/booking') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Booking</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="{{ url('/admin/laporan') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Laporan</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Components</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">Alert</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
