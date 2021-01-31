<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  require_once "../../inc/function.php";

  require_once "../../inc/connect.php";

  if (isset($_COOKIE['remember'])) {

    // $cookie_v = $_POST["mail"]."==".sha1($_POST["mail"]."anotherlevelhackey");

    $split = split("==", $_COOKIE['remember']);

    $mail = $split[1];

    $cookie = $split[2];

    $req = $pdo->prepare("SELECT * FROM clients WHERE mail = '$mail'");

    $req->execute(array());

    $userinfo = $req->fetch();

    $usercookie = $userinfo['remember_token'];

    if ($cookie == $usercookie) {

      echo 'connect';

    }

  }


?>



