<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/assets/images/favicon.png">
    <title>Adminmart - <?php echo $title ?></title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- This page plugin CSS -->
    <link href="<?php echo base_url() ?>assets/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!----
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="<?php echo base_url() ?>assets/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?php echo base_url() ?>assets/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?php echo base_url() ?>assets/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="<?php echo base_url() ?>assets/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right ml-auto">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url() ?>assets/assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span
                                        class="text-dark"><?php echo $this->session->userdata('nama'); ?></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                               
                                <a class="dropdown-item" href="<?php echo site_url("auth/logout") ?>"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <?php if( $this->session->userdata('level')==3){ ?>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link sidebar-link" href="<?php echo site_url("page/transaksi") ?>"aria-expanded="false">
                                <i data-feather="dollar-sign" class="feather-icon"></i><span class="hide-menu">Transaksi</span>
                            </a>
                            </li>
                            <li class="list-divider"></li>
                            <li class="nav-small-cap"><span class="hide-menu">Menu</span></li>
                            <li class="sidebar-item"> 
                            <a class="sidebar-link" href="<?php echo site_url() ?>page/barang" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Barang</span>
                            </a>
                            </li>
                            <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="feather-icon"></i>
                                <span class="hide-menu">Laporan </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url("page/laporan_suply") ?>" class="sidebar-link">
                                        <span class="hide-menu"> Laporan Suply</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url("page/laporan_transaksi") ?>" class="sidebar-link">
                                        <span class="hide-menu"> Laporan Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php }elseif($this->session->userdata('level')==2){ ?>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Menu</span></li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link sidebar-link" href="<?php echo site_url("page/user") ?>" aria-expanded="false">
                                <i data-feather="user" class="feather-icon"></i><span  class="hide-menu">User</span>
                            </a>
                        </li>
                    <?php }elseif($this->session->userdata('level')==1){ ?>
                            <li class="list-divider"></li>
                            <li class="nav-small-cap"><span class="hide-menu">Menu</span></li>
                            <li class="sidebar-item"> 
                            <a class="sidebar-link" href="<?php echo site_url() ?>page/barang" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Barang</span>
                            </a>
                            </li>
                            <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="feather-icon"></i>
                                <span class="hide-menu">Laporan </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url("page/laporan_suply") ?>" class="sidebar-link">
                                        <span class="hide-menu"> Laporan Suply</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url("page/laporan_transaksi") ?>" class="sidebar-link">
                                        <span class="hide-menu"> Laporan Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                            </li>
                            <li class="sidebar-item"> 
                            <a class="sidebar-link sidebar-link" href="<?php echo site_url("page/user") ?>" aria-expanded="false">
                                <i data-feather="user" class="feather-icon"></i><span  class="hide-menu">User</span>
                            </a>
                        </li>
                    <?php } ?>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link sidebar-link" href="<?php echo site_url("auth/logout") ?>" aria-expanded="false">
                                <i data-feather="log-out" class="feather-icon"></i><span  class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?php echo $title ?></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item">Adminmart
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
