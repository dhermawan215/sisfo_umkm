<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('be/static/img/icons/icon-48x48.png') }}" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Sistem Perizinan UMKM</title>

    <link href="{{ asset('be/static/css/app2.css') }}" rel="stylesheet">
    <link href="{{ asset('datatable/DataTables-1.13.2/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('datatable/Responsive-2.4.0/css/responsive.bootstrap.min.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar -->
        @include('layout.admin-sidebar')
        <!-- end sidebar -->

        <div class="main">
            <!-- navbar start -->
            @include('layout.navbar')
            <!-- navbar end -->
            <main class="content">
                <!-- start content -->
                @yield('admin_content')
                <!-- end content -->
            </main>
            <!-- footer star -->
            @include('layout.footer')
            <!-- footer end -->
        </div>
    </div>

    @include('layout.admin-script')
    @stack('custom_js_admin')


</body>

</html>