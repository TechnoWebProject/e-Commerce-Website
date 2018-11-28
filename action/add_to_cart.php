<?php 

if($_POST){
	$id=$_POST['ID'];
	$quantity = $_POST['Quantity'];
	if ($quantity == 0){
		$sql = "DELETE FROM order_products
		WHERE id = $id";
	}
	else {
		$unit_price = $_POST['Unit_price'];
	

    
		$sql = "INSERT INTO order_products(id, order_id, quantity, unit_price, created_at, updated_at) 
		VALUES('$id', '1', '$quantity', '$unit_price', '2018-10-11 15:50:23', '2018-10-11 15:50:23')
		ON DUPLICATE KEY UPDATE quantity = $quantity";
	}
	$bdd->exec($sql);
	
}

$request="SELECT *
	FROM products, order_products
	WHERE products.id = order_products.id ";

$reponse = $bdd->query($request);

$array_image=[];
$array_name=[];
$array_description=[];
$array_price=[];
$array_id=[];
$array_quantity=[];

while ($donnees = $reponse->fetch())
{
	array_push($array_image,$donnees['image']);
	array_push($array_name,$donnees['name']);
	array_push($array_description,$donnees['description']);
	array_push($array_price,$donnees['unit_price']);
	array_push($array_id,$donnees['id']);
	array_push($array_quantity,$donnees['quantity']);
}

?>



