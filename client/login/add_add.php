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

        $_POST["default_pic"] = $_FILES["file"]["name"][0];
        $max = 8000000;
        $ext = array('jpg','jpeg','gif','png');
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
        $chemin = "clients/img_article/".$user."/";
        $myimages = array();

        foreach($myfiles as $single_image) {

          if ($single_image['size'] <= $max) {
 
            #extraction de l'extension de l'image
            $extup = strtolower(substr(strrchr($single_image['name'], '.'),1)); 
            
            if (in_array($extup, $ext)) {
       
              $extension = pathinfo($single_image['name'], PATHINFO_EXTENSION);
              $img = $single_image['name'];
              $img_name = ($_POST['default_pic'] == $img ? "1" : "0") . "." . $extension;
              $dossier = $chemin.$categorie.'/'.$sous_categorie.'/'.$sous_categorie_infor.'/'.$marque.'/'.$nom;

              if (!file_exists($dossier)) {
                
                mkdir($chemin.$categorie.'/'.$sous_categorie.'/'.$sous_categorie_infor.'/'.$marque.'/'.$nom, 0775, true);
                          
              }

              $targetFile = $chemin.$categorie.'/'.$sous_categorie.'/'.$sous_categorie_infor.'/'.$marque.'/'.$nom.'/'.basename($img_name);
              $deplacement = move_uploaded_file($single_image['tmp_name'], $targetFile);
              
              if ($deplacement){
              
                $myimages[] = array("cover" => ($_POST['default_pic'] == $img ? "1" : "0"), "img" => $img_name);
                
              }

            }

          }
       
        }

        $nom = xss($nom);
        $username = xss($username);
        $stock = xss($stock);
        $categorie = xss($categorie);
        $sous_categorie = xss($sous_categorie);
        $sous_categorie_infor = xss($sous_categorie_infor);
        $marque = xss($marque);
        $content = xss($content);
        $prix = xss($prix);
        $article = $pdo->prepare("INSERT INTO articles SET nom = ?, username = ?, stock = ?, cat = ?, s_cat = ?, s_cat_i = ?, marque = ?, descr = ?, prix = ?, img = ?");
        $article->execute([$nom, $username, $stock, $categorie, $sous_categorie, $sous_categorie_infor, $marque, $content, $prix, $img]);

        $data_serialize = serialize($myimages);
        print("SERIALIZED DATA:\n");
        print($data_serialize);

      }

    }

  }elseif (!isset($_SESSION["auth"])){

    redirect('logout.php');

  }

?>
