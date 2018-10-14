<div class="article">
		
		
	<?php
	$user ='root';
	$pass = '';
	$db = 'dump';
	
	$mysqli = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
	
	if($mysqli->connect_error){
		die('Error');
	}
	//else{echo "connected";}
	?>
	</br>
	
	<?php
	
	$results = $mysqli->query("SELECT * FROM products");
	
	while($row=$results->fetch_assoc())
	{
		echo "<img src='".$row['image']."'/>";
		//print $row['username'];
		?>
		</br>
		<?php
		echo $row['name'];?>
		</br>
		<?php
		echo $row['unit_price'];
		?>
		€
		</br>
		
		<form method="POST" action="confirmation_cart.php">
		<label>Quantity :</label>
		<input type="int" name="Quantity" size="1" maxlength ="3" value="">
		<input type="hidden" name = "ID" value = "<?php echo $row['id'] ?>">
		<input type="hidden" name = "Unit_price" value = "<?php echo $row['unit_price'] ?>">
		<input type="submit" value ="Add to cart" name = "Add to cart">
		</form>
		
	</br>
	</br>
	
	<?php
	}
	
	?>
	
</div>