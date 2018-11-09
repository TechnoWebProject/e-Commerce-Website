<?php include 'header.php'; ?>
<p>

	BODY <!--Pas de solution pour l'instant-->
	<br/><br/><br/><br/><br/>
	
<?php
include '../Database/database.php';

$research = $_GET['search']; 
$researchMAJ = strtoupper($research);


$var = 'research';
include 'affichage_product.php';

?>
		
</p>


