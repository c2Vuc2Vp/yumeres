<?php
	
	/*$uri = $_SERVER['REQUEST_URI'];*/

	require_once "app/inc/function.php";

	defined('ROOT') || define('ROOT', realpath(dirname(__DIR__.'/yumeres')));

	require_once ROOT . '/vendor/autoload.php';

	/*use \AltoRouter;*/

	/*use App;*/

	$router = new App\Router\Router($_GET['url']);

	$router->get('/',function(){
		require_once('rs/index.php');
	});
 
	$router->get('/posts/:id', function($id){ echo "Voila l'article $id"; });  
	$router->get('/posts', function(){ echo "Voila tous les articles";}); 

	$router->run();

?>