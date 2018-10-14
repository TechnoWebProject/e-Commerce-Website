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

$research = $_POST['search']; 
$researchMAJ = strtoupper($research);
$request="SELECT name, UPPER(name), image, unit_price
		FROM products";
$reponse = $bdd->query($request);

while ($donnees = $reponse->fetch())
{
if ($donnees['UPPER(name)'] == $researchMAJ){
	echo "<img src='".$donnees['image']."'/>";
		?>
		</br>
		<?php
		echo $donnees['name'];?>
		</br>
		<?php
		echo $donnees['unit_price'];
		?>
		€
		
		<form>
		<label>Quantity :</label>
		<input type="int" name="Quantity" size="1" maxlength ="3" value="">
		</form>
<?php
}
}
$reponse->closeCursor();

?>
	
</p>
</body>
</html>


