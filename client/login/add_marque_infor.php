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

      $sous_categories = $pdo->prepare("SELECT * FROM sous_categories_infor WHERE list_cat = ?");

      $sous_categories->execute([$mark]);

      $cat = $sous_categories->fetch();

      $id_cat = $cat['id'];

      echo $id_cat;

      $marques = $pdo->prepare("SELECT marque FROM marques WHERE id_sous_categorie_infor = ? ORDER BY marque ASC");

      $marques->execute([$id_cat]);

      ?>

        <option>Choisir</option>

      <?php

      while ($marque = $marques->fetch()) {

        $Marque = $marque['marque'];

        ?>

        <option value="<?=$Marque?>"><?=$Marque?></option>

        <?php

      }

    }

  }elseif (!isset($_SESSION["auth"])){

    redirect('logout.php');

  }

?>

