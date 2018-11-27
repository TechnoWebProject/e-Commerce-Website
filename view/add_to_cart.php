<?php 

$i=0;
$index_colonne=0;
$size=sizeof($array_image);

for($i=0; $i<$size;$i++)
{	
	?>
	<a href=<?php echo("index.php?page=presentation&name=". $array_name[$i]);?>>
	<?php
	echo ("<img src='".$array_image[$i]."'/>");
	?>
	<ul><?php echo $array_name[$i]; ?>
		<li><?php echo $array_description[$i]; ?></li>
	</ul>
	</a>
	<form method="POST" action="<?php $_PHP_SELF ?>" id="quantity">
		<label>Quantity :</label>
		<input type="int" name="Quantity" size="1" maxlength ="3" value="<?php echo $array_quantity[$i]; ?>">
		<input type="hidden" name = "ID" value = "<?php echo $array_id[$i] ?>">
		<input type="hidden" name = "Unit_price" value = "<?php echo $array_price[$i] ?>">
		<input type="submit" value ="Add to cart" name = "Add to cart">
	</form>
	<label>Price : </label>
			<?php echo ($array_price[$i]*$array_quantity[$i]), ' €'; ?>
		<form method="POST" action="<?php $_PHP_SELF ?>" id="delete">
			<input type ="hidden" name ="Quantity" value ="0">
			<input type="hidden" name = "ID" value = "<?php echo $array_id[$i] ?>">
			<input type="submit" value ="Delete Article" name = "Delete Article" style="background-color: red;">
		</form>
<?php
}
?>