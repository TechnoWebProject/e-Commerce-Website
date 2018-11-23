<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=dump', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}


?>