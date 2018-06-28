<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=veilleuse', "root", "");
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	}
	
	catch(PDOException $e)
	{
		echo "<img src='https://d1buo5hgs7m928.cloudfront.net/assets/skateone/productimage/size/1050x1050/method/strict/v/b928/SSPPRIPR-A1.jpg'>";
		die();
	}		
?>