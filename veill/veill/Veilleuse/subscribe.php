<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" />
	
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>	
</head>

<body>

    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
			<form action="new.php" method="POST">
				<input name="nom" 		type="text" 	placeholder=" nom" 				class="form-control" required>
				<input name="prenom" 	type="text" 	placeholder=" prenom" 			class="form-control" required>
				<input name="tel" 		type="text" 	placeholder="+851 85 78 85 85"  class="form-control" min="8" max="10" required>
				<input name="email" 		type="text" 	placeholder=" email" 		class="form-control"	required>
				<input name="pwd" 			type="password" placeholder="mot de passe" 		class="form-control"	required>
				<input name="confirmPwd" 	type="password" placeholder=" Confirmer mot de passe"  class="form-control" required>

				<button class="btn btn-lg btn-primary btn-block btn-signin"  type="submit">Inscription</button>
			</form>
			<a href="index.php">Me connecter</a><br>
	</div>
</div>


</body>
</html>