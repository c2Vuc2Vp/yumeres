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

  if (isset($_POST['marque'])) {
    # code...
  }

  $art = $pdo->query("SELECT count(*) as nb FROM articles");

  $arti = $art->fetch();

  $Narticle = $arti['nb'];

  $nbre_articles_par_page = 6;

  $nbre_pages_max_gauche_et_droite = 2;

  $last_page = ceil($Narticle / $nbre_articles_par_page);

  if(isset($_GET['page']) && is_numeric($_GET['page'])){
  
    $page_num = $_GET['page'];
  
  } else {
  
    $page_num = 1;
  
  }

  if($page_num < 1){
  
    $page_num = 1;
  
  } else if($page_num > $last_page) {
  
    $page_num = $last_page;
  
  }

  $limit = 'LIMIT '.($page_num - 1) * $nbre_articles_par_page. ',' . $nbre_articles_par_page;

  $sql = "SELECT * FROM articles ORDER BY id DESC $limit";

  $pagination = '';

  if($last_page != 1){
  
    if($page_num > 1){
  
      $previous = $page_num - 1;
      
      $pagination .= '<li class="page-item"><a class="page-link" href="index.php?page='.$previous.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

      for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
  
        if($i > 0){
         
          $pagination .= '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
  
        }
  
      }
  
    }

    $pagination .= '<li class="page-item active"><a class="page-link" href="#">'.$page_num.'<span class="sr-only">(current)</span></a></li>';

    for($i = $page_num+1; $i <= $last_page; $i++){     
  
      $pagination .= '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';

      if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
  
        break;
  
      }
  
    }

    if($page_num != $last_page){
  
      $next = $page_num + 1;
  
      $pagination .= '<li class="page-item"><a class="page-link" aria-label="Next" href="index.php?page='.$next.'"><span aria-hidden="true">&raquo;</span></a></li>';
  
    }
  
  }
  
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

                  <a class="cttm cth" href="#"><?=$cat['list_cat']?></a>

                  <div class="ctp">
                  
                    <?php

                      $req = $pdo->query("SELECT * FROM sous_categories WHERE id_categories = '$idCat' ORDER BY list_cat ASC");
                     
                      while ($sC = $req->fetch()) {
                      
                        ?>

                          <a class="cttm" href="index.php?cat=<?=$cat['list_cat']?>&sC=<?=$sC['list_cat']?>"><?=$sC['list_cat']?></a>
                         
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

        <div class="shadow-section mt-30" id="page-title">
      
          <ol class="bdcb">
              <li class="bdcb-itm">
                <a href="../acceuil/index.php" id="bdcbhm">
                  <svg fill="none" height="14.5" stroke="#333" stroke-width="2" viewBox="0 0 24 24"
                       width="14"
                       xmlns="http://www.w3.org/2000/svg">
                      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                </a>
              </li>

                <?php
                
                  if (!isset($_GET['cat'])) {
                    
                    ?>
                      <li aria-current="page" class="bdcb-itm active">

                        <a href="index.php" id="bdcbhm">Catalogue</a>

                      </li>

                    <?php

                  }else{

                    if (is_used('categories', 'list_cat', $_GET['cat'])) {

                      ?>

                        <li aria-current="page" class="bdcb-itm active">

                          <a href="index.php" id="bdcbhm">Catalogue</a>

                        </li>

                        <li aria-current="page" class="bdcb-itm active">

                          <a href="index.php?cat=<?=$_GET['cat']?>" id="bdcbhm"><?=$_GET['cat']?></a>

                        </li>

                      <?php

                    }else{

                      ?>

                        <li aria-current="page" class="bdcb-itm active">

                          <a href="index.php" id="bdcbhm">Catalogue</a>

                        </li>

                        <li aria-current="page" class="bdcb-itm active">

                          <a href="#" id="bdcbhm">Inconnu</a>

                        </li>

                      <?php

                    }

                  }

                  if (isset($_GET['sC'])) {

                    if (is_used('sous_categories', 'list_cat', $_GET['sC'])) {
                    
                      ?>

                        <li aria-current="page" class="bdcb-itm active"><a href="index.php?sC=<?=$_GET['sC']?>" id="bdcbhm"><?=$_GET['sC']?></a></li>

                      <?php

                    }else{
                    
                      ?>

                        <li aria-current="page" class="bdcb-itm active"><a href="#" id="bdcbhm">Inconnu</li>

                      <?php

                    }

                  }

                  if (isset($_GET['m'])) {
                    
                    ?>

                      <li aria-current="page" class="bdcb-itm active"><a href="index.php?m=<?=$_GET['m']?>" id="bdcbhm"><?=$_GET['m']?></a></li>

                    <?php

                  }

                ?>

          </ol>

        </div>

        <!-- <div class="shadow-section product-topbar d-xl-flex  justify-content-between">
            <div class="total-products">
                <p>Afficher : <span id="tlpda">1-8</span> sur <span id="tlpds"><?=$Narticle?></span></p>
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
        </div> -->

        <div class="shadow-section ctpdc">

          <div class="row">

            <?php

              $articles = $pdo->query($sql);

              while ($Art = $articles->fetch()) {

                $nom = $Art['nom'];

                $prix = $Art['prix'];

                $img = $Art['img'];

                $id = $Art['id'];

                ?>

                  <div class="col-6 col-sm-4 col-md-12 col-xl-4">
                    <div class="spdw">
                        <a class="pdlk" href="../product/index.php?id_art=<?=$id?>">
                            <div class="pdti">
                                <img src="../files/img/product-img/product1.jpg" alt="">
                                <img class="hvrpt" src="../files/img/product-img/product2.jpg" alt="">
                            </div>
                            <div class="cprn">
                                <div class="itmw">
                                    <!-- <div class="itmrt">
                                        <div class="badge badge-primary badge-md">
                                            4 <span class="rtn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 576 512" fill="#fff"
                                                                     width="12"
                                                                     height="12"><path
                                                d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg></span>
                                        </div>
                                    </div> -->
                                    <div class="ml-auto">
                                        <h6 class="sfbg itmprc">
                                            <span class="lprc"><?=$prix?></span> FCFA
                                        </h6>
                                    </div>
                                </div>

                                <span class="itnm"><?=$nom?></span>

                               <!--  <div class="tsvb">
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
                                </div> -->

                            </div>
                        </a>
                        <div class="pdopt">
                            <button class="byart btn btn-primary mx-auto mb-3">
                                Acheter
                            </button>
                        </div>
                    </div>
                </div>

                <?php

              }

            ?>
              
          </div>

        </div>

        <div class="row">

          <div class="col-12">

            <nav aria-label="navigation">

              <ul id="pagination" class="pagination justify-content-end mt-50">
                  
                <?=$pagination?>
                  
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

    var url = 'articles_marque.php'

    if (values != '') {

      $.ajax({

        type : 'POST',

        url : url,

        data : {

          marque : values

        },

        success: function(data){

          $('#articles').empty();

          $('#articles').html(" "+data).show();

        }

      });

    }else{

    }
  
  }


</script>

</body>

</html>

