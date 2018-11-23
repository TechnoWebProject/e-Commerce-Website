

<header>
<p class="title"><a href="index.php">e-Commerce-Website</a></p>



<nav>

	<ul class="main_menu">
	
		<li class="search">
			<form method="GET" action="researchedProduct.php">
				<input type="text" name="search" placeholder="Search on Website">
			</form>
		</li>
		
		
		<li class="menu"><a href="products.php">Product menu</a></li>
		
		
		<li class="menu"><a href="cart.php">Your cart</a></li>
		
		
		<li class="menu"><a href="#">Account</a><ul>
			
			<li class="submenu">
			Sign in.
			<br/>
			<form method="POST" action="main.php" target="_blank">
				
				<label><em>Username : </em></label>
				<input type="text" name="username" placeholder="ex : FrstnameLstname">
					<br/>
				<label><em>Password : </em></label>
				<input type="password" name="password">
					<br/>
				<input type="submit" value="LOGIN">
			
			</form>
			
			<form>
				<input type="submit" value="LOGOUT">
			</form>
			
			<br/>
			Or create an account.
			<form action="signUp.php">
				<input type="submit" value="SIGN UP">
			</form>
			</li>
			
		
		</ul></li>
	</ul>

</nav>
</header>
