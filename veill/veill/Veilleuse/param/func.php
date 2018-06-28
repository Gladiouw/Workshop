<?php
	include("param/db.php");

	/*setPassword("qwertyuiop", 1);
	*/
	function		setPassword($pass, $idUser)
	{
		$salt1 = createSalt();
		$salt2 = createSalt();
		
		$req = 'INSERT INTO salts(idUser, salt1, salt2) VALUES('.$idUser.',"'.$salt1.'", "'.$salt2.'")';
		/*echo($req) ;*/
		
		$passForDb =  md5($salt1 . $pass . $salt2);
	/*	echo "</br>" . $passForDb. "<br> la recuperation de la requete inconnue.. Hihihhi!";*/
		return $passForDb;
	}
	
	function		verifPassword($bdd, $pass, $idUser)
	{
		
		$getSalt = $bdd->query('SELECT * FROM salts WHERE idUser = '.$idUser);
		$salt = $getSalt->fetch();
		$salt1 = $salt->salt1;
		$salt2 = $salt->salt2;
		
		$getUser = $bdd->query('SELECT pwd FROM parent WHERE id = '.$idUser);
		$usr = $getUser->fetch();
		if (md5($salt1 . $pass . $salt2) == $usr->pwd)
			return true;
		else
			return false;
	}
	
	function		createSalt()
	{
		$newSalt = "";
       
        $chars = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ0123456789+@!?<>.[]{}$%?&";
        $lChars = strlen($chars);
       
        for($i = 1; $i <= 12; $i++)
        {
            $nbAleat = mt_rand(0,($lChars-1));
            $newSalt .= $chars[$nbAleat];
        }

        return $newSalt; 
	}
?>