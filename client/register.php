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

  /////////////////////////////////////////////////
  // vérification de la soumission du formulaire //
  /////////////////////////////////////////////////

  if(isset($_POST['register'])) {

    //////////////////////////////////////////
    // vérification des contenus des champs //
    //////////////////////////////////////////

    if(!empty($_POST)){

      $errors = [];

      extract($_POST);

      //////////////////////////////////////////////////////////////
      // controle des caractères entrés pour le nom d'utilisateur //
      //////////////////////////////////////////////////////////////

      if(empty($username) || !preg_match("/^[a-z0-9A-Z_éæè*]+$/", $username)){

        $errors[] = "Votre nom d'utilisateur n'est pas valide (ex: 8_rxfo ou affi ou 145769)";

      }else{

        /////////////////////////////////////////////////////
        // vérification de l'existence d'un membre inscrit //
        /////////////////////////////////////////////////////


        if(is_used('clients', 'username', $username)){

          $errors[] = "Ce nom d'utilisateur est déjà pris.";

        }

        /////////////////////////////////////////
        // vérification d'un mail déjà utilisé //
        /////////////////////////////////////////

        if(is_used('clients', 'mail', $mail)){

          $errors[] = "Cette addresse est déjà prise.";

        }

      }

      /////////////////////////////////////////////
      // vérification de la validité de l'emails //
      /////////////////////////////////////////////

      if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "Veuillez entrer une addresse email valide!";
      }

      //////////////////////////////////////
      // Taille max du nom d'utilisateur. //
      //////////////////////////////////////

      //////////////////////////////////////////////
      // if (mb_strlen($_POST['username']) > 8) { //
      //////////////////////////////////////////////

      //   $errors[] = "Veillez donner un pseudo avec 8 caractères maximum.";
      // }

      /////////////////////////
      // longueur min du mdp //
      /////////////////////////

      if (mb_strlen($password) < 8) {

        $errors[] = "Veuillez entrer un mot de passe de plus de 8 caractères!";

      }else{

        /////////////////////////////////
        // correspondance des deux mdp //
        /////////////////////////////////

        if(/*empty($password) || */$password != $password_confirm){

          $errors[] = "Votre mot de passe est invalide";

        }

      }


      ////////////////////////////////////////////////////////////////////
      // insertion des données dans la base de données si aucune erreur //
      ////////////////////////////////////////////////////////////////////

      if(empty($errors)){

        /////////////////////////////////
        // envoie du mail d'activation //
        /////////////////////////////////

        $to = $mail;

        $subject = WEBNAME." - ACTIVATION DE COMPTE";

        $passw = sha1($password);

        $token = sha1($username.$mail.$passw);

        ob_start();

        require('../template/email/validation.tmp.php');

        $contenus = ob_get_clean();

        $header = "From: koffisalomon4444@gmail.com\n";
        /*$header .= "Reply-To: ".$to."\n";
        $header .= "MIME-version: 1.0\n";
        $header .= "Content-type: text/html; charset=utf-8\n";
        $header .= "Content-Transfer-Encoding: 8bit";*/

        if (mail($to,$subject,$contenus,$header)) {
          echo 'envoyer';
          setcookie("remember", $_POST["mail"]."==".sha1($_POST["mail"]."anotherlevelhackey"), time() + 60*60*24*7, '/');

          $cookie = $_COOKIE['remember'];

          $req = $pdo->prepare("INSERT INTO  clients SET username = ?, password = ?, mail = ?, tel_1 = ?, remember_token = ?");

          /////////////////////////////////////
          // protection contre la faille xss //
          /////////////////////////////////////

          $password = xss($password);

          $username = xss($username);

          $mail = xss($mail);

          $tel_1 = xss($tel_1);

          ////////////////////
          // hashage du mdp //
          ////////////////////

          $password = password_hash($password, PASSWORD_BCRYPT);

          ///////////////////////////
          // insertion dans la bdd //
          ///////////////////////////

          $req->execute(array($username, $password, $mail, $tel_1, $cookie));

          ///////////////////////////////////
          // création du dossier du membre //
          ///////////////////////////////////

          $dossier = "login/clients/img_article/".$mail."/";

          creer_dossier($dossier);

          set_flash('Un message de validation vous a été envoyé à votre addresse email!', 'success');

          redirect('index');


        }else{

          $errors[] = ('Veuillez vérifier votre connexion à internet svp!');

          stock_poste();

        }

      }else{

        stock_poste();
      }

    }else{


      $errors[] = "Veuillez svp remplire tous les champs!";

      stock_poste();

    }

  }else{

    efface_post_sess();
  }

  require('vues/register.vu.php');

?>


