<!DOCTYPE html>

<html lang="fr">

  <head>

    <title><?=WEBNAME?>_login</title>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial scale-1">

    <meta name="description" content="<?=WEBDESCR?>">

    <meta name="author" content="<?=AUTHOR?>">

    <link rel="stylesheet" type="text/css" href="../stylefiles/w3.css"/>

    <link rel="stylesheet" href="../stylefiles/main.css" type="text/css">

    <link rel="stylesheet" href="../stylefiles/sweetalert2.css">

    <script src="../jsfiles/jquery/jquery-2.2.4.min.js"></script>

    <link rel="icon" type="image/png" href="../img/core-img/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../stylefiles/util.css">
    <link rel="stylesheet" type="text/css" href="../stylefiles/main.css">
    <!--===============================================================================================-->

  </head>

  <body>

    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img class="w3-circle" src="../img/elements/logo/logo_ob.jpg" alt="Y">
          </div>

          <form class="login100-form validate-form" id="formmasuk" method="post" action="">
            <span class="login100-form-title">
              Espace membres connexion
            </span>

            <?php
              include ('../app/inc/_flash.php');
                if(isset($errors)){

                  ?>

                  <div class="alert-validate"><?=$errors?><button type="button" class="close" data-dismiss="alert">&times;</div>

                <?php

              }

            ?>

            <div class="wrap-input100 validate-input" data-validate = "Une addresse e-mail valide est requise: abcxyz@mail.com">
              <input class="input100" type="mail" id="mail" name="mail" placeholder="Addresse E-mail">
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

            <div class="container-login100-form-btn">
              <button type="submit" name="login" class="login100-form-btn">
                Connexion
              </button>
            </div>

            <div class="text-center p-t-12">
              <span class="txt1">
                Oublié
              </span>
              <a class="txt2" href="#">
                Username / Password?
              </a>
            </div>

            <div class="text-center p-t-136">
              <a class="txt2" href="register.php">
                Créer votre compte
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
      <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
      <script src="../vendor/bootstrap/js/popper.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
      <script src="../vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
      <script src="../vendor/tilt/tilt.jquery.min.js"></script>
      <script >
        $('.js-tilt').tilt({
          scale: 1.1
        })
      </script>
    <!--===============================================================================================-->
      <script src="../jsfiles/main.js"></script>

  </body>

</html>