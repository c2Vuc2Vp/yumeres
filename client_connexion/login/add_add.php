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

        print("ORIGINAL STRUCTURE OF \$_FILES:\n");
        print_r($_FILES);

        $myfiles = array();

        foreach(array_keys($_FILES["file"]['name']) as $i) { // loop over 0,1,2,3 etc...
        
          foreach(array_keys($_FILES["file"]) as $j) { // loop over 'name', 'size', 'error', etc...
            
            $myfiles[$i][$j] = $_FILES["file"][$j][$i]; // "swap" keys and copy over original array values
          
          }
        
        }

        print("RESULT STRUCTURE OF THE MANIPULATED \$_FILES:\n");
        print_r($myfiles);

        $myimages = array();

        foreach($myfiles as $single_image) {
            $extension = pathinfo($single_image["name"], PATHINFO_EXTENSION);
            $img = $single_image["name"];
            $img_name = $id . "_" . uniqid() . "_" . ($_POST['default_pic'] == $img ? "1" : "0") . "." . $extension;
            $targetFile = $targetDir.basename($img_name);
            if (move_uploaded_file($single_image["tmp_name"], $targetFile)){
                $myimages[] = array("cover" => ($_POST['default_pic'] == $img ? "1" : "0"), "img" => $img_name);
            }
        }
        $data_serialize = serialize($myimages);
        print("SERIALIZED DATA:\n");
        print($data_serialize);

       /* foreach($_FILES['file']['tmp_name'] as $key => $file_tmp){

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

        }*/

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
