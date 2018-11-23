<?php

	$string = "INSERT INTO `products` ( `name`, `description`, `unit_price`, `range_id`, `image`, `created_at`, `updated_at`) VALUES (" .$_POST['name'] ."," .$_POST['description'] ."," .$_POST['unit_price'] .", 4," .$_POST['image'] .", '2018-10-11 15:50:23', '2018-10-11 15:50:23');";
	echo($string);
	//echo("INSERT INTO `products` ( `name`, `description`, `unit_price`, `range_id`, `image`, `created_at`, `updated_at`) VALUES ("	.$_POST['id'] ."," .$_POST['name'] ."," .$_POST['description'] ."," .$_POST['unit_price'] ."," .$_POST['id'] ."," .$_POST['image'] .", '2018-10-11 15:50:23', '2018-10-11 15:50:23');")
	
	//$requete = mysqli_query($con,$string);
	//mysql_query("INSERT INTO `products` (`id`, `name`, `description`, `unit_price`, `range_id`, `image`, `created_at`, `updated_at`) VALUES ("	.$_POST['id'] ."," .$_POST['name'] ."," .$_POST['description'] ."," .$_POST['unit_price'] ."," .$_POST['id'] ."," .$_POST['image'] .", '2018-10-11 15:50:23', '2018-10-11 15:50:23');")
	
	
	//mysql_select_db('actualites') OR die('Erreur de sélection de la base'); 

    // $requete1 = mysql_query('....'); 
	//"),")

	
	
?>