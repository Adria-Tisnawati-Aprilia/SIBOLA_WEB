<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    @include('admin.layout.partials.css.style')

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
        @include('admin.layout.partials.navbar.header')

        @include('admin.layout.partials.sidebar.sidebar')

        <div class="content-wrapper">
            @yield('konten')
        </div>

        @include('admin.layout.partials.footer.foot')

        <div class="control-sidebar-bg"></div>
    </div>




    @include('admin.layout.partials.js.style')

    @yield('script_js')

</body>

</html>
