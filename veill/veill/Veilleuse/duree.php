<?php
	$reqB = 'SELECT * FROM event JOIN bebe ON bebe.id=event.idB WHERE bebe.id ='.$res->id;
	if($recupe = $bdd->query($reqB))
	{
		if ( $e = $recupe->fetch()) 
		{	
			$eId = $e->id;
			$eDate= $e->date;
		}
		else
		{ 
			
		}
	}	
	else{ echo "yoooooooooooooooooo";
	}  
	?>