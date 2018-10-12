<html>
<head><link rel="stylesheet" href="..\Styles\signUp.css">
<<<<<<< HEAD:Pages/signUp.php
<link rel="stylesheet" href="..\Styles\main.css"></head>
=======
<link rel="stylesheet" href="..\Styles\main.css">
>>>>>>> Sylvain's-Work:Pages/signUp.php

<header></header>

<body>
<div class="title">Sign up to <br/>e-Commerce-Website</div>
<div class="container">
  <form action="index.php" method="POST">
	<label for="usrname"><em>E-mail</em></label><br/>
    <input type="text" id="email" name="email" required>
		<br/>
    <label for="usrname"><em>Username</em></label><br/>
    <input type="text" id="usrname" name="usrname" required>
		<br/>
    <label for="psw"><em>Password</em></label><br/>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		<br/>
    <input type="submit" value="Submit">
  </form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</body>
</html>