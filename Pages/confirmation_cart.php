<!doctype html>
<head><link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\article.css">
<link rel="stylesheet" href="..\Styles\header.css">
</head>

<html>



<body>
<?php include 'header.php'; 
    
	
	$id=$_POST['ID'];
	$quantity = $_POST['Quantity'];
	$unit_price = $_POST['Unit_price'];
	
	$db = mysql_connect('localhost', 'root', '')  or die('Erreur de connexion '.mysql_error());
// sélection de la base  

    mysql_select_db('dump',$db)  or die('Erreur de selection '.mysql_error()); 
	
	$sql = "INSERT INTO order_products(id, order_id, product_id, quantity, unit_price, created_at, updated_at) 
	VALUES('1', '1', '$id', '$quantity', '$unit_price', '2018-10-11 15:50:24', '2018-10-11 15:50:24')";
	
	mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
	
	mysql_close();
?>

<p>Article ajouté</p> </br>
<form action ="products.php">
<input type = "submit" value = "OK" name = "OK">
</form>

</body>
</html>
