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

    <link rel="icon" href="<?=$img?>favicon.ico">
    <link rel="stylesheet" href="<?=$css?>bootstrap.css">
    <link rel="stylesheet" href="<?=$css?>core-style.css">
    <link rel="stylesheet" href="<?=$vendor?>mdb/mdb.min.css">

</head>

<body>

<div class="search-wrapper">

  <div class="container vw mnc">

    <div class="header-search-form">
        
      <input id="search" onkeyup="search()" class="search form-control" placeholder="Chercher un produit" type="text">
        
    </div>

    <div id="result">
      
        </div>

  </div>

</div>

<div class="mcwr d-flex">

  <?php include '../../app/inc/rs_sidebar.php'; ?>

    <div class="prcar clearfix">
        <div class="yrc clearfix">

          <?php 

            $categorie = $pdo->query('SELECT * FROM categories ORDER BY list_cat ASC');

            while ($cat = $categorie->fetch()) {

              ?>

              <div class="spcat clearfix">
                  <a href="catalog/index.php?cat=<?=$cat['list_cat']?>">
                      <img src="<?=$img?>idx/<?=$cat['img']?>" alt="<?=$cat['list_cat']?>">
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

<script src="<?=$js?>jquery.js"></script>
<script src="<?=$js?>bootstrap.js"></script>
<script src="<?=$js?>plugins.js"></script>
<script src="<?=$js?>s.js"></script>
<script src="<?=$js?>function.js"></script>
<script src="<?=$vendor?>mdb/mdb.min.js"></script>

</body>

</html>
