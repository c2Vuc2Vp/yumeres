<?php

  $assets = '../assets/';

  $vendor = '../vendor/';

  $js = 'files/js/';

  $css = 'files/css/';

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once "../app/inc/function.php";

  require_once "../app/inc/connect.php";
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yumeres, N'1 des sites de ventes en lignes">
    <meta content="Yumeres, E-commerce, commerce, achat, ventes, Shop, Shopping, Afrique, Cote D'ivoire"
          name="keywords">
    <meta content="index, follow" name="robots">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Yumeres - E-commerce | Accueil</title>

    <link rel="icon" href="files/img/favicon.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/core-style.css">

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

    <?php include '../app/inc/sidebar.php'; ?>

    <div class="prcar clearfix">
        <div class="yrc clearfix">

          <?php 

            $categorie = $pdo->query('SELECT * FROM categories ORDER BY list_cat ASC');

            while ($cat = $categorie->fetch()) {

              ?>

              <div class="spcat clearfix">
                  <a href="catalog/<?=$cat['list_cat']?>">
                      <img src="files/img/idx/<?=$cat['img']?>" alt="<?=$cat['list_cat']?>">
                      <div class="hover-content">
                          <div class="line"></div>
                          <h4><?=$cat['list_cat']?></h4>
                      </div>
                  </a>
              </div>

              <?php
            
            }

          ?>

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

                            <span class="font-primary"> Copyright © <?=date("Y")?> Yumeres | Tous droits réservés à <a
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

<script src="files/js/jquery.js"></script>
<script src="files/js/bootstrap.js"></script>
<script src="files/js/plugins.js"></script><script src="files/js/plugins.js"></script>
<script src="files/js/s.js"></script>
<script src="files/js/function.js"></script>

</body>

</html>
