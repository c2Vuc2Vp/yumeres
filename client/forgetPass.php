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
 
  if(!empty($_POST['forget'])){

    $error = [];

    extract($_POST);
  
    $valid = true;

    if (isset($_POST['email'])){
       
      // Si le mail est vide alors on ne traite pas
      if(empty($mail)){
          $valid = false;
          $error = "Il faut mettre une addresse e-mail";
      }
 ici ici ici ici ici
      if($valid){
          $verification_mail = $DB->query("SELECT nom, prenom, mail, n_mdp 
              FROM utilisateur WHERE mail = ?",
              array($mail));
          $verification_mail = $verification_mail->fetch();

          if(isset($verification_mail['mail'])){
              if($verification_mail['n_mdp'] == 0){
                  // On génère un mot de passe à l'aide de la fonction RAND de PHP
                  $new_pass = rand();

                  // Le mieux serait de générer un nombre aléatoire entre 7 et 10 caractères (Lettres et chiffres)
                  $new_pass_crypt = crypt($new_pass, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
                  // $new_pass_crypt = crypt($new_pass, "VOTRE CLÉ UNIQUE DE CRYPTAGE DU MOT DE PASSE");

                  $objet = 'Nouveau mot de passe';
                  $to = $verification_mail['mail'];

                  //===== Création du header du mail.
                  $header = "From: NOM_DE_LA_PERSONNE <no-reply@test.com> \n";
                  $header .= "Reply-To: ".$to."\n";
                  $header .= "MIME-version: 1.0\n";
                  $header .= "Content-type: text/html; charset=utf-8\n";
                  $header .= "Content-Transfer-Encoding: 8bit";

                  //===== Contenu de votre message
                  ob_start();

                  require('../template/email/forgetPass.tmp.php');
                  
                  $contenu = ob_get_clean(); "<html>".
                      "<body>".
                      "<p style='text-align: center; font-size: 18px'><b>Bonjour Mr, Mme".$verification_mail['nom']."</b>,</p><br/>".
                      "<p style='text-align: justify'><i><b>Nouveau mot de passe : </b></i>".$new_pass."</p><br/>".
                      "</body>".
                      "</html>";
                  //===== Envoi du mail
                  mail($to, $objet, $contenu, $header);
                  $DB->insert("UPDATE utilisateur SET mdp = ?, n_mdp = 1 WHERE mail = ?", 
                      array($new_pass_crypt, $verification_mail['mail']));
              }   
          }       
          header('Location: connexion.php');
          exit;
      }

    }

  }

?>