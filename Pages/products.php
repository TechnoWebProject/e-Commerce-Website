<!doctype html>

<head><link rel="stylesheet" href="..\Styles\3columns.css">

<link rel="stylesheet" href="..\Styles\main.css">
<<<<<<< HEAD

<link rel="stylesheet" href="..\Styles\products.css"></head>

<html>
=======
>>>>>>> Sylvain's-Work


<<<<<<< HEAD
=======
>>>>>>> ddc27e40b0fdfa4b1ac159e7ace9c953efd8b6f2



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
>>>>>>> Sylvain's-Work
	
		
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