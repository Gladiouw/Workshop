<?php
	include("param/db.php");
	include("param/func.php");

	session_start();

	if (isset($_POST["email"]) && isset($_POST["pwd"])) 
	{
		$email = addslashes($_POST['email']);  //prend en param string et return string
		$passwd = md5($_POST['pwd']);

		$reqUsr = 'SELECT * FROM parent WHERE email LIKE "'.$email.'"';
/*echo "$reqUsr"  pour voir l erreur dans la syntaxe*/

		if($recupUsr = $bdd->query($reqUsr))
		{
			if ( $usr = $recupUsr->fetch()) 
			{	
			    if($usr->pwd == $passwd)
			    {
			    	/*echo "<img src='http://blog.thefernsacademy.org/wp-content/uploads/2017/09/Welcome-02-web-version.jpg'>";*/
			    	$_SESSION['email'] = $usr->email;
			    	$_SESSION['uid'] = $usr->id;
			    	$_SESSION['nom']= $usr->nom;
			    	$_SESSION['prenom']= $usr->prenom;
			    	/*echo "Welcome ".$login;   VERIFICATION*/
			    	?>
			    		<script>
							document.location.href="index.php";	
						</script>
			    	<?php	    	

			    }

			    else
			    {
			    	echo"<img src='https://i1.wp.com/escondidograpevine.com/wp-content/uploads/2017/03/Wrong-landscape.jpg?resize=777%2C437&ssl=1'>";
			    	echo "<h2 style='background-color: red; color: white; margin-left: 35%; width: 30%; text-align: center;'>fake pwd</h2>";
			    }
			}
			else{
				?>	
					<a href='index.php'>
						<img id="nofound" src="https://cdn-images-1.medium.com/max/1600/1*jfgr2qQ3d8JCXpQHLnIQPg.png">
					</a>
				<?php
			}
		}

		else
		{
			echo "Utilisateur inconnu";
		}
/*			POUR LA VERIFICATION

		echo 'SELECT * FROM users WHERE login LIKE "'.$login.'"';

		echo "<br><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHa7_rcwOG9pWHskxJaAdcNVd0sk_1GmDFyEACepoZMo2PeqEF'>";
		echo '<br>Veuillez saisir des identifiants <a href="index.php">ici</a>';
*/


/*		$passwd = md5($_POST['passwd'."toto"]);   on concataine avec un texte pour ajouter de la complexité
		$pwdSecure = SHA512($salt1 . md5($_POST['passwd'] . $salt2));
*/
	}
	
	else{
	?>	
		<script>
			document.location.href="index.php";
		</script>
	<?php	
	}

?>
<style type="text/css">
	#nofound
	{
		width: 100%; height:97.5vh; margin: 0;
	}
</style> 



