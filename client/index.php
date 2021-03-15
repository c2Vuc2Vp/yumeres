<?php

  $assets = '../assets/';

  $vendor = '../vendor/';

  $js = 'login/js/';

  $css = 'login/css/';

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once "../app/inc/function.php";

  require_once "../app/inc/connect.php";

  ///////////////////////////
  // connexion par cookies //
  ///////////////////////////

  if (!isset($_SESSION['id']) && isset($_COOKIE['remember']) && !empty($_COOKIE['remember'])) {

    /////////////////////////////////////////
    // initialisation du tableau d'erreurs //
    /////////////////////////////////////////

    $errors = [];

    $split = mb_split("==", $_COOKIE['remember']);

    $mail = $split[0];

    $cookie = $split[1];

    $req = $pdo->prepare("SELECT * FROM clients WHERE mail = '$mail'");

    $req->execute(array());

    $userinfo = $req->fetch();

    $userid = $userinfo['id'];

    $usermail =  $userinfo['mail'];

    $usercookie = $userinfo['remember_token'];

    $useractive = $userinfo['active'];

    $usersplit = mb_split("==", $usercookie);

    $user = $usersplit[0];

    $usercookie = $usersplit[1];

    if ($cookie == $usercookie) {

      setcookie("remember", $usermail."==".sha1($usermail."anotherlevelhackey"), time() + 60*60*24*7, '/');

      $_SESSION["auth"] = $user;

      $cookie = $_COOKIE['remember'];

      // $pdo->prepare("UPDATE clients SET remember_token = ? WHERE mail = ?")->execute([$cookie, $usermail]);

      if ($useractive == 1) {

        redirect("login/index.php?id_cli=".$userid);

        exit();

      }else{

        $errors[] = "Veuillez activer votre compte via votre e-mail et réessayer plus tard!";
      }

    }

  }

  /////////////////////////////////////////////////
  // vérifions que les postes ne soient pas vide //
  /////////////////////////////////////////////////

  if(!empty($_POST) && !empty($_POST["mail"]) && !empty($_POST["password"])){

    /////////////////////////////////////////////////
    // vérification de la soumission du formulaire //
    /////////////////////////////////////////////////

    if(isset($_REQUEST['login'])) {

      ////////////////////////
      // connexion à la bdd //
      ////////////////////////

      $connect = mysqli_connect('localhost', 'root', '', 'yumeres' );

      $pass = $_POST['password'];

      $user = $_POST['mail'];

      /////////////////////////////////////////
      // initialisation du tableau d'erreurs //
      /////////////////////////////////////////

      $errors = [];

      /////////////////////////////////////
      // protection contre la faille xss //
      /////////////////////////////////////

      $mail = xss($user);

      $pass = xss($pass);

      $sel = "SELECT * FROM clients WHERE mail = '$mail'";

      $req = mysqli_query($connect,$sel);

      $data = mysqli_fetch_array($req);

      if(password_verify($pass, $data['password'])){

        $req = $pdo->prepare("SELECT * FROM clients WHERE mail = '$mail'");

        $req->execute(array());

        $userinfo = $req->fetch();

        $userid = $userinfo['id'];

        $useractive = $userinfo['active'];

        setcookie("remember", $_POST["mail"]."==".sha1($_POST["mail"]."anotherlevelhackey"), time() + 60*60*24*7, '/');

        $_SESSION["auth"] = $user;

        // $cookie = $_COOKIE['remember'];

        // $pdo->prepare("UPDATE clients SET remember_token = ? WHERE mail = ?")->execute([$cookie, $mail]);

        if ($useractive == 1) {

          redirect("login/index.php?id_cli=".$userid);

          exit();

        }else{

          $errors[] = "Veuillez activer votre compte via votre e-mail et réessayer plus tard!";
        }


      }else{

        $errors[] = "Identifiants incorrectes, vérifier (Username ou Password)!";

      }

    }

  }

  require('vues/index.vu.php');

?>



