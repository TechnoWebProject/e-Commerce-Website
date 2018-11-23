<?php

	if(!isset($_SESSION)){
		session_start();
	}
	
	if($_POST){
		if($_POST['username']){
			if($_POST['password']){
				//echo("\n on a log/pswd");
				setcookie('login',$_POST['username']);
				setcookie('password',$_POST['password']);
			}
		}
	}
	
	//setcookie('pseudo', 'M@teo21', time() + 3600, null, null, false, true);

?>