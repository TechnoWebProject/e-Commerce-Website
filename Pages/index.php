<!doctype html>

<?php


//TODO start session

//TODO include database.php file
	$user ='root';
	$pass = '';
	$db = 'dump';
	
	$mysqli = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
	if($mysqli->connect_error){
		die('Error');
	}
//TODO include checkUser.php file

//TODO get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable

//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)
		//create one php file for each action to manage on the website

		//TODO use 
		//             input params (included in $_GET or $_POST)
		//             $database variable (initialized in $database.php) 
		// to insert or update data into database

?>

<head>
<link rel="stylesheet" href="..\Styles\main.css">
<link rel="stylesheet" href="..\Styles\article.css">
<link rel="stylesheet" href="..\Styles\header.css">
</head>

<html>



<body>
<?php include 'header.php'; ?>
<p>

	BODY <!--Pas de solution pour l'instant-->
	<br/><br/><br/><br/><br/>
	
	La surprise est une émotion provoquée par un événement ou une information inattendu. Elle est généralement brève, puis s'estompe ou laisse place à une autre émotion. Par métonymie, on appelle aussi surprise la cause de cette émotion.
		<br/><br/>
	<?php include 'article.php'; ?>
	</p>
</body>
</html>
