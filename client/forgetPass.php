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
 
  if (isset($_SESSION['id'])){
      redirect('index.php');
      exit;
  }
 
  if(!empty($_POST['email'])){

    $error = [];

    extract($_POST);
  
    $valid = true;

    $email= $email[0];

    $req = $pdo->prepare("SELECT * FROM clients WHERE mail = '$email'");

    $req->execute(array());

    $userinfo = $req->fetch();

    $userid = $userinfo['id'];

    $usermail =  $userinfo['mail'];

    $usercookie = $userinfo['remember_token'];

    $useractive = $userinfo['active'];

    $username = $userinfo['username'];

    if (isset($email)){
       
      // Si le mail est vide alors on ne traite pas
      if(empty($email)){
          $valid = false;
          $error = "Il faut mettre une addresse e-mail";
      }
 
      if($valid){

        if(is_used('clients', 'mail', $email)){

          // On génère un mot de passe à l'aide de la fonction RAND de PHP
          $new_pass = rand();

          // Le mieux serait de générer un nombre aléatoire entre 7 et 10 caractères (Lettres et chiffres)
          $new_pass_crypt = password_hash($password, PASSWORD_BCRYPT);
          // $new_pass_crypt = crypt($new_pass, "VOTRE CLÉ UNIQUE DE CRYPTAGE DU MOT DE PASSE");

          $to = $email;

          $subject = WEBNAME." - ACTIVATION DE COMPTE";

          //===== Création du header du mail.
          $header = "From: Yumeres\n";
          $header .= "Reply-To: ".$to."\n";
          $header .= "MIME-version: 1.0\n";
          $header .= "Content-type: text/html; charset=utf-8\n";
          $header .= "Content-Transfer-Encoding: 8bit";
          echo $header;
          //===== Contenu de votre message
          ob_start();

          require('../template/email/forgetPass.tmp.php');
          
          $contenu = ob_get_clean(); 
          //===== Envoi du mail
          mail($to, $subject, $contenu, $header);
          $DB->insert("UPDATE clients SET password = ? WHERE mail = ?", 
              array($new_pass_crypt, $email));      
          
          redirection('index.php');
         
          exit;

        }
          
      }

    }

  }

?>