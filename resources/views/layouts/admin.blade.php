<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/skins/skin-blue.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        @include('layouts.partials.menu-item-top-nav')

        @include('layouts.partials.menu-item')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @include('partials._session')
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}" ></script>
    <script src="{{ asset('js/dropzone-modal.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')

    </body>
</html>
