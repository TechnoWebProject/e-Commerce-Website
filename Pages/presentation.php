<?php

	echo($_GET['name']);
	//echo("      ");
	//echo($_GET['name']);
	$cookName=str_replace(" ","_",$_GET['name']);
	if(!isset($_COOKIE[$cookName])){
		echo("\non a pas ce cookie");
		setcookie($cookName, '0'); //il faut trouver une solution pour retourner a setcookie(pb encodage  '=,; \t\r\n\013\014'  est interdit)
		
	}
	else{
		setcookie($cookName, strval(intval($_COOKIE[$cookName])+1));
		echo("Consulté : ");
		echo($_COOKIE[$cookName]);
		echo(" fois");
		//print_r($_COOKIE);
	}

?>