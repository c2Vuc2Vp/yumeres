<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  require_once "../../app/inc/function.php";

  require_once "../../app/inc/connect.php";

  $user = $_SESSION['auth'];

  if(isset($_FILES)){

    foreach ($_FILES as $value) {

      $uploadfile = $value;

      $folder = "clients/img_article/".$user.'/';

      move_uploaded_file($uploadfile, $folder.$uploadfile);

    }

  }
