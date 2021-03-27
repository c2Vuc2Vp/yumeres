<!DOCTYPE html>

<html lang="fr">

  <head>

    <title><?=WEBNAME?>_login</title>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial scale-1">

    <meta name="description" content="<?=WEBDESCR?>">

    <meta name="author" content="<?=AUTHOR?>">

    <link rel="stylesheet" type="text/css" href="<?=$css?>w3.css"/>

    <link rel="stylesheet" href="<?=$css?>main.css" type="text/css">

    <link rel="stylesheet" href="<?=$vendor?>/sweetalert/sweetalert2.css">

     <script src="<?=$vendor?>jQuery-3.3.1/jquery-3.3.1.js"></script>

    <link rel="icon" type="image/png" href="<?=$assets?>img/core-img/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=$vendor?>bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=$assets?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=$vendor?>animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=$vendor?>css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=$vendor?>select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=$css?>util.css">
    <link rel="stylesheet" type="text/css" href="<?=$css?>/main.css">
    <!--===============================================================================================-->

  </head>

  <body>

    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img class="w3-circle" src="<?=$assets?>img/elements/logo/logo_ob.jpg" alt="Y">
          </div>

          <form class="login100-form validate-form" id="formmasuk" method="post" action="" autocomplete="off">
            <span class="login100-form-title">
              Espace membres enregistrement
            </span>

            <?php


              if (isset($_POST['register'])) {

                include ('../app/inc/_flash.php');
                include('../app/inc/_errors.php');

              }

            ?>

            <div class="wrap-input100 validate-input" data-validate = "Un nom d'utilisateur valide est requie: abcxyz">
              <input class="input100" type="text" id="username" name="username" placeholder="Nom d'utilisateur" value="<?=recup_post('username')?>">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Un mot de passe est requie">
              <input class="input100" type="password" id="password" name="password" placeholder="Mot de passe">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Un mot de passe est requie">
              <input class="input100" type="password" id="password" name="password_confirm" placeholder="Confirmer mot de passe">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Un E-mail est requie">
              <input class="input100" type="mail" id="mail" name="mail" placeholder="Votre E-mail" value="<?= recup_post('mail') ?>">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope-square" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Un numéro de téléphone est requie">
              <input class="input100" type="tel" id="tel_1" name="tel_1" placeholder="Votre numéro de téléphone" value="<?=recup_post('tel_1')?>">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
            </div>

            <div class="container-login100-form-btn">
              <button type="submit" name="register" class="login100-form-btn">
                Créer
              </button>
            </div>

            <div class="text-center p-t-136">
              <a class="txt2" href="index.php">
                Connecter vous
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
      <script src="<?=$vendor?>jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
      <script src="<?=$vendor?>bootstrap/js/popper.js"></script>
      <script src="<?=$vendor?>bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
      <script src="<?=$vendor?>select2/select2.min.js"></script>
    <!--===============================================================================================-->
      <script src="<?=$vendor?>tilt/tilt.jquery.min.js"></script>
      <script >
        $('.js-tilt').tilt({
          scale: 1.1
        })
      </script>
    <!--===============================================================================================-->
      <script src="<?=$js?>main.js"></script>

  </body>

</html>
