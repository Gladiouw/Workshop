<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
		<title>DorMioche</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" />
		
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="script/script.js"></script>
		<script src="script/jq.js"></script>

			
	</head>
	<body>
		<?php
			session_start();

			/*include ("login.php");*/

			if (isset($_SESSION['email']) && isset($_SESSION['uid'])) // VERIFIE SI SESSION login et uid EXISTENT
			{
			
				include ('dashboard.php');
				include ('kid.php');
				include ('footer.php');
				/*echo "tu es connecté  " .$_SESSION['nom'] . " " . $_SESSION['prenom'] . "<br><a href='home.php'>Page Home</a>
				<a href='logout.php'>Me déconnecter</a>";*/					
			}
			else
			{
				include("formLogin.php");
			}

		?>		
		<!-- LOGIN -->
		<!-- END LOGIN -->
	</body>
</html>