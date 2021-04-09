<?php

  $assets = '../assets/';

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

    <title>Catégorie | Yumeres - E-commerce</title>

    <link rel="icon" href="<?=$img?>favicon.ico">

    <link rel="stylesheet" href="<?=$css?>bootstrap.css">
    <link rel="stylesheet" href="<?=$css?>core-style.css">
    <link rel="stylesheet" href="<?=$css?>cat.css">
    <link rel="stylesheet" href="<?=$css?>nice-select.css">
    <link rel="stylesheet" href="<?=$css?>shop.css">
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

  <div class="section spar d-flex">
   
    <div class="d-none d-md-block sca">
       
      <div class="ctnvb">
         
        <div class="srtsct">

          <h3 class="nvh">Catalogue</h3>


          <div class="ctp f">

            <?php 

              $categorie = $pdo->query('SELECT * FROM categories ORDER BY list_cat ASC');

              while ($cat = $categorie->fetch()) {

                $idCat = $cat['id'];


                ?>

                  <a id="categorie_side" data-cat_side="<?=$cat['list_cat']?>" class="cttm cth" href="#"><?=$cat['list_cat']?></a>

                  <div class="ctp">
                  
                    <?php

                      $req = $pdo->query("SELECT * FROM sous_categories WHERE id_categories = '$idCat' ORDER BY list_cat ASC");
                     
                      while ($sC = $req->fetch()) {
                      
                        ?>

                          <a id="sc_side" data-sc_side="<?=$sC['list_cat']?>" class="cttm" href="#"><?=$sC['list_cat']?></a>
                         
                        <?php

                      }

                    ?>
                
                  </div>

                <?php

              }

            ?>

          </div>

        </div>

        <div class="srtsct">
          
          <h3 class="nvh">Marque</h3>
        
        <div class="ctp f">

          <?php 

            $marques = $pdo->query('SELECT * FROM marques ORDER BY marque ASC');

            while ($marque = $marques->fetch()) {

              ?>

                <div class="checkbox">
                    
                  <input value="<?=$marque['marque']?>" id="<?=$marque['marque']?>" class="checkbox" name="marque" type="checkbox" onclick="onlyOne(this)">
                  
                  <label for="<?=$marque['marque']?>"><?=$marque['marque']?></label>
                
                </div>

              <?php 

            }

            ?>
            
        </div>

        </div>

      </div>

    </div>

    <div class="container-fluid">

      <div id="articles">

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
                                    href="../acceuil/index.php"> Yumeres Shop.</a></span>
                        </div>
                        <div class="col_half col_last nobottommargin">
                            <div class="copyrights-menu copyright-links fright clearfix">
                                <a href="../acceuil/index.php">Accueil</a>/<a href="../acceuil/index.php/about">A
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
<script src="<?=$js?>ns.js"></script>
<script src="<?=$js?>function.js"></script>

<script type="text/javascript">

  $(document).ready( function() {
    
    $('#articles').load('article.php')
  
  });

  $('a#categorie_side').click(function(){

    var th = $(this);

    var url = 'article.php';

    var cat = th.data('cat_side');

    $.ajax({

      url: url,
      
      type: 'POST',
      
      data: {
      
        categorie : cat,
      
      },
      
      cache: false,
      
      success: function(html) {
        
        $('#articles').html(" "+html).show();
      
      } 

    });

  });

  $('a#sc_side').click(function(){

    var th = $(this);

    var url = 'article.php';

    var Scat = th.data('sc_side');

    $.ajax({

      url: url,
      
      type: 'POST',
      
      data: {
      
        sc : Scat,
      
      },
      
      cache: false,
      
      success: function(html) {
        
        $('#articles').html(" "+html).show();
      
      } 

    });

  });

  $('a#marque').click(function(){

    var th = $(this);

    var url = 'article.php';

    var mark = th.data('marque');

    $.ajax({

      url: url,
      
      type: 'POST',
      
      data: {
      
        marque : mark,
      
      },
      
      cache: false,
      
      success: function(html) {
        
        $('#articles').html(" "+html).show();
      
      } 

    });

  });
  
  function onlyOne(checkbox) {

    var checkboxes = document.getElementsByName('marque')

    checkboxes.forEach((item) => {
    
      if (item !== checkbox) item.checked = false
  
    });

    var values = (function() {

        var a = [];
      
        $(".checkbox:checked").each(function() {
      
            a.push(this.value);
      
        });
      
        return a[0];
    
    })()

    var url = 'article.php'

    if (values != '') {

      $.ajax({

        type : 'POST',

        url : url,

        data : {

          marque : values

        },

        success: function(data){

          $('#articles').html(" "+data).show();

        }

      });

    }else{

    }
  
  }


</script>

</body>

</html>

