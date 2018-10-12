<!DOCTYPE html>

<html>
<head><link rel="stylesheet" href="..\Styles\cart.css">
<link rel="stylesheet" href="..\Styles\article.css">
<link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\header.css">
</head>

<body>
<?php include 'header.php'; ?>

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
		<a>Your cart :</a><br />
		
		<?php 
		$request="SELECT products.name, products.description, products.unit_price, quantity, image
		FROM products, order_products
		WHERE products.id = order_products.product_id ";
	
		$reponse = $bdd->query($request);
		while ($donnees = $reponse->fetch())
		{
		echo "<img src='".$donnees['image']."'/>";
		?>
		<ul><?php echo $donnees['name']; ?>
			<li><?php echo $donnees['description']; ?></li>
		</ul>
		
		
	<form>
	<label>Quantity :</label>
	<input type="int" name="Quantity" size="1" maxlength ="3" value="<?php echo $donnees['quantity']; ?>">
	</form>
	<p>
	<label>Price : </label>
	<?php echo ($donnees['unit_price']*$donnees['quantity']); ?>
	</p>
	<?php
	}
	$reponse->closeCursor();

	?>
	</div>
</body>
</html>