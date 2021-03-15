<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once('../../app/inc/connect.php');

  require_once('../../app/inc/function.php');

  $user = $_SESSION['auth'];

  if ($_SESSION['auth']) {

    //////////////////////////////
    // recupération du username //
    //////////////////////////////

    $requser = $pdo->prepare("SELECT * FROM clients WHERE mail = ?");

    $requser->execute([$user]);

    $userinfo = $requser->fetch();

    $username = $userinfo['username'];

    //////////////////////////////////////
    // extration des valeurs des postes //
    //////////////////////////////////////

    extract($_POST);

    //////////////////////////////////
    // protection contre faille xss //
    //////////////////////////////////

    $id = xss($id);

    $nom = xss($nom);

    //////////////////////////////////////////////
    // selection des id suppérieur à l'id posté //
    //////////////////////////////////////////////

    //$query = $pdo->query("SELECT id FROM articles WHERE id > '$id'");

    //$fetch = $query->fetch();

    //$id_cal = $fetch['id'];

    //////////////////////////////////////////////////////////
    // soustraire 1 de tous les id suppérieurs à l'id posté //
    //////////////////////////////////////////////////////////

    //$cal_id = $id_cal - 1;

    //$query = $pdo->prepare("DELETE FROM articles WHERE id = ? AND username = ?");

    //$query->execute([$id,$username]);

    // $query = $pdo->prepare("UPDATE $user SET id = '$cal_id' WHERE id > '$id'");

    // $query->execute(); # pas encore au point

    $req = $pdo->prepare("ALTER TABLE articles auto_increment = 1");

    $req->execute();

    echo 'Del';

  }elseif (!isset($_SESSION["auth"])){

    redirect('../../logout.php');

  }

?>
