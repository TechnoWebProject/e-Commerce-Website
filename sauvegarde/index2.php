<?php
//TODO start session
?>

<?php
	include 'Database/database.php';
?>
<?php
//TODO (in the next step) control user access

?>

//TODO get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable

//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)

<?php


//create one php file for each action to manage on the website

//TODO use 
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php) 
// to insert or update data into database

?>
<html><head>

</head>

<body>
<?php
// TODO using $page decide to include header.php

?>
<?php

//TODO add header display
//TODO if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
//           else include 'view/main.php' (it has to exist)
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