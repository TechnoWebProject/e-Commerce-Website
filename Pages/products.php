<!doctype html>
<head><link rel="stylesheet" href="..\Styles\3columns.css">

<link rel="stylesheet" href="..\Styles\main.css">

<link rel="stylesheet" href="..\Styles\products.css"></head>

<html>

<?php include 'header.php'; ?>

<body>
	<br/><br/><br/><br/></br></br>
	
	
	
	<div id="col">
		<?php include 'article.php'; ?>

		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>

	
		
	</div>

	<?php
	
	include '..\Database\databaseInit.php'; 
	
	$results = $mysqli->query("SELECT * FROM users");
	
	while($row=$results->fetch_assoc())
	{
		print $row['username'];
	}
	
	
	?>

	
</body>
</html>