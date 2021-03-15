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

		////////////////////////////////////
		// Récupération des infos clients //
		////////////////////////////////////

		$requser = $pdo->prepare("SELECT * FROM clients WHERE mail = '$user'");

	  $requser->execute(array());

	  $userinfo = $requser->fetch();

	  $userid = $userinfo['id'];

	  $username = $userinfo['username'];

	  $usermail = $userinfo['mail'];

	  $usernum = $userinfo['tel_1'];

	  $usernum2 = $userinfo['tel_2'];

	  require('vues/index.vu.php');

	}elseif (!isset($_SESSION["auth"])){

  	redirect('logout.php');

	}

	?>
