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

  echo $pagination;
  
?>