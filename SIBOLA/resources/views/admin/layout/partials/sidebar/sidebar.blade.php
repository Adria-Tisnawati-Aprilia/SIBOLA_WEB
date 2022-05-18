
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
            <li><a href="{{ url('/admin/home') }}"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Arena </a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Lapangan
                            <span class="pull-right-container">
                                <i></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/admin/hak_akses')}}"><i class="fa fa-circle-o"></i> Role </a></li>
                    <li class="treeview">
                        <a href=""><i class="fa fa-circle-o"></i> Users
                            <span class="pull-right-container">
                                <i></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
        </ul>

    </section>
</aside>

