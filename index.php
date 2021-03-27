<?php
	
	/*$uri = $_SERVER['REQUEST_URI'];*/

	require_once "app/inc/function.php";

	defined('ROOT') || define('ROOT', realpath(dirname(__DIR__.'/yumeres')));

	require_once ROOT . '/vendor/autoload.php';

	/*use \AltoRouter;*/

	/*use App;*/

	$router = new App\Router($_GET['url']);

	$router->get('/',function(){
		echo 'acceuil';
	});

?>