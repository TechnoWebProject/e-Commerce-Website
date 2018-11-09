<!DOCTYPE html>

<html>
<head><link rel="stylesheet" href="..\Styles\cart.css">
<link rel="stylesheet" href="..\Styles\article.css">
<link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\header.css">
</head>

<body>
<?php include 'header.php'; ?>

<<<<<<< HEAD
<?php include '../Database/database.php'; ?>

	<div class = 'basket'>
		<a>Your cart :</a><br /><br :>

		<?php $var = 'cart'; include 'affichage_product.php'; ?>
		
		
=======
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



?>
	<div class = 'basket'>
		<a>Your cart :</a><br /><br :>
		
		<?php 
		$request="SELECT *
		FROM products, order_products
		WHERE products.id = order_products.id ";
	
		$reponse = $bdd->query($request);
		while ($donnees = $reponse->fetch())
		{
		echo "<img src='".$donnees['image']."'/>";
		?>
		<ul><?php echo $donnees['name']; ?>
			<li><?php echo $donnees['description']; ?></li>
		</ul>
		
		
	<form method="POST" action="confirmation_cart.php" id="quantity">
	<label>Quantity :</label>
	<input type="int" name="Quantity" size="1" maxlength ="3" value="<?php echo $donnees['quantity']; ?>">
	<input type="hidden" name = "ID" value = "<?php echo $donnees['id'] ?>">
	<input type="hidden" name = "Unit_price" value = "<?php echo $donnees['unit_price'] ?>">
	<input type="submit" value ="Add to cart" name = "Add to cart">
	</form>
	<p>
	<label>Price : </label>
	<?php echo ($donnees['unit_price']*$donnees['quantity']); ?>
	</p>
	<form method="POST" action="confirmation_delete.php" id="delete">
	<input type="hidden" name = "ID" value = "<?php echo $donnees['id'] ?>">
	<input type="submit" value ="Delete Article" name = "Delete Article" style="background-color: red;">
	</form>
	<?php
	}
	$reponse->closeCursor();

	?>
>>>>>>> Quentin's-Work
	</div>
</body>
</html>