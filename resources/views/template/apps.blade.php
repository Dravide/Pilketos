<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>{{ $judul }} - Pemilihan Ketua Umum OSIS SMPN 1 Cipanas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="light">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box text-center">
                    <a href="/" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('/images/logo-sm.png')}}" alt="logo-sm-dark" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('/images/logo-dark.pn')}}g" alt="logo-dark" height="24">
                                </span>
                    </a>

                    <a href="/" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('/images/logo-sm.png')}}" alt="logo-sm-light" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('/images/logo-light.png')}}" alt="logo-light" height="24">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="ri-search-line"></span>
                    </div>
                </form>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-search-line"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="mb-3 m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="ri-fullscreen-line"></i>
                    </button>
                </div>


                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('/images/users/avatar-2.jpg')}}"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1">Kevin</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="{{ route('home.index') }}" class="waves-effect">
                            <i class="mdi mdi-home-variant-outline"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-email-outline"></i>
                            <span>Calon Ketua </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('calon.index') }}">Daftar Calon Ketua</a></li>
                            <li><a href="{{ route('calon.create') }}">Tambah Calon Ketua</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Layouts</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-gradient"></i>
                            <span>Vertical</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                @yield('konten')
                <!-- end page title -->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Dery Supriady
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Pemilihan Ketua Umum OSIS SMPN 1 Cipanas
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->
<script src="{{asset('/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('/libs/node-waves/waves.min.js')}}"></script>

<script src="{{asset('/js/app.js')}}"></script>

</body>
</html>
