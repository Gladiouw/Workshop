<?php
session_start();
	include ('param/func.php');
	include ('param/db.php');
	$idU = $_SESSION['uid'];
	if (isset($_POST['nom'], $_POST['prenom'], $_POST['bd'])) 
	{

		//Récuperer les données dans des variables
		/*
			ex: $login = addslashes($_POST['login']);
		*/
		$Bnom = addslashes($_POST['nom']);
		$Bprenom = addslashes($_POST['prenom']);
		$Bdate = $_POST['bd'];
		//Verifier que le mot de passe est le meme

		
		//Préparer la requete pour inserer dans bdd
		$req = 'INSERT INTO bebe (idP, nom, prenom, bd) VALUES ('.$idU.',"'.$Bnom.'", "'.$Bprenom.'", '.$Bdate.')';  
		//executer la requete

			if ($insertBB=$bdd->query($req)) 
			{ // ADD UNIQUE dans la BDD pour qu on ne s inscrive pas deux fois 
				
				$reqbp = 'INSERT INTO bp (idP, idB) VALUES ('.$idU.','.$bdd->lastInsertId() .')';
				$insertrelation=$bdd->query($reqbp);
				?>
					<script>
						document.location.href='index.php';
					</script>
				<?php
										
			}

				//echo "<script>alert(\"Bienvenue".$Bnom.$Bprenom."\")</script>";
				//echo "UTILISATEUR AJOUTER AVEC ID : ".$bdd->lastInsertId();		
			else
			{
				echo "<script>alert(\"Veuillez Reesayez\")</script>"; 
			}
	}
	else{
	}

?>
