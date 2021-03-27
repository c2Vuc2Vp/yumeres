<?php
	
	namespace App

	class Router {

    private $url; // Contiendra l'URL sur laquelle on souhaite se rendre
    private $routes = []; // Contiendra la liste des routes

    public function __construct($url){
        $this->url = $url;
    }

	}
	
?>