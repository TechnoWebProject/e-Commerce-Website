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
		
		<form>
		<label>Quantity :</label>
		<input type="int" name="Quantity" size="1" maxlength ="3" value="">
		</form>
	</b>
	</b>
	</b>
	
	<?php
	}
	
	?>
	
</div>