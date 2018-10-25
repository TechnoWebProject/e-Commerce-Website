<!DOCTYPE html>

<html>
<head><link rel="stylesheet" href="..\Styles\cart.css">
<link rel="stylesheet" href="..\Styles\article.css">
<link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\header.css">
</head>

<body>
<?php include 'header.php'; ?>

<?php include '../Database/database.php'; ?>

	<div class = 'basket'>
		<a>Your cart :</a><br /><br :>

		<?php $var = 'cart'; include 'affichage_product.php'; ?>
		
		
	</div>
</body>
</html>