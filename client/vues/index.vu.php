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

    <link rel="stylesheet" href="<?=$assets?>css/style.css" type="text/css">

    <link rel="stylesheet" href="<?=$css?>main.css" type="text/css">

    <link rel="stylesheet" href="<?=$vendor?>sweetalert/sweetalert2.css">

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
    <link rel="stylesheet" type="text/css" href="<?=$vendor?>sweetalert/sweetalert2.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=$css?>util.css">
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
              Espace membres connexion
            </span>

            <?php
                if (isset($_POST['login'])) {

                  include ('../app/inc/_flash.php');
                  include('../app/inc/_errors.php');

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
              <a class="txt2" id="forget" href="#">
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
      <script src="<?=$vendor?>jQuery-3.3.1/jquery-3.3.1.js"></script>
    <!--===============================================================================================-->
      <script src="<?=$vendor?>bootstrap/js/popper.js"></script>
      <script src="<?=$vendor?>bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
      <script src="<?=$vendor?>sweetalert/sweetalert2.js"></script>
    <!--===============================================================================================-->
      <script src="<?=$vendor?>tilt/tilt.jquery.min.js"></script>
      <script >
        $('.js-tilt').tilt({
          scale: 1.1
        })
        $('#forget').click(function () {

          Swal.mixin({

            input: 'text',
            confirmButtonText: 'Envoi &rarr;',
            showCancelButton: true,
            /*progressSteps: ['1', '2', '3'],*/
            backdrop: `
              rgba(139, 94, 1, 0.51)
            `
          }).queue([ 
            {
              title: 'Mot de passe Oublié!',
              text: 'Entrer votre E-mail'
            }
          ]).then((result) =>{

            if (result.value) {

              var email = result.value;

              var url = 'forgetPass.php';

              if (email == '') {

                Swal.fire(
                  
                  'Erreur!',
                  
                  'Veillez spécifier votre e-mail!',
                  
                  'error'
                
                );

                return false;

              }

              $.ajax({

                type: 'POST',

                url: url,

                data : { email : email },

                success : function(response){

                }
                
              });

            }

          });

        });
      </script>
    <!--===============================================================================================-->
      <script src="<?=$js?>main_2.js"></script>

  </body>

</html>
