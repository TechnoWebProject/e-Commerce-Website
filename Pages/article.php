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
	
	$results = $mysqli->query("SELECT * FROM articles");
	
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
		echo $row['price']
		?>
		€
		
		<form>
		<label>Quantity :</label>
		<SELECT name="quantity" size="1">
		<OPTION>1
		<OPTION>2
		<OPTION>3
		<OPTION>4
		</SELECT>
		</form>
	</b>
	</b>
	</b>
	
	<?php
	}
	
	?>
	
</div>