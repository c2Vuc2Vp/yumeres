<?php

  require_once "../inc/connect.php";

  require_once "../inc/function.php";

  ////////////////////////////////////////////////////
  // vérifier si le token n'a pas déjà été envoyé.  //
  ////////////////////////////////////////////////////

  if (!empty($_GET['m']) && is_used('clients', 'username', $_GET['u']) && !empty($_GET['token'])) {

    ////////////////////////////////////////////////
    // récupérer le mail et le token depuis l'URL //
    ////////////////////////////////////////////////

    $mail = $_GET['m'];

    $token = $_GET['token'];

    //////////////////////////////////////////////
    // refaire le même token que celui de l'URL //
    //////////////////////////////////////////////

    $req = $pdo->prepare('SELECT mail, password FROM clients WHERE mail = ?');

    $req->execute([$mail]);

    $info = $req->fetch(PDO::FETCH_OBJ);

    $token_verif = sha1($info->username.$info->mail.$info->password);

    //////////////////////////////////////////////////////
    // comparer le tokent de l'URL et le nouveau généré //
    //////////////////////////////////////////////////////

    if ($token == $token_verif) {

      ///////////////////////
      // activer le compte //
      ///////////////////////

      $req = $pdo->prepare("UPDATE clients set active = '1' WHERE mail = ?");

      $req->execute([$mail]);

      ///////////////////////////////////////////////////////////////////////
      // rediriger sur la page de login avec un msg de succès d'activation //
      ///////////////////////////////////////////////////////////////////////

      set_flash('Compte activé avec succès', 'success');

      redirect('index.php');

    }else{

      set_flash('Token invalide', 'danger');

      redirect('index.php');
    }

  }else{

    redirect('index.php');

  }
?>
