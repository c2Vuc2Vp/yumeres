<?php

  define('WEBURL', 'https://www.yumeres.com');

  define('WEBNAME', 'Yumeres');

  define('AUTHOR', 'Okami developer');

  define('WEBDESCR', 'Yumeres, N\'1 des sites de ventes en lignes');

  define('KEY', 'Yumeres, E-commerce, commerce, achat, ventes, Shop, Shopping, Afrique, Cote D\'ivoire');


  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('select')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function select($table,$where,$valeur){

      ////////////////////////////////////
      // Récupération des infos clients //
      ////////////////////////////////////

      global $pdo;

      $requser = $pdo->prepare("SELECT * FROM $table WHERE $where = ?");

      $requser->execute([$valeur]);

      $userinfo = $requser->fetch();

      $userid = $userinfo['id'];

      $username = $userinfo['username'];

      $usermail = $userinfo['mail'];

      $usernum = $userinfo['tel_1'];

      $usernum2 = $userinfo['tel_2'];

      $requser->closeCursor();

      return $userinfo;

    }

  }

  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('xss')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function xss($chaine){


      if ($chaine) {

        //////////////////////////////////
        // protection contre faille xss //
        //////////////////////////////////

        return htmlspecialchars($chaine);

      }

    }

  }

  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('efface_post_sess')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function efface_post_sess(){

      /////////////////////////////////////////////
      // si la session stock les elements postés //
      /////////////////////////////////////////////

      if (isset($_SESSION['input'])) {

        ///////////////////////////////////////////////////////////
        // vider les elements stockés dans la session des postes //
        ///////////////////////////////////////////////////////////

        $_SESSION['input'] = [];

      }

    }

  }

  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('recup_post')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function recup_post($key){

      ///////////////////////////////////////////////////////////////////////////
      // vérifions que les valeurs stockées dans la session ne soient pas vide //
      ///////////////////////////////////////////////////////////////////////////

      if (!empty($_SESSION['input'][$key])) {

        ////////////////////////////////////////////////////
        // affichage des valeurs stockées dans la session //
        ////////////////////////////////////////////////////

        return xss($_SESSION['input'][$key]);

      }else{

        //////////////////////
        // ne rien afficher //
        //////////////////////

        return null;

      }

    }

  }

  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('stock_poste')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function stock_poste(){

      foreach ($_POST as $key => $value) {

        /////////////////////////////////////////////////////////////////////////////////
        // vérification de la non existence du mot password parmis les elements postés //
        /////////////////////////////////////////////////////////////////////////////////

        if (strpos($key, 'password') === false) {

          /////////////////////////////////////////////////////////////////////
          // stocker les elements dans la session pour en faire des notif // //
          /////////////////////////////////////////////////////////////////////

          $_SESSION['input'][$key] = $value;

        }

      }

    }

  }

  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('redirect')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function redirect($page){

      /////////////////
      // redirection //
      /////////////////

      header('location: '.$page);

      exit();

    }

  }
  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('set_flash')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function set_flash($message, $type = 'info'){

      //////////////////////////////////////////////////////////////////
      // stocker les elements dans la session pour en faire des notif //
      //////////////////////////////////////////////////////////////////

      $_SESSION['notification']['message'] = $message;

      $_SESSION['notification']['type'] = $type;
    }

  }

  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('creer_dossier')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function creer_dossier($dossier, $droit = 0775){

      ///////////////////////////////////////////////////////////
      // vérification de l'existence du dossier avant création //
      ///////////////////////////////////////////////////////////

      if( !file_exists($dossier) ) {

        /////////////////////////
        // création du dossier //
        /////////////////////////

        mkdir($dossier, $droit, true);

      }

    }

  }

  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('pas_vide')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function pas_vide($champ = []){

      /////////////////////////////////////////
      // vérifions si les champs sont entrés //
      /////////////////////////////////////////

      if (count($champ) != 0) {

        ////////////////////////////////////////////////////
        //boucle pour vérifier le contenu de chaque champ //
        ////////////////////////////////////////////////////

        foreach ($champ as $value) {

          /////////////////////////////////////////////////////////////////////////////////////////////////////////////
          // vérifions si les champs postés ne sont pas vide et qu'ils ne contiennent pas uniquement que des espaces //
          /////////////////////////////////////////////////////////////////////////////////////////////////////////////

          if (empty($_POST[$value]) || trim($_POST[$value]) == "") {

            return false;

          }

        }

        return true;

      }

    }

  }

  ////////////////////////////////////////////////
  // vérification de l'existence de la fonction //
  ////////////////////////////////////////////////

  if (!function_exists('is_used')) {

    /////////////////////////////
    // création de la fonction //
    /////////////////////////////

    function is_used($table, $champ, $valeur){

      global $pdo;

      $req = $pdo->prepare("SELECT id FROM $table WHERE $champ = ?");

      $req->execute([$valeur]);

      $used = $req->fetch();

      $req->closeCursor();

      return $used;

    }

  }

  function get_total_all_records($table,$champ, $where){

    include('connect.php');
    $statement = $pdo->prepare("SELECT * FROM articles WHERE $champ = ?");
    $statement->execute([$where]);
    $result = $statement->fetchAll();
    return $statement->rowCount();

  }

?>
