<!doctype html>
<head><link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\article.css">
<link rel="stylesheet" href="..\Styles\header.css">
</head>

<html>



<body>
<?php include 'header.php'; ?>
<p>

	BODY <!--Pas de solution pour l'instant-->
	<br/><br/><br/><br/><br/>
	
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=dump', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}

$research = $_GET['search']; 
$request="SELECT name, image
		FROM articles";
$reponse = $bdd->query($request);

while ($donnees = $reponse->fetch())
{
if $donnees['name'] == 





?>
	
</p>
</body>
</html>


