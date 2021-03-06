<?php

  //////////////////////////
  // demarrage de session //
  //////////////////////////

  session_start();

  require_once "../../app/inc/function.php";

  ////////////////////////////////////////////////////
  // soustraction du temps de connection par cookie //
  ////////////////////////////////////////////////////

  setcookie("remember",'', time() - 60*60*24*7, '/');

  ///////////////////////////
  // suppression du cookie //
  ///////////////////////////

  unset($_COOKIE["remember"]);

  //////////////////////////////////////
  // suppresion de la session ouverte //
  //////////////////////////////////////

  $_SESSION = [];

  ////////////////////////////
  // message de deconnexion //
  ////////////////////////////

  // set_flash('Tu es maintenat déconnecté', 'info');

  session_destroy();

  redirect(" ../index.php");
