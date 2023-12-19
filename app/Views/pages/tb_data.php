<!DOCTYPE html>
<html lang="en">

<head>
    <title>Monitoring Hidroponik NFT </title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib') ?>/assets/css/jquery.mCustomScrollbar.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       
    
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
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
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
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Nilai pH</th>
                                                            <th scope="col">Nilai TDS</th>
                                                            <th scope="col">Pompa_PH_Up</th>
                                                            <th scope="col">Pompa_PH_Down</th>
                                                            <th scope="col">Pompa Nutrisi</th>
                                                            <th scope="col">Created</th>
                                                            <th scope="col">Updated</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $nomor = 1 ?>
                                                        <?php foreach ($sensor as $row) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $nomor++; ?></th>
                                                                <td><?= $row['ph']; ?></td>
                                                                <td><?= $row['tds']; ?></td>
                                                                <td><?= $row['up']; ?></td>
                                                                <td><?= $row['down']; ?></td>
                                                                <td><?= $row['pompanutrisi']; ?></td>
                                                                <td><?= $row['created_at']; ?></td>
                                                                <td><?= $row['updated_at']; ?></td>
                                                            <?php endforeach; ?>
                                                            </tr>
                                                    </tbody>
                                                </table>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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