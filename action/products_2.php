<?php
$request = "SELECT * FROM products";

$reponse = $bdd->query($request);


$array_image=[];
$array_name=[];
$array_description=[];
$array_price=[];

while ($donnees = $reponse->fetch())
{
	array_push($array_image,$donnees['image']);
	array_push($array_name,$donnees['name']);
	array_push($array_description,$donnees['description']);
	array_push($array_price,$donnees['unit_price']);
}








/*Le premier exemple qui focntionne
***********************************
$variable='abc';
var_dump($variable);

function returnVar() {
	$variable2 = 'ABC';
	return $variable2;
}

//while ($donnees = $reponse->fetch())
//{*/

?>