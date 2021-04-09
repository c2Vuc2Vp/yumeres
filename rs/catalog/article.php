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

  if (!isset($_POST) OR (!isset($_POST) && isset($_POST['page']))) {

    var_dump($_POST);
    
    $art = $pdo->query("SELECT count(*) as nb FROM articles");

    $arti = $art->fetch();

    $Narticle = $arti['nb'];

    $nbre_articles_par_page = 6;

    $nbre_pages_max_gauche_et_droite = 2;

    $last_page = ceil($Narticle / $nbre_articles_par_page);

    if(isset($_POST['page']) && is_numeric($_POST['page'])){
    
      $page_num = $_POST['page'];
    
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
        
        $pagination .= '<li class="page-item"><a class="page-link" id="page" data-page="'.$previous.'" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

        for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
    
          if($i > 0){
           
            $pagination .= '<li class="page-item"><a class="page-link" id="page" data-page="'.$i.'" href="#">'.$i.'</a></li>';
    
          }
    
        }
    
      }

      $pagination .= '<li class="page-item active"><a class="page-link" id="page" data-page href="#">'.$page_num.'<span class="sr-only">(current)</span></a></li>';

      for($i = $page_num+1; $i <= $last_page; $i++){     
    
        $pagination .= '<li class="page-item"><a class="page-link" id="page" data-page="'.$i.'" href="#">'.$i.'</a></li>';

        if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
    
          break;
    
        }
    
      }

      if($page_num != $last_page){
    
        $next = $page_num + 1;
    
        $pagination .= '<li class="page-item"><a class="page-link" aria-label="Next" id="page" data-page="'.$next.'" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
    
      }
    
    }
    
    ?>


      <div class="shadow-section mt-30" id="page-title">
          
        <ol class="bdcb">
            <li class="bdcb-itm">
              <a id="catalogue" href="#" id="bdcbhm">
                <svg fill="none" height="14.5" stroke="#333" stroke-width="2" viewBox="0 0 24 24"
                     width="14"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
              </a>
            </li>

              <?php
              
                if (!isset($_POST['cat'])) {
                  
                  ?>
                    <li aria-current="page" class="bdcb-itm active">

                      <a id="catalogue" href="#" id="bdcbhm">Catalogue</a>

                    </li>

                  <?php

                }else{

                  if (is_used('categories', 'list_cat', $_POST['cat'])) {

                    ?>

                      <li aria-current="page" class="bdcb-itm active">

                        <a id="catalogue" href="#" id="bdcbhm">Catalogue</a>

                      </li>

                      <li aria-current="page" class="bdcb-itm active">

                        <a id="categorie" href="#" data-cat="<?=$_POST['cat']?>" id="bdcbhm"><?=$_POST['cat']?></a>

                      </li>

                    <?php

                  }else{

                    ?>

                      <li aria-current="page" class="bdcb-itm active">

                        <a id="catalogue" href="#" id="bdcbhm">Catalogue</a>

                      </li>

                      <li aria-current="page" class="bdcb-itm active">

                        <a href="#" id="bdcbhm">Inconnu</a>

                      </li>

                    <?php

                  }

                }

                if (isset($_POST['sC'])) {

                  if (is_used('sous_categories', 'list_cat', $_POST['sC'])) {
                  
                    ?>

                      <li aria-current="page" class="bdcb-itm active"><a href="index.php?sC=<?=$_POST['sC']?>" id="bdcbhm"><?=$_POST['sC']?></a></li>

                    <?php

                  }else{
                  
                    ?>

                      <li aria-current="page" class="bdcb-itm active"><a href="#" id="bdcbhm">Inconnu</li>

                    <?php

                  }

                }

                if (isset($_POST['m'])) {
                  
                  ?>

                    <li aria-current="page" class="bdcb-itm active"><a href="index.php?m=<?=$_POST['m']?>" id="bdcbhm"><?=$_POST['m']?></a></li>

                  <?php

                }

              ?>

        </ol>

      </div>

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
                              <img src="<?=$img?>" alt="">
                              <img class="hvrpt" src="../files/img/product-img/product2.jpg" alt="">
                          </div>
                          <div class="cprn">
                              <div class="itmw">
                                  <div class="ml-auto">
                                      <h6 class="sfbg itmprc">
                                          <span class="lprc"><?=$prix?></span> FCFA
                                      </h6>
                                  </div>
                              </div>

                              <span class="itnm"><?=$nom?></span>

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

    <?php

  }elseif (isset($_POST['marque']) OR (isset($_POST['marque']) && isset($_POST['page_marque']))) {

    extract($_POST);

    if ($marque != '' ) {
     
      $art = $pdo->query("SELECT count(*) as nb FROM articles WHERE marque = '$marque'");

      $arti = $art->fetch();

      $Narticle = $arti['nb'];

      $nbre_articles_par_page = 6;

      $nbre_pages_max_gauche_et_droite = 2;

      $last_page = ceil($Narticle / $nbre_articles_par_page);

      if(isset($_POST['page_marque']) && is_numeric($_POST['page_marque'])){
      
        $page_num = $_POST['page_marque'];
      
      } else {
      
        $page_num = 1;
      
      }

      if($page_num < 1){
      
        $page_num = 1;
      
      } else if($page_num > $last_page) {
      
        $page_num = $last_page;
      
      }

      $limit = 'LIMIT '.($page_num - 1) * $nbre_articles_par_page. ',' . $nbre_articles_par_page;

      //Cette requête sera utilisée plus tard
      $sql = "SELECT * FROM articles WHERE marque = '$marque' ORDER BY id DESC $limit";

      $pagination = '';

      if($last_page != 1){
      
        if($page_num > 1){
      
          $previous = $page_num - 1;
          
          $pagination .= '<li class="page-item"><a class="page-link" id="page_marque" data-page="'.$previous.'" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

          for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
      
            if($i > 0){
             
              $pagination .= '<li class="page-item"><a class="page-link" id="page_marque" data-page="'.$i.'" href="#">'.$i.'</a></li>';
      
            }
      
          }
      
        }

        $pagination .= '<li class="page-item active"><a class="page-link" id="page_marque" data-page href="#">'.$page_num.'<span class="sr-only">(current)</span></a></li>';

        for($i = $page_num+1; $i <= $last_page; $i++){     
      
          $pagination .= '<li class="page-item"><a class="page-link" id="page_marque" data-page="'.$i.'" href="#">'.$i.'</a></li>';

          if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
      
            break;
      
          }
      
        }

        if($page_num != $last_page){
      
          $next = $page_num + 1;
      
          $pagination .= '<li class="page-item"><a class="page-link" aria-label="Next" id="page" data-page="'.$next.'" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
      
        }
      
      }

      ?>

        <div class="shadow-section mt-30" id="page-title">
            <ol class="bdcb">
                <li class="bdcb-itm">
                  <a id="catalogue" href="#" id="bdcbhm">
                    <svg fill="none" height="14.5" stroke="#333" stroke-width="2" viewBox="0 0 24 24"
                         width="14"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                  </a>
                </li>

                  <?php

                   if (isset($marque)) {
                      
                      ?>

                        <li aria-current="page" class="bdcb-itm active">

                          <a id="catalogue" href="#" id="bdcbhm">Catalogue</a>

                        </li>

                        <li aria-current="page" class="bdcb-itm active">

                          <a id="marque" data-marque="<?=$marque?>" href="#" id="bdcbhm"><?=$marque?></a>

                        </li>

                      <?php

                    }

                  ?>

            </ol>

        </div>

        <div class="shadow-section ctpdc">

            <div class="row">

              <?php

                if (is_used('articles', 'marque', $marque)) {
                 
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
                                    <img src="<?=$img?>" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product2.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                        <div class="ml-auto">
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc"><?=$prix?></span> FCFA
                                            </h6>
                                        </div>
                                    </div>

                                    <span class="itnm"><?=$nom?></span>

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


                }

              ?>
                
            </div>

        </div>

        <div class="row">

          <div class="col-12">
              <nav aria-label="navigation">
                  <ul class="pagination justify-content-end mt-50">
                      
                      <?=$pagination?>
                      
                  </ul>
              </nav>
          </div>

        </div>

      <?php

    }
   
  }elseif (isset($_POST['categorie']) OR (isset($_POST['categorie']) && isset($_POST['page_cat']))) {

    extract($_POST);

    if ($categorie != '' ) {
     
      $art = $pdo->query("SELECT count(*) as nb FROM articles WHERE cat = '$categorie'");

      $arti = $art->fetch();

      $Narticle = $arti['nb'];

      $nbre_articles_par_page = 6;

      $nbre_pages_max_gauche_et_droite = 2;

      $last_page = ceil($Narticle / $nbre_articles_par_page);

      if(isset($_POST['page_cat']) && is_numeric($_POST['page_cat'])){
      
        $page_num = $_POST['page_cat'];
      
      } else {
      
        $page_num = 1;
      
      }

      if($page_num < 1){
      
        $page_num = 1;
      
      } else if($page_num > $last_page) {
      
        $page_num = $last_page;
      
      }

      $limit = 'LIMIT '.($page_num - 1) * $nbre_articles_par_page. ',' . $nbre_articles_par_page;

      //Cette requête sera utilisée plus tard
      $sql = "SELECT * FROM articles WHERE cat = '$categorie' ORDER BY id DESC $limit";

      $pagination = '';

      if($last_page != 1){
      
        if($page_num > 1){
      
          $previous = $page_num - 1;
          
          $pagination .= '<li class="page-item"><a class="page-link" id="page_cat" data-page="'.$previous.'" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

          for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
      
            if($i > 0){
             
              $pagination .= '<li class="page-item"><a class="page-link" id="page_cat" data-page="'.$i.'" href="#">'.$i.'</a></li>';
      
            }
      
          }
      
        }

        $pagination .= '<li class="page-item active"><a class="page-link" id="page_cat" data-page href="#">'.$page_num.'<span class="sr-only">(current)</span></a></li>';

        for($i = $page_num+1; $i <= $last_page; $i++){     
      
          $pagination .= '<li class="page-item"><a class="page-link" id="page_cat" data-page="'.$i.'" href="#">'.$i.'</a></li>';

          if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
      
            break;
      
          }
      
        }

        if($page_num != $last_page){
      
          $next = $page_num + 1;
      
          $pagination .= '<li class="page-item"><a class="page-link" aria-label="Next" id="page_cat" data-page="'.$next.'" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
      
        }
      
      }

      ?>

        <div class="shadow-section mt-30" id="page-title">
            <ol class="bdcb">
                <li class="bdcb-itm">
                  <a id="catalogue" href="#" id="bdcbhm">
                    <svg fill="none" height="14.5" stroke="#333" stroke-width="2" viewBox="0 0 24 24"
                         width="14"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                  </a>
                </li>

                  <?php

                   if (isset($categorie)) {
                      
                      ?>

                        <li aria-current="page" class="bdcb-itm active">

                          <a id="catalogue" href="#" id="bdcbhm">Catalogue</a>

                        </li>

                        <li aria-current="page" class="bdcb-itm active">

                          <a id="categorie" data-cat="<?=$categorie?>" href="#" id="bdcbhm"><?=$categorie?></a>

                        </li>

                      <?php

                    }

                  ?>

            </ol>

        </div>

        <div class="shadow-section ctpdc">

            <div class="row">

              <?php

                if (is_used('articles', 'cat', $categorie)) {
                 
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
                                    <img src="<?=$img?>" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product2.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                
                                        <div class="ml-auto">
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc"><?=$prix?></span> FCFA
                                            </h6>
                                        </div>
                                    </div>

                                    <span class="itnm"><?=$nom?></span>

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


                }

              ?>
                
            </div>

        </div>

        <div class="row">

          <div class="col-12">
              <nav aria-label="navigation">
                  <ul class="pagination justify-content-end mt-50">
                      
                      <?=$pagination?>
                      
                  </ul>
              </nav>
          </div>

        </div>

      <?php

    }
   
  }elseif (isset($_POST['sc']) OR (isset($_POST['sc']) && isset($_POST['page_sc']))) {

    extract($_POST);

    if ($sc != '' ) {
     
      $art = $pdo->query("SELECT count(*) as nb FROM articles WHERE s_cat = '$sc'");

      $arti = $art->fetch();

      $Narticle = $arti['nb'];

      $nbre_articles_par_page = 6;

      $nbre_pages_max_gauche_et_droite = 2;

      $last_page = ceil($Narticle / $nbre_articles_par_page);

      if(isset($_POST['page_sc']) && is_numeric($_POST['page_sc'])){
      
        $page_num = $_POST['page_sc'];
      
      } else {
      
        $page_num = 1;
      
      }

      if($page_num < 1){
      
        $page_num = 1;
      
      } else if($page_num > $last_page) {
      
        $page_num = $last_page;
      
      }

      $limit = 'LIMIT '.($page_num - 1) * $nbre_articles_par_page. ',' . $nbre_articles_par_page;

      //Cette requête sera utilisée plus tard
      $sql = "SELECT * FROM articles WHERE s_cat = '$sc' ORDER BY id DESC $limit";

      $pagination = '';

      if($last_page != 1){
      
        if($page_num > 1){
      
          $previous = $page_num - 1;
          
          $pagination .= '<li class="page-item"><a class="page-link" id="page_sc" data-page="'.$previous.'" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

          for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
      
            if($i > 0){
             
              $pagination .= '<li class="page-item"><a class="page-link" id="page_sc" data-page="'.$i.'" href="#">'.$i.'</a></li>';
      
            }
      
          }
      
        }

        $pagination .= '<li class="page-item active"><a class="page-link" id="page_sc" data-page href="#">'.$page_num.'<span class="sr-only">(current)</span></a></li>';

        for($i = $page_num+1; $i <= $last_page; $i++){     
      
          $pagination .= '<li class="page-item"><a class="page-link" id="page_sc" data-page="'.$i.'" href="#">'.$i.'</a></li>';

          if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
      
            break;
      
          }
      
        }

        if($page_num != $last_page){
      
          $next = $page_num + 1;
      
          $pagination .= '<li class="page-item"><a class="page-link" aria-label="Next" id="page_sc" data-page="'.$next.'" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
      
        }
      
      }

      ?>

        <div class="shadow-section mt-30" id="page-title">
            <ol class="bdcb">
                <li class="bdcb-itm">
                  <a id="catalogue" href="#" id="bdcbhm">
                    <svg fill="none" height="14.5" stroke="#333" stroke-width="2" viewBox="0 0 24 24"
                         width="14"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                  </a>
                </li>

                  <?php

                   if (isset($sc)) {
                      
                      ?>

                        <li aria-current="page" class="bdcb-itm active">

                          <a id="catalogue" href="#" id="bdcbhm">Catalogue</a>

                        </li>

                        <li aria-current="page" class="bdcb-itm active">

                          <a id="sc" href="#" data-sc="<?=$sc?>" id="bdcbhm"><?=$sc?></a>

                        </li>

                      <?php

                    }

                  ?>

            </ol>

        </div>

        <div class="shadow-section ctpdc">

            <div class="row">

              <?php

                if (is_used('articles', 's_cat', $sc)) {
                 
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
                                    <img src="<?=$img?>" alt="">
                                    <img class="hvrpt" src="../files/img/product-img/product2.jpg" alt="">
                                </div>
                                <div class="cprn">
                                    <div class="itmw">
                                        <div class="ml-auto">
                                            <h6 class="sfbg itmprc">
                                                <span class="lprc"><?=$prix?></span> FCFA
                                            </h6>
                                        </div>
                                    </div>

                                    <span class="itnm"><?=$nom?></span>

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


                }

              ?>
                
            </div>

        </div>

        <div class="row">

          <div class="col-12">
              <nav aria-label="navigation">
                  <ul class="pagination justify-content-end mt-50">
                      
                      <?=$pagination?>
                      
                  </ul>
              </nav>
          </div>

        </div>

      <?php

    }
   
  }elseif ((isset($_POST) && empty($_POST)) OR (isset($_POST) && empty($_POST) OR isset($_POST['page']))) {

    $art = $pdo->query("SELECT count(*) as nb FROM articles");

    $arti = $art->fetch();

    $Narticle = $arti['nb'];

    $nbre_articles_par_page = 6;

    $nbre_pages_max_gauche_et_droite = 2;

    $last_page = ceil($Narticle / $nbre_articles_par_page);

    if(isset($_POST['page']) && is_numeric($_POST['page'])){
    
      $page_num = $_POST['page'];
    
    } else {
    
      $page_num = 1;
    
    }

    if($page_num < 1){
    
      $page_num = 1;
    
    } else if($page_num > $last_page) {
    
      $page_num = $last_page;
    
    }

    $limit = 'LIMIT '.($page_num - 1) * $nbre_articles_par_page. ',' . $nbre_articles_par_page;

    //Cette requête sera utilisée plus tard
    $sql = "SELECT * FROM articles ORDER BY id DESC $limit";

    $pagination = '';

    if($last_page != 1){
    
      if($page_num > 1){
    
        $previous = $page_num - 1;
        
        $pagination .= '<li class="page-item"><a class="page-link" id="page" data-page="'.$previous.'" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

        for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
    
          if($i > 0){
           
            $pagination .= '<li class="page-item"><a class="page-link" id="page" data-page="'.$i.'" href="#">'.$i.'</a></li>';
    
          }
    
        }
    
      }

      $pagination .= '<li class="page-item active"><a class="page-link" id="page" data-page href="#">'.$page_num.'<span class="sr-only">(current)</span></a></li>';

      for($i = $page_num+1; $i <= $last_page; $i++){     
    
        $pagination .= '<li class="page-item"><a class="page-link" id="page" data-page="'.$i.'" href="#">'.$i.'</a></li>';

        if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
    
          break;
    
        }
    
      }

      if($page_num != $last_page){
    
        $next = $page_num + 1;
    
        $pagination .= '<li class="page-item"><a class="page-link" aria-label="Next" id="page" data-page="'.$next.'" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
    
      }
    
    }

    ?>

      <div class="container-fluid" id="articles">

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
                    
                      if (!isset($_POST['cat'])) {
                        
                        ?>
                          <li aria-current="page" class="bdcb-itm active">

                            <a id="catalogue" href="#" id="bdcbhm">Catalogue</a>

                          </li>

                        <?php

                      }else{

                        if (is_used('categories', 'list_cat', $_POST['cat'])) {

                          ?>

                            <li aria-current="page" class="bdcb-itm active">

                              <a href="index.php" id="bdcbhm">Catalogue</a>

                            </li>

                            <li aria-current="page" class="bdcb-itm active">

                              <a href="index.php?cat=<?=$_POST['cat']?>" id="bdcbhm"><?=$_POST['cat']?></a>

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

                      if (isset($_POST['sC'])) {

                        if (is_used('sous_categories', 'list_cat', $_POST['sC'])) {
                        
                          ?>

                            <li aria-current="page" class="bdcb-itm active"><a href="index.php?sC=<?=$_POST['sC']?>" id="bdcbhm"><?=$_POST['sC']?></a></li>

                          <?php

                        }else{
                        
                          ?>

                            <li aria-current="page" class="bdcb-itm active"><a href="#" id="bdcbhm">Inconnu</li>

                          <?php

                        }

                      }

                      if (isset($_POST['m'])) {
                        
                        ?>

                          <li aria-current="page" class="bdcb-itm active"><a href="index.php?m=<?=$_POST['m']?>" id="bdcbhm"><?=$_POST['m']?></a></li>

                        <?php

                      }

                    ?>

              </ol>

          </div>

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
                                  <img src="<?=$img?>" alt="">
                                  <img class="hvrpt" src="../files/img/product-img/product2.jpg" alt="">
                              </div>
                              <div class="cprn">
                                  <div class="itmw">

                                      <div class="ml-auto">
                                          <h6 class="sfbg itmprc">
                                              <span class="lprc"><?=$prix?></span> FCFA
                                          </h6>
                                      </div>
                                  </div>

                                  <span class="itnm"><?=$nom?></span>

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
                    <ul class="pagination justify-content-end mt-50">
                        
                        <?=$pagination?>
                        
                    </ul>
                </nav>
            </div>

          </div>

      </div>

    <?php
    
  }

  ?>

  <script type="text/javascript">

    $('a#catalogue').click(function(){

      var th = $(this);

      var url = 'article.php';
      
      $.ajax({

        url: url,
        
        type: 'POST',
        
        data: {
        
        
        },
        
        cache: false,
        
        success: function(html) {
          
          $('#articles').html(" "+html).show();
        
        } 

      });

    });

    $('a#page').click(function(){

      var th = $(this);

      var url = 'article.php';

      var page = th.data("page");

      $.ajax({

        url: url,
        
        type: 'POST',
        
        data: {
        
          page : page,

        },
        
        cache: false,
        
        success: function(html) {
          
          $('#articles').html(" "+html).show();
        
        } 

      });

    });

    $('a#categorie').click(function(){

      var th = $(this);

      var url = 'article.php';

      var cat = th.data('cat');

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

    $('a#page_cat').click(function(){

      var th = $(this);

      var cat = document.getElementById("categorie").dataset.cat;

      var url = 'article.php';

      var page = th.data("page");

      $.ajax({

        url: url,
        
        type: 'POST',
        
        data: {
        
          page_cat : page,

          categorie : cat,
        
        },
        
        cache: false,
        
        success: function(html) {
          
          $('#articles').html(" "+html).show();
        
        } 

      });

    });

    $('a#sc').click(function(){

      var th = $(this);

      var url = 'article.php';

      var Scat = th.data('sc');

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

    $('a#page_sc').click(function(){

      var th = $(this);

      var cat = document.getElementById("sc").dataset.sc;

      var url = 'article.php';

      var page = th.data("page");

      $.ajax({

        url: url,
        
        type: 'POST',
        
        data: {
        
          page_sc : page,

          sc : cat,
        
        },
        
        cache: false,
        
        success: function(html) {
          
          $('#articles').html(" "+html).show();
        
        } 

      });

    });

    $('a#page_marque').click(function(){

      var th = $(this);

      var cat = document.getElementById("marque").dataset.marque;

      var url = 'article.php';

      var page = th.data("page");

      $.ajax({

        url: url,
        
        type: 'POST',
        
        data: {
        
          page_marque : page,

          marque : cat,
        
        },
        
        cache: false,
        
        success: function(html) {
          
          $('#articles').html(" "+html).show();
        
        } 

      });

    });

   </script>

  <?php

  

  