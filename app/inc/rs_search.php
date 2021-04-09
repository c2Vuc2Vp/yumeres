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

  if(!empty($_POST)){

    extract($_POST);

    if(isset($article)){

      $re = $pdo->query("SELECT * FROM articles WHERE nom LIKE '%$article%' ORDER BY id DESC LIMIT ");

      ?>

          <div class="list-group">

      <?php

      while($se = $re->fetch()){

        ?>

            
            <a href="catalog/index.php?art=<?=$se['nom']?>" class="list-group-item"><?=$se['nom']?></a>
         

        <?php

      }

      ?>

          </div>

      <?php

    }

  } 

?>
