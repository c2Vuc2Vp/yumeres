<?php

  $assets = '../assets/';

  $vendor = '../vendor/';

  $js = 'login/js/';

  $css = 'login/css/';

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yeres, N'1 des sites de ventes en lignes">
    <meta content="Yumeres, E-commerce, commerce, achat, ventes, Shop, Shopping, Afrique, Cote D'ivoire"
          name="keywords">
    <meta content="index, follow" name="robots">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Catégorie | Yumeres - E-commerce</title>

    <link rel="icon" href="../files/img/favicon.ico">

    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/core-style.css">
    <link rel="stylesheet" href="../files/css/cat.css">
    <link rel="stylesheet" href="../files/css/nice-select.css">
    <link rel="stylesheet" href="../files/css/shop.css">

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
    <div class="mobile-nav">
        <div class="ynb">
            <a href="https://www.yumeres.com"><img src="../files/img/logo.png" alt=""></a>
        </div>
        <div class="yntg">
            <span></span><span></span><span></span>
        </div>
    </div>
    <header class="header-area">
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="logo">
            <a href="https://www.yumeres.com"><img src="../files/img/logo.png" alt=""></a>
        </div>
        <nav class="nvb">
            <ul>
                <li><a href="../index.html">Accueil</a></li>
                <li class="active"><a href="index.html">Catégorie</a></li>
                <li><a href="mailto:support@yumeres.com">Contact</a></li>
            </ul>
        </nav>

        <div class="mb-70"></div>
        <div class="cart-fav-search mb-50">
            <a href="../wishlist.html" class="cart-nav"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> Panier
                <span>(0)</span></a>
            <a href="#" class="search-nav"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 52.966 52.966" stroke="currentColor" fill="none" stroke-width="4"><path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19S32.459,40,21.983,40z"/></svg> Rechercher</a>
        </div>
        <div class="social-info d-flex justify-content-between">
            <a href="https://www.facebook.com/yumeres"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
            <a href="https://www.telegram.com/yumeres"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512" fill="currentColor"><path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/></svg></a>
            <a href="https://www.instagram.com/yumeres"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512" fill="currentColor"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
            <a href="mailto:support@yumeres.com"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512" fill="currentColor"><path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm54.6 36.4c27.1 8.6 52 23.6 72.7 44.3 20.7 20.7 35.7 45.6 44.3 72.7l-88.8 6c-8.2-14-19.9-25.7-33.9-34l5.7-89zm-181.9 44.3c20.7-20.7 45.5-35.7 72.7-44.3l5.7 89c-13.9 8.3-25.6 20-33.9 33.9l-88.9-5.9c8.7-27.1 23.7-52 44.4-72.7zm72.7 298.9c-27.1-8.6-52-23.6-72.7-44.3-20.7-20.7-35.7-45.6-44.3-72.7l89-5.7c8.2 13.9 19.9 25.5 33.8 33.8l-5.8 88.9zM256 324c-37.5 0-68-30.5-68-68s30.5-68 68-68 68 30.5 68 68-30.5 68-68 68zm127.3 59.3c-20.7 20.7-45.6 35.7-72.7 44.3l-5.9-88.9c14.1-8.3 25.8-20.1 34.1-34.2l88.8 6c-8.6 27.2-23.6 52.1-44.3 72.8z"/></svg></a>
        </div>

        <div id="dark_swipe">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="8" cy="12" r="3"></circle></svg>
        </div>
    </header>

    <div class="section spar d-flex">
        <div class="d-none d-md-block sca">
            <div class="ctnvb">
                <div class="srtsct">
                    <h3 class="nvh">Catalogue</h3>
                    <a class="cttm cth" href="#">Téléphone</a>
                    <div class="ctp">
                        <a class="cttm" href="#">Iphone</a>
                        <a class="cttm" href="#">Basique</a>
                        <a class="cttm cttmh" href="#">Smartphone</a>
                        <a class="cttm" href="#">Android</a>
                        <a class="cttm" href="#">Windows phone</a>
                    </div>
                </div>
                <div class="srtsct">
                    <h3 class="nvh">Livraison Rapide</h3>
                    <div class="ctp">
                        <div class="checkbox sg">
                            <input type="checkbox" id="sgCb" value="option" checked="" aria-label="sg">
                            <label></label>
                        </div>
                    </div>
                </div>
                <div class="srtsct">
                    <h3 class="nvh">Radio Test</h3>
                    <div class="ctp">
                        <div class="radio">
                            <input type="radio" name="radio" id="radio0" value="option0">
                            <label for="radio0">Oui</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="radio" id="radio1" value="option1">
                            <label for="radio1">Non</label>
                        </div>
                    </div>
                </div>
                <div class="srtsct">
                    <h3 class="nvh">Marque</h3>
                    <div class="ctp f">
                        <div class="checkbox">
                            <input id="checkbox0" type="checkbox">
                            <label for="checkbox0">Samsung</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox2" type="checkbox">
                            <label for="checkbox2">Apple</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox3" type="checkbox">
                            <label for="checkbox3">Huawei</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox4" type="checkbox">
                            <label for="checkbox4">Xiaomi</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox5" type="checkbox">
                            <label for="checkbox5">Nokia</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox6" type="checkbox">
                            <label for="checkbox6">Samsung</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox7" type="checkbox">
                            <label for="checkbox7">Apple</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox8" type="checkbox">
                            <label for="checkbox8">Huawei</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox9" type="checkbox">
                            <label for="checkbox9">Xiaomi</label>
                        </div>
                        <div class="checkbox">
                            <input id="checkbox10" type="checkbox">
                            <label for="checkbox10">Nokia</label>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="container-fluid">

            <div class="shadow-section mt-30" id="page-title">
                <ol class="bdcb">
                    <li class="bdcb-itm"><a href="https://www.yumeres.com" id="bdcbhm">
                        <svg fill="none" height="14.5" stroke="#333" stroke-width="2" viewBox="0 0 24 24"
                             width="14"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </a></li>
                    <li aria-current="page" class="bdcb-itm active">catégorie
                    </li>
                </ol>
            </div>

            <div class="shadow-section product-topbar d-xl-flex  justify-content-between">
                <div class="total-products">
                    <p>Afficher : <span id="tlpda">1-8</span> sur <span id="tlpds">25</span></p>
                </div>
                <div class="product-sorting d-flex">
                    <div class="sort-by-date d-flex align-items-center mr-15">
                        <p>Trier par : </p>
                        <form action="#" method="get">
                            <select name="select" id="sortBydate">
                                <option value="value"> Date</option>
                                <option value="value"> Nouveautés</option>
                                <option value="value"> Popularités</option>
                            </select>
                        </form>
                    </div>
                    <div class="view-product d-flex align-items-center">
                        <p>Afficher : </p>
                        <form action="#" method="get">
                            <select name="select" id="viewProduct">
                                <option value="value">12</option>
                                <option value="value">24</option>
                                <option value="value">48</option>
                                <option value="value">96</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="shadow-section ctpdc">
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-12 col-xl-4">
                        <div class="spdw">
                            <a class="pdlk" href="../product.html">
                                <div class="pdti">
                                    <img src="../files/img/product-img/product1.jpg" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product2.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff"
                                                                         width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc">96.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="itnm">
                                                Huawei Y7p - 6.39" - 48Mpx - 64 Go - 4 Go - Bleu
                                        </span>
                                    <div class="tsvb">
                                        <div class="tb tsic">
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H120C89.1 0 64 25.1 64 56v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H112V56c0-4.4 3.6-8 8-8h240c4.4 0 8 3.6 8 8v312H242.7c-16.6-28.6-47.2-48-82.7-48-17.6 0-33.8 5.1-48 13.3V288H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256-320h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1zM256 248v-16c0-4.4-3.6-8-8-8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8zm24-56c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240z"/>
                                                </svg>
                                            </div>
                                            <div class="ic grn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M256 409.6V100l-142.9 59.5c8.4 116.2 65.2 202.6 142.9 250.1zM466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256 464C158.5 423.4 64 297.3 64 128l192-80 192 80c0 173.8-98.4 297-192 336z"/>
                                                </svg>
                                            </div>
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M449.716,239.842c-0.543-7.535-7.082-13.191-14.628-12.661c-7.536,0.543-13.204,7.092-12.662,14.628c0.337,4.655,0.506,9.431,0.506,14.191c0,109.061-88.726,197.787-197.786,197.787C116.086,453.787,27.36,365.06,27.36,256S116.086,58.214,225.147,58.214c43.191,0,84.21,13.668,118.62,39.525c6.041,4.538,14.615,3.321,19.154-2.718c4.54-6.04,3.323-14.616-2.717-19.154c-39.189-29.447-85.891-45.012-135.058-45.012C101.001,30.854,0,131.855,0,256s101.001,225.145,225.147,225.145S450.292,380.146,450.292,256C450.292,250.586,450.097,245.15,449.716,239.842z"/>
                                                    <path d="M496.395,61.77c-20.808-20.807-54.666-20.807-75.474,0l-197.11,197.108l-69.874-69.875c-20.808-20.807-54.666-20.807-75.474,0c-20.808,20.808-20.808,54.666,0,75.474l120.341,120.341c6.895,6.895,15.951,10.342,25.007,10.342c9.057,0,18.113-3.447,25.008-10.342l247.576-247.576C517.201,116.435,517.201,82.579,496.395,61.77z M477.049,117.897L229.472,365.475c-3.12,3.12-8.2,3.12-11.32,0L97.811,245.133c-10.141-10.141-10.141-26.64,0-36.781c5.07-5.072,11.729-7.606,18.39-7.606s13.321,2.535,18.39,7.606l71.882,71.882c4.632,4.631,10.791,7.181,17.339,7.181c6.551,0,12.71-2.551,17.341-7.182L440.268,81.116c10.138-10.141,26.64-10.141,36.781,0C487.189,91.257,487.189,107.756,477.049,117.897z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tb tsbd">
                                                <span class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         width="18"
                                                         height="18" fill="currentColor"><path fill="none"
                                                                                               d="M0 0h24v24H0z"/><path
                                                            d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm8 5.5v7h2v-7h-2zm-.285 0H8.601l-1.497 4.113L5.607 8.5H3.493l2.611 6.964h2L10.715 8.5zm5.285 5h1.5a2.5 2.5 0 1 0 0-5H14v7h2v-2zm0-2v-1h1.5a.5.5 0 1 1 0 1H16z"/></svg>
                                                </span>
                                            <span class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         width="18"
                                                         height="18" fill="currentColor"><path fill="none"
                                                                                               d="M0 0h24v24H0z"/><path
                                                            d="M2 19h20v2H2v-2zm9-11h2v8h-2V8zM7.965 8h2.125l-2.986 7.964h-2L2.118 8h2.125l1.861 5.113L7.965 8zM17 14v2h-2V8h4a3 3 0 0 1 0 6h-2zm0-4v2h2a1 1 0 0 0 0-2h-2zM2 3h20v2H2V3z"/></svg>
                                                </span>
                                            <span class="ic dn">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="18"
                                                        height="18" stroke="currentColor" fill="currentColor"><path
                                                           d="M4.873 3h14.254a1 1 0 0 1 .809.412l3.823 5.256a.5.5 0 0 1-.037.633L12.367 21.602a.5.5 0 0 1-.706.028c-.007-.006-3.8-4.115-11.383-12.329a.5.5 0 0 1-.037-.633l3.823-5.256A1 1 0 0 1 4.873 3zm.51 2l-2.8 3.85L12 19.05 21.417 8.85 18.617 5H5.383z"/></svg>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="pdopt">
                                <button class="byart btn btn-primary mx-auto mb-3">
                                    Acheter
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-12 col-xl-4">
                        <div class="spdw">
                            <a class="pdlk" href="../product.html">
                                <div class="pdti">
                                    <img src="../files/img/product-img/product2.jpg" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product3.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff"
                                                                         width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc">25.375.115.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="itnm"> Redmi Note 9 Pro 6Go 128Go Smartphone 5020mAh 64MP NFC Infrared
                                        </span>

                                    <div class="tsvb ts">
                                        <div class="tb tsic">
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H120C89.1 0 64 25.1 64 56v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H112V56c0-4.4 3.6-8 8-8h240c4.4 0 8 3.6 8 8v312H242.7c-16.6-28.6-47.2-48-82.7-48-17.6 0-33.8 5.1-48 13.3V288H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256-320h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1zM256 248v-16c0-4.4-3.6-8-8-8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8zm24-56c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240z"/>
                                                </svg>
                                            </div>
                                            <div class="ic grn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M256 409.6V100l-142.9 59.5c8.4 116.2 65.2 202.6 142.9 250.1zM466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256 464C158.5 423.4 64 297.3 64 128l192-80 192 80c0 173.8-98.4 297-192 336z"/>
                                                </svg>
                                            </div>
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M449.716,239.842c-0.543-7.535-7.082-13.191-14.628-12.661c-7.536,0.543-13.204,7.092-12.662,14.628c0.337,4.655,0.506,9.431,0.506,14.191c0,109.061-88.726,197.787-197.786,197.787C116.086,453.787,27.36,365.06,27.36,256S116.086,58.214,225.147,58.214c43.191,0,84.21,13.668,118.62,39.525c6.041,4.538,14.615,3.321,19.154-2.718c4.54-6.04,3.323-14.616-2.717-19.154c-39.189-29.447-85.891-45.012-135.058-45.012C101.001,30.854,0,131.855,0,256s101.001,225.145,225.147,225.145S450.292,380.146,450.292,256C450.292,250.586,450.097,245.15,449.716,239.842z"/>
                                                    <path d="M496.395,61.77c-20.808-20.807-54.666-20.807-75.474,0l-197.11,197.108l-69.874-69.875c-20.808-20.807-54.666-20.807-75.474,0c-20.808,20.808-20.808,54.666,0,75.474l120.341,120.341c6.895,6.895,15.951,10.342,25.007,10.342c9.057,0,18.113-3.447,25.008-10.342l247.576-247.576C517.201,116.435,517.201,82.579,496.395,61.77z M477.049,117.897L229.472,365.475c-3.12,3.12-8.2,3.12-11.32,0L97.811,245.133c-10.141-10.141-10.141-26.64,0-36.781c5.07-5.072,11.729-7.606,18.39-7.606s13.321,2.535,18.39,7.606l71.882,71.882c4.632,4.631,10.791,7.181,17.339,7.181c6.551,0,12.71-2.551,17.341-7.182L440.268,81.116c10.138-10.141,26.64-10.141,36.781,0C487.189,91.257,487.189,107.756,477.049,117.897z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tb tsbd">
                                            <span class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         width="18"
                                                         height="18" fill="currentColor"><path fill="none"
                                                                                               d="M0 0h24v24H0z"/><path
                                                            d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm8 5.5v7h2v-7h-2zm-.285 0H8.601l-1.497 4.113L5.607 8.5H3.493l2.611 6.964h2L10.715 8.5zm5.285 5h1.5a2.5 2.5 0 1 0 0-5H14v7h2v-2zm0-2v-1h1.5a.5.5 0 1 1 0 1H16z"/></svg>
                                                </span>
                                            <span class="ic dn">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="18"
                                                        height="18" stroke="currentColor" fill="currentColor"><path
                                                           d="M4.873 3h14.254a1 1 0 0 1 .809.412l3.823 5.256a.5.5 0 0 1-.037.633L12.367 21.602a.5.5 0 0 1-.706.028c-.007-.006-3.8-4.115-11.383-12.329a.5.5 0 0 1-.037-.633l3.823-5.256A1 1 0 0 1 4.873 3zm.51 2l-2.8 3.85L12 19.05 21.417 8.85 18.617 5H5.383z"/></svg>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="pdopt">
                                <button class="byart btn btn-primary mx-auto mb-3">
                                    Acheter
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-12 col-xl-4">
                        <div class="spdw">
                            <a class="pdlk" href="../product.html">
                                <div class="pdti">
                                    <img src="../files/img/product-img/product3.jpg" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product4.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff"
                                                                         width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc">355.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="itnm"> Nokia 8.3 5G Polar Night, Dual SIM, 64GB 8GB, Official Warranty No Brand
                                        </span>

                                    <div class="tsvb">
                                        <div class="tb tsic">
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H120C89.1 0 64 25.1 64 56v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H112V56c0-4.4 3.6-8 8-8h240c4.4 0 8 3.6 8 8v312H242.7c-16.6-28.6-47.2-48-82.7-48-17.6 0-33.8 5.1-48 13.3V288H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256-320h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1zM256 248v-16c0-4.4-3.6-8-8-8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8zm24-56c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240z"/>
                                                </svg>
                                            </div>
                                            <div class="ic grn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M256 409.6V100l-142.9 59.5c8.4 116.2 65.2 202.6 142.9 250.1zM466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256 464C158.5 423.4 64 297.3 64 128l192-80 192 80c0 173.8-98.4 297-192 336z"/>
                                                </svg>
                                            </div>
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M449.716,239.842c-0.543-7.535-7.082-13.191-14.628-12.661c-7.536,0.543-13.204,7.092-12.662,14.628c0.337,4.655,0.506,9.431,0.506,14.191c0,109.061-88.726,197.787-197.786,197.787C116.086,453.787,27.36,365.06,27.36,256S116.086,58.214,225.147,58.214c43.191,0,84.21,13.668,118.62,39.525c6.041,4.538,14.615,3.321,19.154-2.718c4.54-6.04,3.323-14.616-2.717-19.154c-39.189-29.447-85.891-45.012-135.058-45.012C101.001,30.854,0,131.855,0,256s101.001,225.145,225.147,225.145S450.292,380.146,450.292,256C450.292,250.586,450.097,245.15,449.716,239.842z"/>
                                                    <path d="M496.395,61.77c-20.808-20.807-54.666-20.807-75.474,0l-197.11,197.108l-69.874-69.875c-20.808-20.807-54.666-20.807-75.474,0c-20.808,20.808-20.808,54.666,0,75.474l120.341,120.341c6.895,6.895,15.951,10.342,25.007,10.342c9.057,0,18.113-3.447,25.008-10.342l247.576-247.576C517.201,116.435,517.201,82.579,496.395,61.77z M477.049,117.897L229.472,365.475c-3.12,3.12-8.2,3.12-11.32,0L97.811,245.133c-10.141-10.141-10.141-26.64,0-36.781c5.07-5.072,11.729-7.606,18.39-7.606s13.321,2.535,18.39,7.606l71.882,71.882c4.632,4.631,10.791,7.181,17.339,7.181c6.551,0,12.71-2.551,17.341-7.182L440.268,81.116c10.138-10.141,26.64-10.141,36.781,0C487.189,91.257,487.189,107.756,477.049,117.897z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tb tsbd">
                                            <span class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         width="18"
                                                         height="18" fill="currentColor"><path fill="none"
                                                                                               d="M0 0h24v24H0z"/><path
                                                            d="M2 19h20v2H2v-2zm9-11h2v8h-2V8zM7.965 8h2.125l-2.986 7.964h-2L2.118 8h2.125l1.861 5.113L7.965 8zM17 14v2h-2V8h4a3 3 0 0 1 0 6h-2zm0-4v2h2a1 1 0 0 0 0-2h-2zM2 3h20v2H2V3z"/></svg>
                                                </span>
                                            <span class="ic dn">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="18"
                                                        height="18" stroke="currentColor" fill="currentColor"><path
                                                           d="M4.873 3h14.254a1 1 0 0 1 .809.412l3.823 5.256a.5.5 0 0 1-.037.633L12.367 21.602a.5.5 0 0 1-.706.028c-.007-.006-3.8-4.115-11.383-12.329a.5.5 0 0 1-.037-.633l3.823-5.256A1 1 0 0 1 4.873 3zm.51 2l-2.8 3.85L12 19.05 21.417 8.85 18.617 5H5.383z"/></svg>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="pdopt">
                                <button class="byart btn btn-primary mx-auto mb-3">
                                    Acheter
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-12 col-xl-4">
                        <div class="spdw">
                            <a class="pdlk" href="../product.html">
                                <div class="pdti">
                                    <img src="../files/img/product-img/product4.jpg" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product5.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff"
                                                                         width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc">125.000</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="itnm"> UMIDIGI F2 Android 10 Smartphone 6.53" 6GB 128GB 5150mAh NFC 2SIM téléphone
                                        </span>
                                    <div class="tsvb ts">
                                        <div class="tb tsic">
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H120C89.1 0 64 25.1 64 56v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H112V56c0-4.4 3.6-8 8-8h240c4.4 0 8 3.6 8 8v312H242.7c-16.6-28.6-47.2-48-82.7-48-17.6 0-33.8 5.1-48 13.3V288H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256-320h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1zM256 248v-16c0-4.4-3.6-8-8-8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8zm24-56c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240z"/>
                                                </svg>
                                            </div>
                                            <div class="ic grn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M256 409.6V100l-142.9 59.5c8.4 116.2 65.2 202.6 142.9 250.1zM466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256 464C158.5 423.4 64 297.3 64 128l192-80 192 80c0 173.8-98.4 297-192 336z"/>
                                                </svg>
                                            </div>
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M449.716,239.842c-0.543-7.535-7.082-13.191-14.628-12.661c-7.536,0.543-13.204,7.092-12.662,14.628c0.337,4.655,0.506,9.431,0.506,14.191c0,109.061-88.726,197.787-197.786,197.787C116.086,453.787,27.36,365.06,27.36,256S116.086,58.214,225.147,58.214c43.191,0,84.21,13.668,118.62,39.525c6.041,4.538,14.615,3.321,19.154-2.718c4.54-6.04,3.323-14.616-2.717-19.154c-39.189-29.447-85.891-45.012-135.058-45.012C101.001,30.854,0,131.855,0,256s101.001,225.145,225.147,225.145S450.292,380.146,450.292,256C450.292,250.586,450.097,245.15,449.716,239.842z"/>
                                                    <path d="M496.395,61.77c-20.808-20.807-54.666-20.807-75.474,0l-197.11,197.108l-69.874-69.875c-20.808-20.807-54.666-20.807-75.474,0c-20.808,20.808-20.808,54.666,0,75.474l120.341,120.341c6.895,6.895,15.951,10.342,25.007,10.342c9.057,0,18.113-3.447,25.008-10.342l247.576-247.576C517.201,116.435,517.201,82.579,496.395,61.77z M477.049,117.897L229.472,365.475c-3.12,3.12-8.2,3.12-11.32,0L97.811,245.133c-10.141-10.141-10.141-26.64,0-36.781c5.07-5.072,11.729-7.606,18.39-7.606s13.321,2.535,18.39,7.606l71.882,71.882c4.632,4.631,10.791,7.181,17.339,7.181c6.551,0,12.71-2.551,17.341-7.182L440.268,81.116c10.138-10.141,26.64-10.141,36.781,0C487.189,91.257,487.189,107.756,477.049,117.897z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tb tsbd">
                                            <span class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         width="18"
                                                         height="18" fill="currentColor"><path fill="none"
                                                                                               d="M0 0h24v24H0z"/><path
                                                            d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm8 5.5v7h2v-7h-2zm-.285 0H8.601l-1.497 4.113L5.607 8.5H3.493l2.611 6.964h2L10.715 8.5zm5.285 5h1.5a2.5 2.5 0 1 0 0-5H14v7h2v-2zm0-2v-1h1.5a.5.5 0 1 1 0 1H16z"/></svg>
                                                </span>
                                            <span class="ic dn">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="18"
                                                        height="18" stroke="currentColor" fill="currentColor"><path
                                                           d="M4.873 3h14.254a1 1 0 0 1 .809.412l3.823 5.256a.5.5 0 0 1-.037.633L12.367 21.602a.5.5 0 0 1-.706.028c-.007-.006-3.8-4.115-11.383-12.329a.5.5 0 0 1-.037-.633l3.823-5.256A1 1 0 0 1 4.873 3zm.51 2l-2.8 3.85L12 19.05 21.417 8.85 18.617 5H5.383z"/></svg>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="pdopt">
                                <button class="byart btn btn-primary mx-auto mb-3">
                                    Acheter
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-12 col-xl-4">
                        <div class="spdw">
                            <a class="pdlk" href="../product.html">
                                <div class="pdti">
                                    <img src="../files/img/product-img/product5.jpg" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product6.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff"
                                                                         width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc">83.100</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="itnm">Ulefone Power 6  6.3" FHD+ Android 9.0 Helio P35 4GB+64GB 16MP NFC 4G Smartphone
                                        </span>

                                    <div class="tsvb">
                                        <div class="tb tsic">
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H120C89.1 0 64 25.1 64 56v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H112V56c0-4.4 3.6-8 8-8h240c4.4 0 8 3.6 8 8v312H242.7c-16.6-28.6-47.2-48-82.7-48-17.6 0-33.8 5.1-48 13.3V288H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256-320h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1zM256 248v-16c0-4.4-3.6-8-8-8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8zm24-56c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240z"/>
                                                </svg>
                                            </div>
                                            <div class="ic grn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M256 409.6V100l-142.9 59.5c8.4 116.2 65.2 202.6 142.9 250.1zM466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256 464C158.5 423.4 64 297.3 64 128l192-80 192 80c0 173.8-98.4 297-192 336z"/>
                                                </svg>
                                            </div>
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M449.716,239.842c-0.543-7.535-7.082-13.191-14.628-12.661c-7.536,0.543-13.204,7.092-12.662,14.628c0.337,4.655,0.506,9.431,0.506,14.191c0,109.061-88.726,197.787-197.786,197.787C116.086,453.787,27.36,365.06,27.36,256S116.086,58.214,225.147,58.214c43.191,0,84.21,13.668,118.62,39.525c6.041,4.538,14.615,3.321,19.154-2.718c4.54-6.04,3.323-14.616-2.717-19.154c-39.189-29.447-85.891-45.012-135.058-45.012C101.001,30.854,0,131.855,0,256s101.001,225.145,225.147,225.145S450.292,380.146,450.292,256C450.292,250.586,450.097,245.15,449.716,239.842z"/>
                                                    <path d="M496.395,61.77c-20.808-20.807-54.666-20.807-75.474,0l-197.11,197.108l-69.874-69.875c-20.808-20.807-54.666-20.807-75.474,0c-20.808,20.808-20.808,54.666,0,75.474l120.341,120.341c6.895,6.895,15.951,10.342,25.007,10.342c9.057,0,18.113-3.447,25.008-10.342l247.576-247.576C517.201,116.435,517.201,82.579,496.395,61.77z M477.049,117.897L229.472,365.475c-3.12,3.12-8.2,3.12-11.32,0L97.811,245.133c-10.141-10.141-10.141-26.64,0-36.781c5.07-5.072,11.729-7.606,18.39-7.606s13.321,2.535,18.39,7.606l71.882,71.882c4.632,4.631,10.791,7.181,17.339,7.181c6.551,0,12.71-2.551,17.341-7.182L440.268,81.116c10.138-10.141,26.64-10.141,36.781,0C487.189,91.257,487.189,107.756,477.049,117.897z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tb tsbd">
                                            <span class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         width="18"
                                                         height="18" fill="currentColor"><path fill="none"
                                                                                               d="M0 0h24v24H0z"/><path
                                                            d="M2 19h20v2H2v-2zm9-11h2v8h-2V8zM7.965 8h2.125l-2.986 7.964h-2L2.118 8h2.125l1.861 5.113L7.965 8zM17 14v2h-2V8h4a3 3 0 0 1 0 6h-2zm0-4v2h2a1 1 0 0 0 0-2h-2zM2 3h20v2H2V3z"/></svg>
                                                </span>
                                            <span class="ic dn">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="18"
                                                        height="18" stroke="currentColor" fill="currentColor"><path
                                                           d="M4.873 3h14.254a1 1 0 0 1 .809.412l3.823 5.256a.5.5 0 0 1-.037.633L12.367 21.602a.5.5 0 0 1-.706.028c-.007-.006-3.8-4.115-11.383-12.329a.5.5 0 0 1-.037-.633l3.823-5.256A1 1 0 0 1 4.873 3zm.51 2l-2.8 3.85L12 19.05 21.417 8.85 18.617 5H5.383z"/></svg>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="pdopt">
                                <button class="byart btn btn-primary mx-auto mb-3">
                                    Acheter
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-12 col-xl-4">
                        <div class="spdw">
                            <a class="pdlk" href="../product.html">
                                <div class="pdti">
                                    <img src="../files/img/product-img/product5.jpg" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product3.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                        <div class="itmrt">
                                            <div class="badge badge-primary badge-md">
                                                4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 576 512" fill="#fff"
                                                                         width="12"
                                                                         height="12"><path
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc">83.100</span> FCFA
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="itnm">Xiaomi Poco X3 NFC A1 A2 CC9 10T Pro 6.3" FHD+ Android 9.0 Helio P35 4GB+64GB 16MP NFC 4G Smartphone
                                        </span>

                                    <div class="tsvb ts">
                                        <div class="tb tsic">
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H120C89.1 0 64 25.1 64 56v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H112V56c0-4.4 3.6-8 8-8h240c4.4 0 8 3.6 8 8v312H242.7c-16.6-28.6-47.2-48-82.7-48-17.6 0-33.8 5.1-48 13.3V288H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256-320h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1zM256 248v-16c0-4.4-3.6-8-8-8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8zm24-56c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240z"/>
                                                </svg>
                                            </div>
                                            <div class="ic grn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M256 409.6V100l-142.9 59.5c8.4 116.2 65.2 202.6 142.9 250.1zM466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256 464C158.5 423.4 64 297.3 64 128l192-80 192 80c0 173.8-98.4 297-192 336z"/>
                                                </svg>
                                            </div>
                                            <div class="ic">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                     width="18"
                                                     height="18" fill="currentColor">
                                                    <path d="M449.716,239.842c-0.543-7.535-7.082-13.191-14.628-12.661c-7.536,0.543-13.204,7.092-12.662,14.628c0.337,4.655,0.506,9.431,0.506,14.191c0,109.061-88.726,197.787-197.786,197.787C116.086,453.787,27.36,365.06,27.36,256S116.086,58.214,225.147,58.214c43.191,0,84.21,13.668,118.62,39.525c6.041,4.538,14.615,3.321,19.154-2.718c4.54-6.04,3.323-14.616-2.717-19.154c-39.189-29.447-85.891-45.012-135.058-45.012C101.001,30.854,0,131.855,0,256s101.001,225.145,225.147,225.145S450.292,380.146,450.292,256C450.292,250.586,450.097,245.15,449.716,239.842z"/>
                                                    <path d="M496.395,61.77c-20.808-20.807-54.666-20.807-75.474,0l-197.11,197.108l-69.874-69.875c-20.808-20.807-54.666-20.807-75.474,0c-20.808,20.808-20.808,54.666,0,75.474l120.341,120.341c6.895,6.895,15.951,10.342,25.007,10.342c9.057,0,18.113-3.447,25.008-10.342l247.576-247.576C517.201,116.435,517.201,82.579,496.395,61.77z M477.049,117.897L229.472,365.475c-3.12,3.12-8.2,3.12-11.32,0L97.811,245.133c-10.141-10.141-10.141-26.64,0-36.781c5.07-5.072,11.729-7.606,18.39-7.606s13.321,2.535,18.39,7.606l71.882,71.882c4.632,4.631,10.791,7.181,17.339,7.181c6.551,0,12.71-2.551,17.341-7.182L440.268,81.116c10.138-10.141,26.64-10.141,36.781,0C487.189,91.257,487.189,107.756,477.049,117.897z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tb tsbd">
                                            <span class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         width="18"
                                                         height="18" fill="currentColor"><path fill="none"
                                                                                               d="M0 0h24v24H0z"/><path
                                                            d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm8 5.5v7h2v-7h-2zm-.285 0H8.601l-1.497 4.113L5.607 8.5H3.493l2.611 6.964h2L10.715 8.5zm5.285 5h1.5a2.5 2.5 0 1 0 0-5H14v7h2v-2zm0-2v-1h1.5a.5.5 0 1 1 0 1H16z"/></svg>
                                                </span>
                                            <span class="ic dn">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="18"
                                                        height="18" stroke="currentColor" fill="currentColor"><path
                                                           d="M4.873 3h14.254a1 1 0 0 1 .809.412l3.823 5.256a.5.5 0 0 1-.037.633L12.367 21.602a.5.5 0 0 1-.706.028c-.007-.006-3.8-4.115-11.383-12.329a.5.5 0 0 1-.037-.633l3.823-5.256A1 1 0 0 1 4.873 3zm.51 2l-2.8 3.85L12 19.05 21.417 8.85 18.617 5H5.383z"/></svg>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="pdopt">
                                <button class="byart btn btn-primary mx-auto mb-3">
                                    Acheter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span
                                        aria-hidden="true">&laquo;</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">05</a></li>
                                <li class="page-item active"><a class="page-link" href="#">06<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">07</a></li>
                                <li class="page-item"><a class="page-link" href="#">79</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                        aria-hidden="true">&raquo;</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

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
                                <a href="https://www.yumeres.com">Accueil</a>/<a href="https://www.yumeres.com/about">A
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

<script src="../files/js/jquery.js"></script>
<script src="../files/js/bootstrap.js"></script>
<script src="../files/js/plugins.js"></script>
<script src="../files/js/ns.js"></script>
<script src="../files/js/function.js"></script>

</body>

</html>
