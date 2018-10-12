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
	<?php 
$image_url='https://static.fnac-static.com/multimedia/Images/FR/MDM/12/30/78/7876626/1540-1/tsp20180718111048/Smartphone-Huawei-P20-Lite-Double-SIM-64-Go-Bleu.jpg';
?>

<img src="<?php echo $image_url;?>">
<?php 
$image_url1='https://static.fnac-static.com/multimedia/Images/FR/NR/72/5b/9b/10181490/1540-1/tsp20180628155759/Super-Mario-Party-Nintendo-Switch.jpg';
?>

<img src="<?php echo $image_url1;?>">
<?php 
$image_url3='https://static.fnac-static.com/multimedia/Images/FR/MDM/96/bb/69/6929302/1540-1/tsp20180622131235/Jouet-d-eveil-Fisher-Price-Mon-ami-l-escargot.jpg';
?>

<img src="<?php echo $image_url3;?>">
<?php 
$image_url4='https://static.fnac-static.com/multimedia/Images/FR/NR/4a/66/7c/8152650/1540-1/tsp20180627163147/Marvel-s-Spider-Man-PS4.jpg';
?>

<img src="<?php echo $image_url4;?>">
<?php 
$image_url5='https://static.fnac-static.com/multimedia/Images/FR/NR/a7/89/80/8423847/1540-1/tsp20180503134132/Red-Dead-Redemption-2-Xbox-One.jpg';
?>

<img src="<?php echo $image_url5;?>">
<?php 
$image_url6='https://static.fnac-static.com/multimedia/Images/FR/MDM/18/ba/1b/1817112/1540-1/tsp20180625143853/Paire-de-manettes-Nintendo-Switch-Joy-Con-Vert-Neon-et-Rose-Neon.jpg';
?>

<img src="<?php echo $image_url6;?>">

			<?php 
$image_url9='https://static.fnac-static.com/multimedia/Images/FR/NR/f1/a5/82/8562161/1540-1/tsp20180712093637/Houe-de-protection-Nintendo-pour-Switch.jpg';
?>

<img src="<?php echo $image_url9;?>">
			<?php 
$image_url10='https://static.fnac-static.com/multimedia/Images/FR/MDM/4e/12/86/8786510/1540-1/tsp20180824171105/Smartphone-Xiaomi-Pocophone-F1-Double-SIM-128-Go-Noir.jpg';
?>

<img src="<?php echo $image_url10;?>">
		
	
		
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