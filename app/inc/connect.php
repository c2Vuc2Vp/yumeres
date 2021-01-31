<?php

try{
  $pdo = new PDO('mysql:host=localhost;dbname=yumeres', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);/*
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);*/
}catch(PDOException $e){
  header("location: inc/install.php?install=oui");
  exit;
}


// Paramètres de connection à la database

$db_server = "localhost";

$db_username = "root";

$db_password = ""; #Selon le mot de passe de mysql database.

$db_name = "yumeres"; #À modifier selon le nom de la base de données que je souhaite.

// Paramètres de connection

$server = $db_server;

$username = $db_username;

$password = $db_password;

$database = $db_name;

// Paramètres du serveur

$link = new mysqli($server, $username, $password);

?>
