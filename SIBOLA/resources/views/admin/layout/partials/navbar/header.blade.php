
<header class="main-header">
    <a href="{{ url('/page/admin/dashboard') }}" class="logo">
        <span class="logo-mini"><b>Sibola</b></span>
        <span class="logo-lg"><b>Sibola</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img src="{{ url('gambar/gambar_user.png') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">Adriaa</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url('gambar/gambar_user.png') }}" class="img-circle" alt="User Image">
                            <p>
                                a
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="">
                                <a href="{{ url('/logout') }}" class="btn btn-danger btn-flat btn-block">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
