<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title><?= $title ?> - LPK Tjokro Bakti Pertiwi</title>

    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/font-awesome.css"> -->
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url() ?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/responsive.css">

    <!-- latest jquery-->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/datatables.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/sweetalert2.css"> -->

</head>

<body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index">
            <span>

            </span>
        </div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top">
        <i data-feather="chevrons-up"></i>
    </div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="<?= base_url() ?>">
                            <img class="img-fluid-logo-dashboard for-light" src="<?= base_url() ?>assets/images/logo/logo.png" alt="">
                            <img class="img-fluid-logo-dashboard for-dark" src="<?= base_url() ?>assets/images/logo/logo_dark.png" alt="">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    </div>
                </div>
                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li class="profile-nav onhover-dropdown pe-0 py-0">
                            <div class="media profile-media">
                                <img class="b-r-10" src="<?= base_url() ?>assets/images/dashboard/profile.png" alt="">
                                <div class="media-body">
                                    <span><?= $user['name'] ?>
                                    </span>
                                    <p class="mb-0">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a data-href="<?= base_url('auth/logout') ?>" class="btn-logout">
                                        <i data-feather="log-out"> </i>
                                        <span>Keluar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
                <div>
                    <div class="logo-wrapper">
                        <a href="<?= base_url() ?>">
                            <img class="img-fluid-logo-dashboard for-light" src="<?= base_url() ?>assets/asset_fr/images/logo_gandeng.png" alt="">
                            <img class="img-fluid-logo-dashboard for-dark" src="<?= base_url() ?>assets/asset_fr/images/logo_gandeng.png" alt="">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="<?= base_url() ?>">
                            <img class="img-fluid-logo-dashboard" src="<?= base_url() ?>assets/asset_fr/images/log.png" alt="">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn">
                                    <a href="index.html">
                                        <img class="img-fluid" src="<?= base_url() ?>assets/images/logo/logo-icon.png" alt="">
                                    </a>
                                    <div class="mobile-back text-end">
                                        <span>Back</span>
                                        <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">General</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('dashboard') ?>" class="active">
                                        <svg class="stroke-icon">
                                            <use href="<?= base_url() ?>assets/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg>
                                        <span>Dasbor</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('dash/partner') ?>">
                                        <i data-feather="book"></i>
                                        <span>Mitra Kerja</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('dash/program') ?>">
                                        <i data-feather="book"></i>
                                        <span>Program</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav active" href="<?= base_url('dash/article') ?>">
                                        <i data-feather="book"></i>
                                        <span>Konten</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('dash/student') ?>">
                                        <i data-feather="book"></i>
                                        <span>Data pendaftaran</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('dash/faq') ?>">
                                        <i data-feather="settings"></i>
                                        <span>FAQ</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('dash/settings') ?>">
                                        <i data-feather="settings"></i>
                                        <span>Pengaturan</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title <?php if ($this->uri->segment(2) == 'settings') echo 'active' ?>" href="#">
                                        <i data-feather="settings"></i>
                                        <span>Settings</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?= base_url('dash/settings') ?>" class="<?php if ($this->uri->segment(3) == 'videotron') echo 'active' ?>">Videotron</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav btn-logout" data-href="<?= base_url('auth/logout') ?>">
                                        <i data-feather="log-out"> </i>
                                        <span>Keluar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <?php if (isset($pages)) $this->load->view($pages) ?>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2023 © Cuba theme by pixelstrap </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Bootstrap js-->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url() ?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url() ?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?= base_url() ?>assets/js/scrollbar/simplebar.js"></script>
    <script src="<?= base_url() ?>assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?= base_url() ?>assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?= base_url() ?>assets/js/sidebar-menu.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/sidebar-pin.js"></script> -->
    <!-- <script src="<?= base_url() ?>assets/js/clock.js"></script> -->
    <script src="<?= base_url() ?>assets/js/slick/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/js/slick/slick.js"></script>
    <script src="<?= base_url() ?>assets/js/header-slick.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/chart/apex-chart/apex-chart.js"></script> -->
    <!-- <script src="<?= base_url() ?>assets/js/chart/apex-chart/stock-prices.js"></script> -->
    <!-- <script src="<?= base_url() ?>assets/js/chart/apex-chart/moment.min.js"></script> -->
    <script src="<?= base_url() ?>assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?= base_url() ?>assets/js/dashboard/default.js"></script>
    <script src="<?= base_url() ?>assets/js/notify/index.js"></script>
    <script src="<?= base_url() ?>assets/js/height-equal.js"></script>
    <script src="<?= base_url() ?>assets/js/animation/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?= base_url() ?>assets/js/sweet-alert/sweetalert.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url() ?>assets/js/script.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/theme-customizer/customizer.js"></script> -->
    <script>
        new WOW().init();
    </script>
    <script>
        const flashdata = $(".flash-data").data("flashdata");

        if (flashdata) {
            Swal.fire({
                title: "Success!! ",
                text: flashdata,
                type: "success",
                icon: "success",
            });
        }
        $(document).ready(function() {
            $(".btn-logout").on("click", function(e) {
                e.preventDefault();
                const href = $(this).data("href");

                Swal.fire({
                    title: "Are you sure?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    cancelButtonText: "Cancel",
                    confirmButtonText: "Logout",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect or perform the desired action
                        document.location.href = href;
                    }
                });
            });
        });
    </script>
</body>

</html>