<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dump', 'administrateur', $_POST['nom']);
	?>
	<form action="new_product.php" method="post">
	<p>Pour l'ajout d'un article :</p>
	<p>name : <input type="text" name="name" /></p>
	<p>description : <input type="text" name="description" /></p>
	<p>prix : <input type="text" name="unit_price" /></p>
	<p>lien image : <input type="text" name="image" /></p>
	<p><input type="submit" value="OK"></p>
	</form>
	
<?php
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}
?>