<?php

  $assets = '../../assets/';

  $vendor = '../../vendor/';

  $css = 'css/';

  $js = 'js/';

?>
<!DOCTYPE html>

<html lang="fr">

  <head>

    <!-- metadonnées -->
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial scale-1">

    <meta name="description" content="<?=WEBDESCR?>">

    <meta name="author" content="<?=AUTHOR?>">

    <!-- Title Page-->
    <title><?=WEBNAME?>_compte</title>

    <!-- Fontfaces CSS-->
    <!--===============================================================================================-->
    <link rel="icon" href="../../img/core-img/favicon.ico">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?=$vendor?>sweetalert/sweetalert2.css">
    <!--===============================================================================================-->
    <link href="<?=$css?>font-face.css" rel="stylesheet" media="all">
    <!--===============================================================================================-->
    <link href="<?=$vendor?>font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!--===============================================================================================-->
    <link href="v<?=$vendor?>font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <!--===============================================================================================-->
    <link href="<?=$vendor?>mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!--===============================================================================================-->

    <!-- Bootstrap CSS-->
    <link href="<?=$vendor?>bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=$vendor?>animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=$vendor?>bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=$vendor?>wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=$vendor?>css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=$vendor?>slick/slick.css" rel="stylesheet" media="all">
    <!-- <link href="<?=$vendor?>select2/select2.min.css" rel="stylesheet" media="all"> -->
    <link href="<?=$vendor?>perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Table CSS -->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?=$vendor?>DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?=$vendor?>DataTables-1.10.20/css/responsive.dataTables.min.css">
    <!--===============================================================================================-->

    <!-- Main CSS-->
    <link href="<?=$css?>theme.css" rel="stylesheet" media="all">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?=$assets?>css/style.css">
    <!--===============================================================================================-->
    <!-- dropzoneCSS -->
    <link rel="stylesheet" href="<?=$vendor?>dropzone5/dist/dropzone.css">
    <!-- Jquery JS-->
    <script src="<?=$vendor?>jQuery-3.3.1/jquery-3.3.1.js"></script>

    <!-- Table JS -->
    <script src="<?=$vendor?>DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=$vendor?>DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=$vendor?>DataTables-1.10.20/js/dataTables.responsive.min.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="<?=$vendor?>DataTables-1.10.20/js/dataTables.select.min.js"></script> -->
    <!--===============================================================================================-->
    <!-- sweetalert -->
    <script src="<?=$vendor?>sweetalert/sweetalert2.js"></script>
    <!--===============================================================================================-->
    <!-- CKeditor4 -->
    <script src="<?=$vendor?>ckeditor_4/ckeditor/ckeditor.js"></script>
    <!--===============================================================================================-->
    <!-- dropzoneJS -->
    <script src="<?=$vendor?>dropzone5/dist/dropzone.js"></script>

  </head>

  <body class="animsition animated slow fadeIn delay-5s">

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img class="rounded-circle" src="../../img/elements/logo/logo_ob.jpg" alt="<?=$username?>" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="animated delay-5s rubberBand slow menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../../img/core-img/logo.png" alt="Yumeres">
                </a>
            </div>
            <?php

                        require_once "sidebar.php";

                      ?>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button ml-auto">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img class="rounded-circle" src="../../img/elements/logo/logo_ob.jpg" alt="<?=$username?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?=$username?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img class="rounded-circle" src="../../img/elements/logo/logo_ob.jpg" alt="<?=$username?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?=$username?></a>
                                                    </h5>
                                                    <span class="email"><?=$usermail?></span>
                                                </div>
                                            </div>
                                            <!-- <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div> -->
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">

            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <!-- Bootstrap JS-->
    <script src="<?=$vendor?>bootstrap-4.1/popper.min.js"></script>
    <script src="<?=$vendor?>bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?=$vendor?>slick/slick.min.js">
    </script>
    <script src="<?=$vendor?>wow/wow.min.js"></script>
    <script src="<?=$vendor?>animsition/animsition.min.js"></script>
    <script src="<?=$vendor?>bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=$vendor?>counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=$vendor?>counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=$vendor?>circle-progress/circle-progress.min.js"></script>
    <script src="<?=$vendor?>perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=$vendor?>chartjs/Chart.bundle.min.js"></script>
    <!-- <script src="<?=$vendor?>select2/select2.min.js"> -->
    </script>

    <!-- Main JS-->
    <script src="<?=$assets?>js/mon_js.js"></script>
    <script src="js/main.js"></script>

  </body>

</html>
<!-- end document-->
