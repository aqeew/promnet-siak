<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIAK | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        #tablenya {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #tablenya td, #tablenya th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tablenya tr:nth-child(even){background-color: #f2f2f2;}

        #tablenya tr:hover {background-color: #ddd;}

        #tablenya th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }
        .modal .modal-header, .modal .modal-body, .modal .modal-footer {
            padding: 20px 30px;
        }
        .modal .modal-content {
            border-radius: 3px;
        }
        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }
        .modal .modal-title {
            display: inline-block;
        }
        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }
        .modal textarea.form-control {
            resize: vertical;
        }
        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }   
        .modal form label {
            font-weight: normal;
        }   
        
        </style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?php echo base_url("/home"); ?>"><img class="main-logo" src="<?php echo base_url(); ?>assets/img/logo/logoo.png" alt="" /></a>
                <strong><a href="<?php echo base_url("/home"); ?>"><img src="<?php echo base_url(); ?>assets/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="<?php echo base_url("/home"); ?>">
                                   <span class="educate-icon educate-home icon-wrap"></span>
                                   <span class="mini-click-non">Beranda</span>
                                </a>
                        </li>

                        <li>
                            <a class="has-arrow" href="<?php echo base_url("c_dosen/index"); ?>" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Dosen</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="List Dosen" href="<?php echo base_url("c_dosen/index"); ?>"><span class="mini-sub-pro">List Dosen</span></a></li>
                                <li><a title="Tambah Dosen" href="<?php echo base_url("c_dosen/tambah"); ?>"><span class="mini-sub-pro">Tambah Dosen</span></a></li>
                                <li><a title="Edit Dosen" href="<?php echo base_url("c_dosen/dosen_ubah"); ?>"><span class="mini-sub-pro">Edit Dosen</span></a></li>
                                <li><a title="Profil Dosen" href="professor-profile.html"><span class="mini-sub-pro">Profil Dosen</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?php echo base_url("c_mahasiswa/index"); ?>" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Mahasiswa</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="List Mahasiswa" href="<?php echo base_url("c_mahasiswa/index"); ?>"><span class="mini-sub-pro">List Mahasiswa</span></a></li>
                                <li><a title="Tambah Mahasiswa" href="<?php echo base_url("c_mahasiswa/tambah"); ?>"><span class="mini-sub-pro">Tambah Mahasiswa</span></a></li>
                                <li><a title="Edit Mahasiswa" href="<?php echo base_url("c_mahasiswa/mahasiswa_ubah"); ?>"><span class="mini-sub-pro">Edit Mahasiswa</span></a></li>
                                <li><a title="Profil Mahasiswa" href="student-profile.html"><span class="mini-sub-pro">Profil Mahasiswa</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?php echo base_url("c_matkul/index"); ?>" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Mata Kuliah</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="List Mata Kuliah" href="<?php echo base_url("c_matkul/index"); ?>"><span class="mini-sub-pro">List Mata Kuliah</span></a></li>
                                <li><a title="Tambah Mata Kuliah" href="<?php echo base_url("c_matkul/tambah"); ?>"><span class="mini-sub-pro">Tambah Mata Kuliah</span></a></li>
                                <li><a title="Edit Mata Kuliah" href="<?php echo base_url("c_matkul/matkul_ubah"); ?>"><span class="mini-sub-pro">Edit Mata Kuliah</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?php echo base_url("c_prodi/index"); ?>" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Program Studi</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="List Program Studi" href="<?php echo base_url("c_prodi/index"); ?>"><span class="mini-sub-pro">List Program Studi</span></a></li>
                                <li><a title="Tambah Program Studi" href="<?php echo base_url("c_prodi/tambah"); ?>"><span class="mini-sub-pro">Tambah Program Studi</span></a></li>
                                <li><a title="Edit Program Studi" href="<?php echo base_url("c_prodi/prodi_ubah"); ?>"><span class="mini-sub-pro">Edit Program Studi</span></a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="List-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo base_url("/home"); ?>"><img class="main-logo" src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            
                                                            <span class="admin-name"><?php echo $this->session->userdata('nama_lengkap') ?></span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Edit Profil</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url().'c_login/logout'; ?>"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Dosen <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url("c_dosen/index"); ?>">List Dosen</a>
                                                </li>
                                                <li><a href="<?php echo base_url("c_dosen/tambah"); ?>">Tambah Dosen</a>
                                                </li>
                                                <li><a href="<?php echo base_url("c_dosen/dosen_ubah"); ?>">Edit Dosen</a>
                                                </li>
                                                <li><a href="professor-profile.html">Profil Dosen</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url("c_mahasiswa/index"); ?>">List Mahasiswa</a>
                                                </li>
                                                <li><a href="<?php echo base_url("c_mahasiswa/tambah"); ?>">Tambah Mahasiswa</a>
                                                </li>
                                                <li><a href="<?php echo base_url("c_mahasiswa/mahasiswa_ubah"); ?>">Edit Mahasiswa</a>
                                                </li>
                                                <li><a href="student-profile.html">Profil Mahasiswa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url("c_matkul/index"); ?>">List Mata Kuliah</a>
                                                </li>
                                                <li><a href="<?php echo base_url("c_matkul/tambah"); ?>">Tambah Mata Kuliah</a>
                                                </li>
                                                <li><a href="<?php echo base_url("c_matkul/matkul_ubah"); ?>">Edit Mata Kuliah</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url("c_prodi/index"); ?>">List Program Studi</a>
                                                </li>
                                                <li><a href="<?php echo base_url("c_prodi/tambah"); ?>">Tambah Program Studi</a>
                                                </li>
                                                <li><a href="<?php echo base_url("c_prodi/prodi_ubah"); ?>">Edit Program Studi</a>
                                                </li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->