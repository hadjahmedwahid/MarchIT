<?php
	define('DB_HOST', 'localhost');  
	define('DB_USER', 'root');
	define('DB_PASSWORD','');
	define('DB_NAME', 'carreau');

	  
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=marche', 'root', '',
$pdo_options);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}


?>