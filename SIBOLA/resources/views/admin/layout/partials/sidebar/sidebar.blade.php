<style>
    .slimScrollBar {
        background: gray !important;
        opacity: .5 !important;
    }

    .skin-green .sidebar-menu>li.active>a {
        border-left-color: #008d4c;
    }

    .skin-green .sidebar-menu>li>.treeview-menu {
        padding-left: 0;
        margin-right: 0;
    }

    .skin-green .sidebar-menu>li>.treeview-menu>li.active>i {
        padding-left: 100px;
    }

    .skin-green .sidebar-menu>li>.treeview-menu>li.active {
        background-color: #008d4c;
    }

    .skin-green .sidebar-menu>li>.treeview-menu>li a {
        margin-left: 3px;
    }
</style>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url('gambar/gambar_user.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p class="text-capitalize">{{ Auth::user() ? Auth::user()->name : '' }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{ url('/admin/home') }}"><i class="fa fa-circle-o text-red"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url('/owner/arena/') }}">
                            <i class="fa fa-circle-o"></i> Arena
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/owner/lapangan') }}">
                            <i class="fa fa-circle-o"></i> Lapangan
                        </a>
                    </li>
                    @can('owner')
                        <li>
                            <a href="{{ url('/owner/fasilitas') }}">
                                <i class="fa fa-circle-o"></i> Fasilitas
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/owner/fasilitas_arena') }}">
                                <i class="fa fa-circle-o"></i> Fasilitas Arena
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/owner/jenis_lapangan') }}">
                                <i class="fa fa-circle-o"></i> Jenis Lapangan
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/owner/kategori_lapangan') }}">
                                <i class="fa fa-circle-o"></i> Kategori Lapangan
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/owner/petugas_owner') }}">
                                <i class="fa fa-circle-o"></i> Petugas Owner
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>User Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/hak_akses') }}"><i class="fa fa-circle-o"></i> Role </a></li>
                    <li><a href="{{ url('/admin/owner') }}"><i class="fa fa-circle-o"></i> Owner </a>
                    </li>
                    <li><a href="{{ url('/admin/users') }}"><i class="fa fa-circle-o"></i> Users </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Booking Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/owner/booking/') }}"><i class="fa fa-circle-o"></i> Booking </a></li>
                    <li><a href="{{ url('/owner/pembayaran/') }}"><i class="fa fa-circle-o"></i> Pembayaran </a></li>
                    <li><a href="{{ url('/owner/laporan/') }}"><i class="fa fa-circle-o"></i> Laporan </a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/admin/informasi_login') }}">
                    <i class="fa fa-book"></i>
                    <span>Informasi Login</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
