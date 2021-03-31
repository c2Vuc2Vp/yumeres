<?php

  $assets = '../../assets/';

  $vendor = '../../vendor/';

  $js = '../files/js/';

  $img = '../files/img/';

  $css = '../files/css/';

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once "../../app/inc/function.php";

  require_once "../../app/inc/connect.php";
  
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yeres, N'1 des sites de ventes en lignes">
    <meta content="Yumeres, E-commerce, commerce, achat, ventes, Shop, Shopping, Afrique, Cote D'ivoire"
          name="keywords">
    <meta content="index, follow" name="robots">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Wishlist | Yumeres - E-commerce</title>

    <link rel="icon" href="<?=$img?>favicon.ico">
    <link rel="stylesheet" href="<?=$css?>bootstrap.css">
    <link rel="stylesheet" href="<?=$css?>core-style.css">
    <link rel="stylesheet" href="<?=$css?>shop.css">
    <link rel="stylesheet" href="<?=$css?>whishlist.css">

</head>

<body>

<div class="search-wrapper">
        <div class="container vw mnc">
                <form action="#" class="header-search-form" method="get">
                    <input class="search form-control" name="q"
                           placeholder="Chercher un produit, une marque ou une catégorie..." type="text" value="">
                    <button class="dn dskp">Rechercher</button>
                    <button class="dn mb primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 52.966 52.966"
                             stroke-width="2" stroke="currentColor" fill="none">
                            <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19S32.459,40,21.983,40z"/>
                        </svg>
                    </button>
                </form>
        </div>
</div>

<div class="mcwr d-flex">

  <?php include '../../app/inc/sidebar.php'; ?>

    <div class="section spar clearfix">
        <div class="container-fluid">

                <div class="shadow-section mt-30" id="page-title">
                    <ol class="bdcb">
                        <li class="bdcb-itm"><a href="../acceuil/index.php" id="bdcbhm">
                            <svg fill="none" height="14.5" stroke="#333" stroke-width="2" viewBox="0 0 24 24" width="14"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </a></li>
                        <li aria-current="page" class="bdcb-itm active">liste d'envie
                        </li>
                    </ol>
                </div>

                <section class="shadow-section">
                    <div id="wishlist" class="row">
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                            <div class="spdw">
                                <div class="product-img">
                                    <img src="<?=$img?>elements/11.png" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff" width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="itmprc">
                                                <span class="lprc">96.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="itnm">
                                        <a href="#">
                                            Huawei Y7p - 6.39" - 48Mpx - 64 Go - 4 Go - Bleu - Garantie 12 Mois
                                        </a>
                                    </div>

                                </div>
                                <div class="itopt">
                                    <div class="act">
                                            <span class="rmv_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                                     height="18" fill="none" stroke="currentColor" stroke-width="1"><polyline
                                                        points="3 6 5 6 21 6"></polyline><path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line
                                                        x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11"
                                                                                                     x2="14"
                                                                                                     y2="17"></line></svg>
                                            </span>
                                    </div>
                                    <div class="act">
                                            <span class="add_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="16"
                                                     height="18" fill="currentColor" stroke="currentColor"
                                                     stroke-width=".5"><path
                                                        d="M8 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM8 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M15 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM15 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M17.539 4.467c-0.251-0.297-0.63-0.467-1.039-0.467h-12.243l-0.099-0.596c-0.131-0.787-0.859-1.404-1.658-1.404h-1c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.307 0 0.621 0.266 0.671 0.569l1.671 10.027c0.131 0.787 0.859 1.404 1.658 1.404h10c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-10c-0.307 0-0.621-0.266-0.671-0.569l-0.247-1.48 9.965-0.867c0.775-0.067 1.483-0.721 1.611-1.489l0.671-4.027c0.067-0.404-0.038-0.806-0.289-1.102zM16.842 5.404l-0.671 4.027c-0.053 0.316-0.391 0.629-0.711 0.657l-10.043 0.873-0.994-5.962h12.076c0.117 0 0.215 0.040 0.276 0.113s0.085 0.176 0.066 0.291z"></path></svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                            <div class="spdw">
                                <div class="product-img">
                                    <img src="<?=$img?>elements/2.png" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff" width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="itmprc">
                                                <span class="lprc">37.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="itnm">
                                        <a href="#">
                                            Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce
                                            GTX1080 - 1TB Hard Drive
                                        </a>
                                    </div>
                                </div>
                                <div class="itopt">
                                    <div class="act">
                                            <span class="rmv_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                                     height="18" fill="none" stroke="currentColor" stroke-width="1"><polyline
                                                        points="3 6 5 6 21 6"></polyline><path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line
                                                        x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11"
                                                                                                     x2="14"
                                                                                                     y2="17"></line></svg>
                                            </span>
                                    </div>
                                    <div class="act">
                                            <span class="add_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="16"
                                                     height="18" fill="currentColor" stroke="currentColor"
                                                     stroke-width=".5"><path
                                                        d="M8 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM8 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M15 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM15 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M17.539 4.467c-0.251-0.297-0.63-0.467-1.039-0.467h-12.243l-0.099-0.596c-0.131-0.787-0.859-1.404-1.658-1.404h-1c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.307 0 0.621 0.266 0.671 0.569l1.671 10.027c0.131 0.787 0.859 1.404 1.658 1.404h10c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-10c-0.307 0-0.621-0.266-0.671-0.569l-0.247-1.48 9.965-0.867c0.775-0.067 1.483-0.721 1.611-1.489l0.671-4.027c0.067-0.404-0.038-0.806-0.289-1.102zM16.842 5.404l-0.671 4.027c-0.053 0.316-0.391 0.629-0.711 0.657l-10.043 0.873-0.994-5.962h12.076c0.117 0 0.215 0.040 0.276 0.113s0.085 0.176 0.066 0.291z"></path></svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                            <div class="spdw">
                                <div class="product-img">
                                    <img src="<?=$img?>elements/3.png" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff" width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="itmprc">
                                                <span class="lprc">27.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="itnm">
                                        <a href="#">
                                            Sony - ZX Series On-Ear Headphones - Black
                                        </a>
                                    </div>
                                </div>
                                <div class="itopt">
                                    <div class="act">
                                            <span class="rmv_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                                     height="18" fill="none" stroke="currentColor" stroke-width="1"><polyline
                                                        points="3 6 5 6 21 6"></polyline><path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line
                                                        x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11"
                                                                                                     x2="14"
                                                                                                     y2="17"></line></svg>
                                            </span>
                                    </div>
                                    <div class="act">
                                            <span class="add_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="16"
                                                     height="18" fill="currentColor" stroke="currentColor"
                                                     stroke-width=".5"><path
                                                        d="M8 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM8 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M15 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM15 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M17.539 4.467c-0.251-0.297-0.63-0.467-1.039-0.467h-12.243l-0.099-0.596c-0.131-0.787-0.859-1.404-1.658-1.404h-1c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.307 0 0.621 0.266 0.671 0.569l1.671 10.027c0.131 0.787 0.859 1.404 1.658 1.404h10c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-10c-0.307 0-0.621-0.266-0.671-0.569l-0.247-1.48 9.965-0.867c0.775-0.067 1.483-0.721 1.611-1.489l0.671-4.027c0.067-0.404-0.038-0.806-0.289-1.102zM16.842 5.404l-0.671 4.027c-0.053 0.316-0.391 0.629-0.711 0.657l-10.043 0.873-0.994-5.962h12.076c0.117 0 0.215 0.040 0.276 0.113s0.085 0.176 0.066 0.291z"></path></svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                            <div class="spdw">
                                <div class="product-img">
                                    <img src="<?=$img?>elements/5.png" alt="">
                                </div>

                                <div class="card-body">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff" width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="itmprc">
                                                <span class="lprc">29.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="itnm">
                                        <a href="#">
                                            Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce
                                            GTX1080 - 1TB Hard Drive +
                                            2x512GB Solid State Drive - Gray
                                        </a>
                                    </div>
                                </div>
                                <div class="itopt">
                                    <div class="act">
                                            <span class="rmv_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                                     height="18" fill="none" stroke="currentColor" stroke-width="1"><polyline
                                                        points="3 6 5 6 21 6"></polyline><path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line
                                                        x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11"
                                                                                                     x2="14"
                                                                                                     y2="17"></line></svg>
                                            </span>
                                    </div>
                                    <div class="act">
                                            <span class="add_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="16"
                                                     height="18" fill="currentColor" stroke="currentColor"
                                                     stroke-width=".5"><path
                                                        d="M8 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM8 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M15 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM15 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M17.539 4.467c-0.251-0.297-0.63-0.467-1.039-0.467h-12.243l-0.099-0.596c-0.131-0.787-0.859-1.404-1.658-1.404h-1c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.307 0 0.621 0.266 0.671 0.569l1.671 10.027c0.131 0.787 0.859 1.404 1.658 1.404h10c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-10c-0.307 0-0.621-0.266-0.671-0.569l-0.247-1.48 9.965-0.867c0.775-0.067 1.483-0.721 1.611-1.489l0.671-4.027c0.067-0.404-0.038-0.806-0.289-1.102zM16.842 5.404l-0.671 4.027c-0.053 0.316-0.391 0.629-0.711 0.657l-10.043 0.873-0.994-5.962h12.076c0.117 0 0.215 0.040 0.276 0.113s0.085 0.176 0.066 0.291z"></path></svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                            <div class="spdw">
                                <div class="product-img">
                                    <img src="<?=$img?>elements/7.png" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff" width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="itmprc">
                                                <span class="lprc">37.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="itnm">
                                        <a href="#">
                                            Sony - ZX Series On-Ear Headphones - Black
                                        </a>
                                    </div>
                                </div>
                                <div class="itopt">
                                    <div class="act">
                                            <span class="rmv_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                                     height="18" fill="none" stroke="currentColor" stroke-width="1"><polyline
                                                        points="3 6 5 6 21 6"></polyline><path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line
                                                        x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11"
                                                                                                     x2="14"
                                                                                                     y2="17"></line></svg>
                                            </span>
                                    </div>
                                    <div class="act">
                                            <span class="add_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="16"
                                                     height="18" fill="currentColor" stroke="currentColor"
                                                     stroke-width=".5"><path
                                                        d="M8 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM8 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M15 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM15 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M17.539 4.467c-0.251-0.297-0.63-0.467-1.039-0.467h-12.243l-0.099-0.596c-0.131-0.787-0.859-1.404-1.658-1.404h-1c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.307 0 0.621 0.266 0.671 0.569l1.671 10.027c0.131 0.787 0.859 1.404 1.658 1.404h10c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-10c-0.307 0-0.621-0.266-0.671-0.569l-0.247-1.48 9.965-0.867c0.775-0.067 1.483-0.721 1.611-1.489l0.671-4.027c0.067-0.404-0.038-0.806-0.289-1.102zM16.842 5.404l-0.671 4.027c-0.053 0.316-0.391 0.629-0.711 0.657l-10.043 0.873-0.994-5.962h12.076c0.117 0 0.215 0.040 0.276 0.113s0.085 0.176 0.066 0.291z"></path></svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                            <div class="spdw">
                                <div class="product-img">
                                    <img src="<?=$img?>elements/8.png" alt="">
                                </div>

                                <div class="card-body">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff" width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="itmprc">
                                                <span class="lprc">49.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="itnm">
                                        <a href="#">
                                            Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce
                                        </a>
                                    </div>
                                </div>
                                <div class="itopt">
                                    <div class="act">
                                            <span class="rmv_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                                     height="18" fill="none" stroke="currentColor" stroke-width="1"><polyline
                                                        points="3 6 5 6 21 6"></polyline><path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line
                                                        x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11"
                                                                                                     x2="14"
                                                                                                     y2="17"></line></svg>
                                            </span>
                                    </div>
                                    <div class="act">
                                            <span class="add_wsh">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="16"
                                                     height="18" fill="currentColor" stroke="currentColor"
                                                     stroke-width=".5"><path
                                                        d="M8 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM8 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M15 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM15 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path><path
                                                        d="M17.539 4.467c-0.251-0.297-0.63-0.467-1.039-0.467h-12.243l-0.099-0.596c-0.131-0.787-0.859-1.404-1.658-1.404h-1c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.307 0 0.621 0.266 0.671 0.569l1.671 10.027c0.131 0.787 0.859 1.404 1.658 1.404h10c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-10c-0.307 0-0.621-0.266-0.671-0.569l-0.247-1.48 9.965-0.867c0.775-0.067 1.483-0.721 1.611-1.489l0.671-4.027c0.067-0.404-0.038-0.806-0.289-1.102zM16.842 5.404l-0.671 4.027c-0.053 0.316-0.391 0.629-0.711 0.657l-10.043 0.873-0.994-5.962h12.076c0.117 0 0.215 0.040 0.276 0.113s0.085 0.176 0.066 0.291z"></path></svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
</div>
<section class="footer-section">
    <div class="container vw">
        <div class="row">
            <div class="col-12">
                <div id="copyright">
                    <div class="container clearfix">
                        <div class="col_half nobottommargin">

                            <span class="font-primary"> Copyright © 2021 | Tous droits réservés à <a
                                    class="footer-copyright-link"
                                    href="https://www.yumeres.com"> Yumeres Shop.</a></span>
                        </div>
                        <div class="col_half col_last nobottommargin">
                            <div class="copyrights-menu copyright-links fright clearfix">
                                <a href="../acceuil/index.php">Accueil</a>/<a href="https://www.yumeres.com/about">A
                                propos</a>/<a
                                    href="mailto:support@yumeres.com">Support</a>/<a
                                    href="mailto:contact@yumeres.com">Contact</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?=$js?>jquery.js"></script>
<script src="<?=$js?>bootstrap.js"></script>
<script src="<?=$js?>plugins.js"></script>
<script src="<?=$js?>function.js"></script>

</body>

</html>