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
<<<<<<< HEAD
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
		<?php include 'article.php'; ?>
=======
>>>>>>> Quentin's-Work
	
		
	</div>
	
<<<<<<< HEAD
	
	<?php
	
	include '..\Database\databaseInit.php'; 
	
	$results = $mysqli->query("SELECT * FROM users");
	
	while($row=$results->fetch_assoc())
	{
		print $row['username'];
	}
	
	
	?>
=======
>>>>>>> Quentin's-Work

	
</body>
</html>