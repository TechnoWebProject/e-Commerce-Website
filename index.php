<?php
//TODO start session
include "action/session.php";

?>

<?php
	include 'action/database.php';
?>
<?php
//TODO (in the next step) control user access

?>



<html><head>
<link rel="stylesheet" href="Styles\main.css">
<link rel="stylesheet" href="Styles\article.css">
<link rel="stylesheet" href="Styles\header.css">
<link rel="stylesheet" href="Styles\cart.css">
<link rel="stylesheet" href="Styles\article_researched.css">
<!--
<link rel="stylesheet" href="Styles\signUp.css">
-->

<?php include "Pages/header.php"; ?>	
</head>

<body>

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
		
		//Ajouter le ifexiste
		if(file_exists("Pages/main.php")){
			include "Pages/main.php";
		}
		
		else{
			echo("Aucune Page a afficher");
		}
	}
	
	else{
		//print_r($_GET);//affiche le contenue complet de GET
		//Ajouter le ifexiste
		if(file_exists("action/" .$_GET['page'] . ".php")){
			include "action/" .$_GET['page'] .".php";
		}
	}

?>
<?php

//create one php file for each view to manage on the website (don't forget to create on main.php view)

	if($_GET){
			//print_r($_GET);//affiche le contenue complet de GET
			//Ajouter le ifexiste
			if(file_exists("view/" .$_GET['page'] . ".php")){
				include "view/" .$_GET['page'] .".php";
			}
		}


//TODO use 
//             input params (included in $_GET or $_POST)


//             $database variable (initialized in $database.php) 
// to get data from database (if needed)

// add view display possibly using data from database
?>


</body></html>





