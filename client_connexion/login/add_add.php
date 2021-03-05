<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once "../../app/inc/function.php";

  require_once "../../app/inc/connect.php";

  $user = $_SESSION['auth'];

  if($_SESSION['auth']){

    if (isset($_POST) AND !empty($_POST)) {

      extract($_POST);

      if(isset($_FILES["file"]) AND !empty($_FILES["file"]["name"])){

        $max = 8000000;

        foreach($_FILES['file']['tmp'] as $key => $file_tmp){

            $size = $_FILES['file']['size'];

            $ext = array('jpg','jpeg','gif','png');

            $extup = strtolower(substr(strrchr($file_tmp, '.'),1));

            if(in_array($extup,$ext)){

              $chemin = "clients/img_article/".$user.".".$extup."/";

              $file = $_FILES['file']['name']['$key'];

              $deplacement = move_uploaded_file($file, $chemin);

              if($deplacement){

                echo "déplacer avec succès";

                echo $size.'</br>';

              }

            }

        }

      }


      // $insert = $pdo->prepare("INSERT INTO articles SET nom = ?, img = ?, img2 = ?, prix = ?, cat = ?, descr = ?");

      // $insert->execute([]);

      // if(isset($_FILES["avatar"]) AND !empty($_FILES["avatar"]["name"])){

      //   $max = 8000000;

      //   $ext = array('jpg','jpeg','gif','png');

      //   $name_article = $_POST['name_article'];

      //   $info = $_POST['info'];

      //   if($_FILES["avatar"]["size"] <= $max){

      //     $extup = strtolower(substr(strrchr($_FILES["avatar"]["name"],'.'),1));

      //     if(in_array($extup,$ext)){

      //       $chemin = "clients/img_article/".$mail."/".$categorie."/".$marque."/".$name_article.".".$extup;

      //       $deplacement = move_uploaded_file($_FILES["avatar"]["tmp_name"], $chemin);

      //       if($deplacement){

      //         $avatar = $name_article.".".$extup;

      //         $price_article = $_POST['prix'];

      //         $insertphpto = $pdo->prepare("INSERT INTO car SET img_car = ?, name_car = ?, prix = ?, info = ?");

      //         $insertphpto->execute(array($avatar,$name_car,$price_car."Fr CFA",$info));

      //         if ($insertphpto) {

      //           $msg_photo = "Article inséré avec succès.";

      //           header("location: index1.php");

      //         }else{

      //           $msg = "Echec; quelque chose a mal tourné. Veillez réessayer ou contacté l'administrateur.";

      //         }

      //       }

      //     }

      //   }

      // }

    }

  }elseif (!isset($_SESSION["auth"])){

    redirect('logout.php');

  }

?>
