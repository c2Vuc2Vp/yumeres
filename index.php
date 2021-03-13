<?php
	
	$uri = $_SERVER['REQUEST_URI'];

	if ($uri === '/dev/yumeres/client') {

		require 'client_connexion/index.php';

	}elseif ($uri === '/dev/yumeres/'){
		
		require 'index.html';

	}elseif ($uri === '/dev/yumeres/acceuil'){
		
		require 'index.html';

		/*echo "require '/dev/yumeres/index.html';";*/
	}elseif ($uri === 'dev/yumeres/client_connexion/login/vues/account/'){

		require 'client_connexion/login/vues/account/';
	
	}
