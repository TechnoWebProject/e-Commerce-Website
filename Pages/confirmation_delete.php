<!doctype html>
<head><link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\article.css">
<link rel="stylesheet" href="..\Styles\header.css">
<link rel="stylesheet" href="..\Styles\conf_cart.css">
</head>

<html>



<body>
<?php include 'header.php'; 
    
	
	$id=$_POST['ID'];
	
	try
{
$bdd = new PDO('mysql:host=localhost;dbname=dump', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}  
    
	$sql = "DELETE FROM order_products
			WHERE id = $id";
	
	$bdd->exec($sql);
?>

<form action ="cart.php" class ="art">
<p>Article deleted</br>
<input type = "submit" value = "OK" name = "OK">
</p>
</form>

</body>
</html>
