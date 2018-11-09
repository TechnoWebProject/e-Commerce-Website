<?php
//TODO start session
?>

<?php
	include 'Database/database.php';
?>
<?php
//TODO (in the next step) control user access

?>



<html><head>
<link rel="stylesheet" href="Styles\main.css">
<link rel="stylesheet" href="Styles\article.css">
<link rel="stylesheet" href="Styles\header.css">
<link rel="stylesheet" href="Styles\cart.css">
<!--
<link rel="stylesheet" href="Styles\signUp.css">
-->
<link rel="stylesheet" href="Styles\article_researched.css">
</head>

<body>
<?php
// TODO using $page decide to include header.php
if($_GET['page'] != 'signUp'){
	include "Pages/header.php";
}

//TODO if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
//           else include 'view/main.php' (it has to exist)
$page = $_GET['page'];

$filename = 'Pages/'.$page.'.php';
if (file_exists($filename)){
	echo "On include";
	include $filename;
}
else{
	include "Pages/main.php";
}
?>
<?php

//create one php file for each view to manage on the website (don't forget to create on main.php view)

//TODO use 
//             input params (included in $_GET or $_POST)


//             $database variable (initialized in $database.php) 
// to get data from database (if needed)

// add view display possibly using data from database
?>
</body></html>