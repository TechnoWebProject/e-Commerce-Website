 

<header>
<p class="title"><a href="index.php?page=main">e-Commerce-Website</a></p>



<nav>

	<ul class="main_menu">
	
		<li class="search">
			<form method="GET" action="index.php">
				<input type="text" name="search" placeholder="Search on Website">
				<input type="hidden" name="page" value="researchedProduct">
			</form>
		</li>
		
		
		<li class="menu"><a href="index.php?page=products_2">Product menu</a></li>
		
		
		<li class="menu"><a href="index.php?page=cart">Your cart</a></li>
		
		
		<li class="menu"><a href="#">Account</a><ul>
			
			<li class="submenu">
			Sign in.
			<br/>
			<form method="POST" action="index.php" target="_blank">
				
				<label><em>Username : </em></label>
				<input type="text" name="username" placeholder="ex : FrstnameLstname">
					<br/>
				<label><em>Password : </em></label>
				<input type="password" name="password">
					<br/>
				<input type="submit" value="LOGIN">
				<input type="hidden" name="page" value="main">
			</form>
			
			<form>
				<input type="submit" value="LOGOUT">
			</form>
			
			<br/>
			Or create an account.
			<form action="index.php">
				<input type="submit" value="SIGN UP">
				<input type="hidden" name="page" value="signUp">
			</form>
			</li>
			
		</ul></li>
	</ul>

</nav>
</header>
