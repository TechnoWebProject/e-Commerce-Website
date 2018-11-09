<!doctype html>
<<<<<<< HEAD
<head>
=======
<head><link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\article.css">
<link rel="stylesheet" href="..\Styles\header.css">
<link rel="stylesheet" href="..\Styles\conf_cart.css">
>>>>>>> Quentin's-Work
<meta http-equiv="refresh" content="0; URL=cart.php">
</head>

<html>



<body>
<<<<<<< HEAD
<?php
=======
<?php include 'header.php'; 
>>>>>>> Quentin's-Work
    
	
	$id=$_POST['ID'];
	
<<<<<<< HEAD
include '../Database/database.php'; 
=======
	try
{
$bdd = new PDO('mysql:host=localhost;dbname=dump', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}  
>>>>>>> Quentin's-Work
    
	$sql = "DELETE FROM order_products
			WHERE id = $id";
	
	$bdd->exec($sql);
?>



</body>
</html>
