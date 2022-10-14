<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('' . env('linkpub') . 'ecommerce/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('' . env('linkpub') . 'ecommerce/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet"
        href="{{ asset('' . env('linkpub') . 'ecommerce/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('' . env('linkpub') . 'ecommerce/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('' . env('linkpub') . 'ecommerce/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('' . env('linkpub') . 'ecommerce/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="{{ asset('' . env('linkpub') . 'ecommerce/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet"
        href="{{ asset('' . env('linkpub') . 'ecommerce/plugins/summernote/summernote-bs4.min.css') }}">

    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('' . env('linkpub') . 'priba/css/style.css') }}">

    {{-- my font --}}
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('' . env('linkpub') . 'priba/img/logoBD.png') }}"
                alt="Bidang Dakwah Logo" width="100">
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img
                        src="{{ asset('' . env('linkpub') . 'priba/img/logoBD.png') }}" width="60">Bidang Dakwah</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link {{ Request::is('/') ? ' active' : null }}" href="/">Home
                            <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link {{ Request::is('event*') ? ' active' : null }}"
                            href="/event">Kegiatan</a>
                        <a class="nav-item nav-link {{ Request::is('service*') ? ' active' : null }}"
                            href="/service">Layanan Kami</a>
                        <a class="nav-item nav-link {{ Request::is('content*') ? ' active' : null }}"
                            href="/content">Konten Kami</a>
                        <a class="nav-item nav-link {{ Request::is('about*') ? ' active' : null }}"
                            href="/about">Tentang Kami</a>
                        {{-- <a class="nav-item nav-link btn btn-primary text-white tombol" href="#">Join Us</a> --}}
                    </div>
                </div>
            </div>
        </nav>
        <!-- akhir Navbar -->



        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- start footer Area -->
        @include('layouts.module.footerE')
        <!-- End footer Area -->


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    {{-- <script src="{{ asset(''. env('linkpub') .'ecommerce/plugins/sparklines/sparkline.js') }}"></script> --}}
    <!-- JQVMap -->
    {{-- <script src="{{ asset(''. env('linkpub') .'ecommerce/plugins/jqvmap/jquery.vmap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset(''. env('linkpub') .'ecommerce/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script
        src="{{ asset('' . env('linkpub') . 'ecommerce/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/dist/js/adminlte.js') }}"></script>
    {{-- <!-- AdminLTE for demo purposes -->
<script src="{{ asset(''. env('linkpub') .'ecommerce/dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('' . env('linkpub') . 'ecommerce/dist/js/pages/dashboard.js') }} "></script>


    {{-- my js --}}
    <script src="{{ asset('' . env('linkpub') . 'priba/js/script.js') }}"></script>

</body>

</html>
