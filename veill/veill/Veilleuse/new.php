<?php
	include ('param/func.php');
	include ('param/db.php');
	if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pwd'], $_POST['tel'], $_POST['confirmPwd'])) 
	{

		//Récuperer les données dans des variables
		/*
			ex: $login = addslashes($_POST['login']);
		*/
		
		$nom = addslashes($_POST['nom']);
		$prenom = addslashes($_POST['prenom']);
		$num = $_POST['tel'];
		$tel = (int)$num;
		$email = addslashes($_POST['email']);
		$pwd = md5($_POST['pwd']);
		$confirmPwd = md5($_POST['confirmPwd']);
	
		//Verifier que le mot de passe est le meme

		if ($pwd == $confirmPwd) 
		{

		//Préparer la requete pour inserer dans bdd

			$req = 'INSERT INTO parent (nom, prenom, email, pwd, tel) VALUES ("'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$pwd.'", '.$tel.')'; 

		//executer la requete

			if ($insertUsr = $bdd->query($req)) 
			{ // ADD UNIQUE dans la BDD pour qu on ne s inscrive pas deux fois 
				

	?>	
		<script>
			document.location.href="index.php";
		</script>
	<?php	 
				//echo "UTILISATEUR AJOUTER AVEC ID : ".$bdd->lastInsertId();		
			}

			else
			{
				echo "<script>alert(\"Veuillez Reesayez\")</script>"; 
			}
		
		}
	
		else
		{
			?>
				<script>
					alert("Wrong Password");
				</script>
			<?php
		}
	}
	else{
	}

?>
