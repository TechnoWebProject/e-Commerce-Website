<!doctype html>
<head><link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\article_researched.css">
<link rel="stylesheet" href="..\Styles\header.css">
</head>

<html>



<body>
<?php include 'header.php'; ?>
<p>

	BODY <!--Pas de solution pour l'instant-->
	<br/><br/><br/><br/><br/>
	
<?php
<<<<<<< HEAD
include '../Database/database.php';

$research = $_GET['search']; 
$researchMAJ = strtoupper($research);


$var = 'research';
include 'affichage_product.php';

?>
		
=======
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
$researchMAJ = strtoupper($research);
$request="SELECT name, UPPER(name), image, unit_price, id, description
		FROM products";
$reponse = $bdd->query($request);

while ($donnees = $reponse->fetch())
{
if ($donnees['UPPER(name)'] == $researchMAJ){
	?><TABLE align="center">
	<TH>
	<?php
	echo "<img src='".$donnees['image']."'/>";
		?>
		</TH>
		</br>
		<TD>
		<div class="name">
		<?php
		echo $donnees['name'];?>
		</div>
		<div class="description">
		<?php echo $donnees['description'];?>
		</div>
		</br>
		<?php
		echo $donnees['unit_price'];
		?>
		€
		
		<form method="POST" action="confirmation_cart.php" id="quantity">
	<label></label>
	<input type="int" name="Quantity" size="1" maxlength ="3" value="">
	<input type="hidden" name = "ID" value = "<?php echo $donnees['id'] ?>">
	<input type="hidden" name = "Unit_price" value = "<?php echo $donnees['unit_price'] ?>">
	<input type="submit" value ="Add to cart" name = "Add to cart">
	</form></TD>
<?php
}
}
$reponse->closeCursor();

?>
	
>>>>>>> Quentin's-Work
</p>
</body>
</html>


