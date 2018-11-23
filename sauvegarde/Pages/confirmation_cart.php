<!doctype html>
<head>
<meta http-equiv="refresh" content="0; URL=cart.php">
</head>

<html>



<body>
<?php
    
	
	$id=$_POST['ID'];
	$quantity = $_POST['Quantity'];
	$unit_price = $_POST['Unit_price'];
	
include '../Database/database.php'; 
    
	$sql = "INSERT INTO order_products(id, order_id, quantity, unit_price, created_at, updated_at) 
	VALUES('$id', '1', '$quantity', '$unit_price', '2018-10-11 15:50:23', '2018-10-11 15:50:23')
	ON DUPLICATE KEY UPDATE quantity = $quantity";
	
	$bdd->exec($sql);
?>

</body>
</html>
