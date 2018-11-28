<?php
	
	$name = $_GET['name']; 
	$nameMAJ = strtoupper($name);
	$nameMAJ = str_replace(' ', '', $nameMAJ);


	
	
	$request="SELECT name, UPPER(name), image, unit_price, id, description
	FROM products";

	$reponse = $bdd->query($request);

	$array_image=[];
	$array_name=[];
	$array_description=[];
	$array_price=[];
	$array_id=[];
	$array_nameMAJ=[];

	while ($donnees = $reponse->fetch())
	{
		array_push($array_image,$donnees['image']);
		array_push($array_name,$donnees['name']);
		array_push($array_description,$donnees['description']);
		array_push($array_price,$donnees['unit_price']);
		array_push($array_id,$donnees['id']);
		array_push($array_nameMAJ,$donnees['UPPER(name)']);
	}

?>