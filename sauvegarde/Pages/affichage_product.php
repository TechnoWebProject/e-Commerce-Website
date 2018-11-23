<?php 

if ($var == 'cart'){
	$request="SELECT *
	FROM products, order_products
	WHERE products.id = order_products.id ";
}
		
if ($var == 'article'){
	$request = "SELECT * FROM products";
}

if($var == 'research'){
	$request="SELECT name, UPPER(name), image, unit_price, id, description
	FROM products";
}
		
$reponse = $bdd->query($request);
while ($donnees = $reponse->fetch())
{
	if ($var == 'article' or $var == 'cart'){
		if ($var == 'article'){
			$i++;
			if($i==1){?>
			<TR> <?php
			}
		?>
		<TD>
		<?php 
		}
		$link = "http://localhost/e-Commerce-Website/Pages/researchedProduct.php?search=" . $donnees['name'];
		?>
		<a href="<?php echo($link); ?>">
		<?php
		echo "<img src='".$donnees['image']."'/>";
		?>
		<ul><?php echo $donnees['name']; ?>
			<li><?php echo $donnees['description']; ?></li>
		</ul>
		</a>
		

		<?php 
		if ($var == 'article'){
			echo $donnees['unit_price'], ' €';
		}

		?>

		<form method="POST" action="confirmation_cart.php" id="quantity">
		<label>Quantity :</label>
		<?php
		if ($var == 'cart'){
		?>
		<input type="int" name="Quantity" size="1" maxlength ="3" value="<?php echo $donnees['quantity']; ?>">
		<?php
		}
		?>
		<?php
		if ($var == 'article'){
		?>
		<input type="int" name="Quantity" size="1" maxlength ="3" value="">
		<?php
		}
		?>
	
		<input type="hidden" name = "ID" value = "<?php echo $donnees['id'] ?>">
		<input type="hidden" name = "Unit_price" value = "<?php echo $donnees['unit_price'] ?>">
		<input type="submit" value ="Add to cart" name = "Add to cart">
		</form>
		<p>
		<?php

		if($var =='article'){
			?>
			</TD>
			<?php
			if($i==3){
				?> </TR> <?php
				$i=0;
			}
		}

		if ($var == 'cart'){

		?>
			<label>Price : </label>
			<?php echo ($donnees['unit_price']*$donnees['quantity']), ' €'; ?>
			</p>
			<form method="POST" action="confirmation_delete.php" id="delete">
			<input type="hidden" name = "ID" value = "<?php echo $donnees['id'] ?>">
			<input type="submit" value ="Delete Article" name = "Delete Article" style="background-color: red;">
			</form>
		<?php
		}
	}
	if ($var == 'research'){
		if ($donnees['UPPER(name)'] == $researchMAJ){
		?><TABLE align="center">
		<TH>
		<?php
		echo "<img src='".$donnees['image']."'/>";
		?>
		</TH>
		</br>
		<TD>
		<div class="name">
		<?php
		echo $donnees['name'];?>
		</div>
		<div class="description">
		<?php echo $donnees['description'];?>
		</div>
		</br>
		<?php
		echo $donnees['unit_price'];
		?>
		€
		
		<form method="POST" action="confirmation_cart.php" id="quantity">
		<label></label>
		<input type="int" name="Quantity" size="1" maxlength ="3" value="">
		<input type="hidden" name = "ID" value = "<?php echo $donnees['id'] ?>">
		<input type="hidden" name = "Unit_price" value = "<?php echo $donnees['unit_price'] ?>">
		<input type="submit" value ="Add to cart" name = "Add to cart">
		</form></TD>
		<?php
		}
	}
}
	
$reponse->closeCursor();

?>