<?php
	
	$i=0;
	$index_colonne=0;

	$size=sizeof($array_image);

	for($i=0; $i<$size;$i++)
	{	
		$index_colonne++;
		if($index_colonne==1){?>
			<TR> <?php
		}
		?>
		<TD>

		<a href=<?php echo("index.php?page=presentation&name=". $array_name[$i]);?>>
		<?php
		echo ("<img src='".$array_image[$i]."'/>");

		?>
		<ul><?php echo $array_name[$i]; ?>
			<li><?php echo $array_description[$i]; ?></li>
		</ul>
		</a>
		<?php 
		echo $array_price[$i], ' €';
		?>
		<form method="POST" action="<index.php?page=add_to_cart>" id="quantity">
		<label>Quantity :</label>

		<input type="int" name="Quantity" size="1" maxlength ="3" value="">
		<input type="hidden" name = "ID" value = "<?php echo $array_id[$i] ?>">
		<input type="hidden" name = "Unit_price" value = "<?php echo $array_price[$i] ?>">
		<input type="submit" value ="Add to cart" name = "Add to cart">
		</form>
		</TD>
		<?php
		if($index_colonne==3){
			?> </TR> <?php
			$index_colonne=0;
		}
	}
?>
