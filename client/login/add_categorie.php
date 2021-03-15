<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once "../../app/inc/function.php";

  require_once "../../app/inc/connect.php";

  $user = $_SESSION['auth'];

  if($_SESSION['auth']){

    if (isset($_POST) AND !empty($_POST)) {

      extract($_POST);

      $categories = $pdo->prepare("SELECT * FROM categories WHERE list_cat = ?");

      $categories->execute([$categorie]);

      $cat = $categories->fetch();

      $id_cat = $cat['id'];

      $sous_categories = $pdo->prepare("SELECT list_cat FROM sous_categories WHERE id_categories = ? ORDER BY list_cat ASC");

      $sous_categories->execute([$id_cat]);

      ?>

        <option>Choisir</option>

      <?php

      while ($sousCategories = $sous_categories->fetch()) {

        $SousCategories = $sousCategories['list_cat'];

        ?>

        <option value="<?=$SousCategories?>"><?=$SousCategories?></option>

        <?php

      }

    }

  }elseif (!isset($_SESSION["auth"])){

    redirect('logout.php');

  }

?>
