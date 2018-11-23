<?php  

if((isset($_POST['submit'])&&(!(isset($_POST['check']))&&(!(isset($_POST['billing-address'])) || trim($_POST['billing-address'])=='') ))){
		//header('location: ');
}
elseif(isset($_POST['submit'])){

	$reponse = $bdd->prepare('SELECT username FROM users');
	$reponse->execute();
	$correctusrname=TRUE;
	while($donnees=$reponse->fetch()){
		var_dump($donnees['username']);
		var_dump($_POST['username']);
		if($donnees['username']==$_POST['username']){
			$correctusrname=FALSE;
		}
	}
	if($correctusrname==TRUE){		$req1 = $bdd->prepare('INSERT INTO user_addresses(human_name, address_one, postal_code, city, country) VALUES(:name, :address, :postal, :city, :country)');
		$req1->execute(array('name' => $_POST['complete-name'], 'address' => $_POST['del-address'], 'postal' => $_POST['postal'],'city' => $_POST['city'], 'country' => $_POST['country']));
		$stmt = $bdd->query("SELECT LAST_INSERT_ID()");
		$lastId = $stmt->fetchColumn();
		
		if(!isset($_POST['check'])){
			echo('bite');
			$req2 = $bdd->prepare('INSERT INTO user_addresses(human_name, address_one, postal_code, city, country) VALUES(:name, :address, :postal, :city, :country)');
			$req2->execute(array('name' => $_POST['complete-name'], 'address' => $_POST['billing-address'], 'postal' => $_POST['postal'],'city' => $_POST['city'], 'country' => $_POST['country']));
			$req3 = $bdd->prepare('INSERT INTO users(username, email, password, billing_adress_id,delivery_adress_id) VALUES(:username, :email, :password, :billing_adress_id, :delivery_adress_id)');

			$req3->execute(array('username' => $_POST['username'],'email' => $_POST['e-mail'],'password' => $_POST['password'],'billing_adress_id' => $lastId+1 ,'delivery_adress_id' => $lastId));
		}
		else{
			$req3 = $bdd->prepare('INSERT INTO users(username, email, password, billing_adress_id,delivery_adress_id) VALUES(:username, :email, :password, :billing_adress_id, :delivery_adress_id)');
			$req3->execute(array('username' => $_POST['username'],'email' => $_POST['e-mail'],'password' => $_POST['password'],'billing_adress_id' => $lastId,'delivery_adress_id' => $lastId));						
		}
		#header('location: ');
	}
	else{
		#header('location: ');
	}
}					

?>