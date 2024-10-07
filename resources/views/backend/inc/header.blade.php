<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    @livewireStyles

    <link rel="stylesheet" href="/back/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

{{--    <link rel="stylesheet" href="/back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="/back/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="/back/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="/back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="/back/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/back/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="/my.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="index3.html" class="nav-link">Home</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="#" class="nav-link">Contact</a>--}}
{{--            </li>--}}
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            @if(\Illuminate\Support\Facades\Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                       <i class="fa fa-user"></i>&nbsp; {{\Illuminate\Support\Facades\Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-edit"></i> &nbsp;&nbsp;&nbsp;Profil settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="btn">
                                    <i class="fas fa-arrow-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout
                                </button>
                            </form>
                        </a>
                    </div>
                </li>
           @endif

        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="index3.html" class="brand-link">
            <img src="/eltosoft.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Eliyorbek Tojimatov</span>
        </a>

        <div class="sidebar mt-2">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

{{--                    <li class="nav-item menu-open">--}}
{{--                        <a href="#" class="nav-link active">--}}
{{--                            <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--                            <p>--}}
{{--                                Dashboard--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./index.html" class="nav-link active">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v1</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./index2.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v2</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./index3.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v3</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-home "></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('add.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-user-shield"></i>
                            <p>Admins</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('client.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Clients</p>
                        </a>
                    </li>


                </ul>
            </nav>

        </div>

    </aside>
    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">
