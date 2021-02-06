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

      $insert = $pdo->prepare("INSERT INTO articles SET nom = ?, img = ?, img2 = ?, prix = ?, cat = ?, descr = ?");

      $insert->execute([]);

    }

  }elseif (!isset($_SESSION["auth"])){

    redirect('logout.php');

  }

?>
