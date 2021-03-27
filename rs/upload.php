<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once "../app/inc/function.php";
  require_once "../app/inc/connect.php";

  if(isset($_FILES["file"]) AND !empty($_FILES["file"]["name"])){

    $max = 8000000;
    $ext = array('jpg','jpeg','gif','png');
    $chemin = "files/img/idx/";
    $img = $_FILES["file"]["name"];
    $img_name = basename($_FILES["file"]["name"]);
    $targetFile = $chemin.$img_name;
    $extension = pathinfo($targetFile, PATHINFO_EXTENSION);

    if (isset($_POST) AND !empty($_POST)) {

      extract($_POST);

      if ($_FILES["file"]['size'] <= $max) {

        #extraction de l'extension de l'image
        $extup = strtolower(substr(strrchr($img_name, '.'),1)); 
        
        if (in_array($extup, $ext)) {
   
          $dossier = $chemin;

          if (!file_exists($dossier)) {
            
            mkdir($dossier, 0775, true);
                      
          }

          
          $deplacement = move_uploaded_file($_FILES["file"]['tmp_name'], $targetFile);
          
          if ($deplacement){
          
           $insert = $pdo->prepare('UPDATE categories SET img = ? WHERE list_cat = ?');

           $insert = $insert->execute([$img,$categorie]);
            
          }

        }

      }

    }

  }

?>
