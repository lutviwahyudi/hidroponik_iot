<!DOCTYPE html>
<html lang="en">

<head>
    <title>Monitoring Hidroponik NFT</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('lib') ?>/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib') ?>/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib') ?>/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib') ?>/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib') ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib') ?>/assets/css/jquery.mCustomScrollbar.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#ph").load("<?= site_url('pages/phSensor'); ?>")
            }, 2000);
        })

        $(document).ready(function() {
            setInterval(function() {
                $("#tds").load("<?= site_url('pages/tds'); ?>")
            }, 2000);
        })

        //pompa ph
        $(document).ready(function() {
            setInterval(function() {
                $("#up").load("<?= site_url('pages/up'); ?>")
            }, 2000);
        })
        $(document).ready(function() {
            setInterval(function() {
                $("#down").load("<?= site_url('pages/down'); ?>")
            }, 2000);
        })

        //pompa nutrisi
        $(document).ready(function() {
            setInterval(function() {
                $("#nutrisi").load("<?= site_url('pages/nutrisi'); ?>")
            }, 2000);
        })
    </script>
    <style>
        .img-logo {
            width: 240px;
            height: 90px;
        }
    </style>
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <img class="img-logo" src="<?= base_url('lib') ?>/assets/images/nun2.png" alt="">
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="<?= base_url('lib') ?>/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Hidroponik NFT</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="<?= base_url('auth/logout'); ?>">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="<?= base_url('pages') ?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="<?= base_url('pages/tabel') ?>">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Tabel Data</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-6 col-xl-6">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont  bg-c-white card1-icon"><img src="<?= base_url('lib') ?>/assets/images/tds.png" alt="" width="80px" height="80px"></i>
                                                        <span class="text-c-pink f-w-600">Nilai Tds</span>
                                                        <h4><span id="tds"></span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card2 -->
                                            <div class="col-6 col-xl-6">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont  bg-c-white card1-icon"><img src="<?= base_url('lib') ?>/assets/images/ph.png" alt="" width="80px" height="80px"></i>
                                                        <span class="text-c-green f-w-600">Nilai PH</span>
                                                        <h4><span id="ph"></span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card2 end -->
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-xl-6">
                                                <div class="card fb-card">
                                                    <div class="card-header">
                                                        <i><img src="<?= base_url('lib') ?>/assets/images/pompa.png" alt="" width="40px" height="40px"></i>
                                                        <div class="d-inline-block">
                                                            <h5>Pompa pH</h5>
                                                            <span>Moitoring pompa pH</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>pH_Up</h2>
                                                                <h4><span id="up"></span></h4>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>pH_Down</h2>
                                                                <h4><span id="down"></span></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="card fb-card">
                                                    <div class="card-header">
                                                        <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path d="M112 0C85.5 0 64 21.5 64 48V256H48c-26.5 0-48 21.5-48 48v96c0 8 2 15.6 5.4 22.2c3.8-1.7 7.8-3.1 12-4.1c13.1-3.1 26.7-9.8 37.3-18.6c22.2-18.7 54.3-20.1 78.1-3.4c18 12.4 40.1 20.3 59.2 20.3c21.1 0 42-8.5 59.2-20.3c22.1-15.5 51.6-15.5 73.7 0c18.4 12.7 39.6 20.3 59.2 20.3c19 0 41.2-7.9 59.2-20.3c23.8-16.7 55.8-15.3 78.1 3.4c10.6 8.8 24.2 15.6 37.3 18.6c4.2 1 8.2 2.4 12 4.1C574 415.6 576 408 576 400V304c0-26.5-21.5-48-48-48H480l0-146.7 25.4 25.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-80-80c-12.5-12.5-32.8-12.5-45.3 0l-80 80c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 109.3 416 256H288V48c0-26.5-21.5-48-48-48H112zM306.5 421.9c-11.1-7.9-25.9-7.9-37 0C247 437.4 219.5 448 192 448c-26.9 0-55.3-10.8-77.4-26.1l0 0c-11.9-8.5-28.1-7.8-39.2 1.7c-14.4 11.9-32.5 21-50.6 25.2c-17.2 4-27.9 21.2-23.9 38.4s21.2 27.9 38.4 23.9c24.5-5.7 44.9-16.5 58.2-25C126.5 501.7 159 512 192 512c31.9 0 60.6-9.9 80.4-18.9c5.8-2.7 11.1-5.3 15.6-7.7c4.5 2.4 9.7 5.1 15.6 7.7c19.8 9 48.5 18.9 80.4 18.9c33 0 65.5-10.3 94.5-25.8c13.4 8.4 33.7 19.3 58.2 25c17.2 4 34.4-6.7 38.4-23.9s-6.7-34.4-23.9-38.4c-18.1-4.2-36.2-13.3-50.6-25.2c-11.1-9.4-27.3-10.1-39.2-1.7l0 0C439.4 437.2 410.9 448 384 448c-27.5 0-55-10.6-77.5-26.1z" />
                                                            </svg></i>
                                                        <div class="d-inline-block">
                                                            <h5>Pompa Nutrisi</h5>
                                                            <span>Monitoring Pompa Nutrisi</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-12 b-r-default">
                                                                <h2>Nutrisi</h2>
                                                                <h4><span id="nutrisi"></span></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Email Sent End -->
                                        <div class="row">
                                            <div class="col-12 col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statestics</h5>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:517px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url('lib') ?>/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('lib') ?>/assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url('lib') ?>/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url('lib') ?>/assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url('lib') ?>/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url('lib') ?>/assets/js/modernizr/modernizr.js"></script>
    <!-- am chart -->
    <script src="<?= base_url('lib') ?>/assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="<?= base_url('lib') ?>/assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Todo js -->
    <script type="text/javascript " src="<?= base_url('lib') ?>/assets/pages/todo/todo.js "></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?= base_url('lib') ?>/assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="<?= base_url('lib') ?>/assets/js/script.js"></script>
    <script type="text/javascript " src="<?= base_url('lib') ?>/assets/js/SmoothScroll.js"></script>
    <script src="<?= base_url('lib') ?>/assets/js/pcoded.min.js"></script>
    <script src="<?= base_url('lib') ?>/assets/js/demo-12.js"></script>
    <script src="<?= base_url('lib') ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>
</body>

</html>