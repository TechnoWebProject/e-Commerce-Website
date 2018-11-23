<?php
//TODO start session
<<<<<<< HEAD
include "action/session.php";

=======
>>>>>>> d51937ddb55ef833e7ae6665fed4c3ed46c60968
?>

<?php
	include 'Database/database.php';
?>
<?php
//TODO (in the next step) control user access

?>



<html><head>
<link rel="stylesheet" href="Styles\main.css">
<link rel="stylesheet" href="Styles\article.css">
<link rel="stylesheet" href="Styles\header.css">
<link rel="stylesheet" href="Styles\cart.css">
<<<<<<< HEAD
<link rel="stylesheet" href="Styles\article_researched.css">
<!--
<link rel="stylesheet" href="Styles\signUp.css">
-->

<?php include "Pages/header.php"; ?>	
=======

<!--
<link rel="stylesheet" href="Styles\signUp.css">
-->
<link rel="stylesheet" href="Styles\article_researched.css">
>>>>>>> d51937ddb55ef833e7ae6665fed4c3ed46c60968
</head>

<body>

<<<<<<< HEAD
=======

<?php
	include "Pages/header.php";
	?>
>>>>>>> d51937ddb55ef833e7ae6665fed4c3ed46c60968
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php
	//*****************Utile seulement pour des test ************//
	//print_r($_GET);//affiche le GET complet
	//echo count($_GET); // Permet de compter le nombre d'élément dans le GET
	//echo('le get "page" retourne ' . $_GET['page']);//on utilise cette ligne pour controle le retour
	// TODO using $page decide to include header.php
	//***********************************************************//
	
	if(!$_GET){//si GET est vide alors on affiche la page de base
		//echo("il y a du contenue");
		//if($_GET['page'] != 'signUp'){
<<<<<<< HEAD
		
		//Ajouter le ifexiste
		if(file_exists("Pages/main.php")){
			include "Pages/main.php";
		}
		
		else{
			echo("Aucune Page a afficher");
		}
=======
		include "Pages/main.php";
>>>>>>> d51937ddb55ef833e7ae6665fed4c3ed46c60968
	}
	
	else{
		//print_r($_GET);//affiche le contenue complet de GET
<<<<<<< HEAD
		//Ajouter le ifexiste
		if(file_exists("Pages/" .$_GET['page'] . ".php")){
			include "Pages/" .$_GET['page'] .".php";
		}
=======
		include "Pages/" .$_GET['page'] .".php";
>>>>>>> d51937ddb55ef833e7ae6665fed4c3ed46c60968
	}

?>
<?php

//create one php file for each view to manage on the website (don't forget to create on main.php view)

//TODO use 
//             input params (included in $_GET or $_POST)


//             $database variable (initialized in $database.php) 
// to get data from database (if needed)

// add view display possibly using data from database
?>
<<<<<<< HEAD


</body></html>





=======
</body></html>

>>>>>>> d51937ddb55ef833e7ae6665fed4c3ed46c60968
<?php
/*
	else{
		echo("c'est vide");
		//TODO if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
		//           else include 'view/main.php' (it has to exist)
		$page = $_GET['page'];

		$filename = 'Pages/'.$page.'.php';
			}


	if (file_exists($filename)){
		echo "On include";
		include $filename;
		}
		else{
			include "Pages/main.php";
		}*/
?>