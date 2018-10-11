<!doctype html>
<head><link rel="stylesheet" href="..\Styles\3columns.css">

<link rel="stylesheet" href="..\Styles\main.css"></head>

<link rel="stylesheet" href="..\Styles\main.css">

<link rel="stylesheet" href="..\Styles\products.css"></head></head>


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
	$user ='root';
	$pass = '';
	$db = 'dump';
	
	$mysqli = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
	
	if($mysqli->connect_error){
		die('Error');
	}
	else{echo "connected";}
	
	$results = $mysqli->query("SELECT * FROM users");
	
	while($row=$results->fetch_assoc())
	{
		print $row['username'];
	}
	
	?>

	
</body>
</html>