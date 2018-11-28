<?php

$i=0;
$size=sizeof($array_image);
for($i=0; $i<$size;$i++)
{
$nameMAJ2 = str_replace(' ', '', $array_nameMAJ[$i]);
if ($nameMAJ == $nameMAJ2){
		?><TABLE align="center">
		<TH>
		<?php
		echo "<img src='".$array_image[$i]."'/>";
		?>
		</TH>
		</br>
		<TD>
		<div class="name">
		<?php
		echo $array_name[$i];?>
		</div>
		<div class="description">
		<?php echo $array_description[$i];?>
		</div>
		</br>
		<?php
		echo $array_price[$i];
		?>
		€
		
		<form method="POST" action="index.php?page=add_to_cart" id="quantity">
		<label></label>
		<input type="int" name="Quantity" size="1" maxlength ="3" value="">
		<input type="hidden" name = "ID" value = "<?php echo $array_id[$i] ?>">
		<input type="hidden" name = "Unit_price" value = "<?php echo $array_price[$i] ?>">
		<input type="submit" value ="Add to cart" name = "Add to cart">
		</form></TD>
		<?php
		}
}


	if(!isset($_COOKIE[$nameMAJ])){
		echo("\non a pas ce cookie");
		setcookie($nameMAJ, '0'); //il faut trouver une solution pour retourner a setcookie(pb encodage  '=,; \t\r\n\013\014'  est interdit)
		
	}
	else{
		setcookie($nameMAJ, strval(intval($_COOKIE[$nameMAJ])+1));
		echo("Consulté : ");
		echo($_COOKIE[$nameMAJ]);
		echo(" fois");
		//print_r($_COOKIE);
	}
?>