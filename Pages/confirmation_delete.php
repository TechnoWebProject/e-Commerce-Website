<!doctype html>
<head>
<meta http-equiv="refresh" content="0; URL=cart.php">
</head>

<html>



<body>
<?php
    
	
	$id=$_POST['ID'];
	
include '../Database/database.php'; 
    
	$sql = "DELETE FROM order_products
			WHERE id = $id";
	
	$bdd->exec($sql);
?>



</body>
</html>
