<?php

include("param/db.php");
$i=0;
$req = 'SELECT * FROM bebe JOIN bp ON bp.idB=bebe.id WHERE bp.idP ='.$_SESSION['uid'].'';
$execReq = $bdd->query($req);
while($res = $execReq->fetch())
{ $i++;

?>
	<div style="margin-top: 100px;display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between; width: 85%; margin: auto;">
		<div style="margin: 10px;width: 250px; height:250px; border-radius: 4px; opacity: 0.89; text-align: center; background: linear-gradient(90deg, lightblue, pink); padding:12.5px;word-wrap: break-word; overflow-wrap: break-word;overflow:hidden;">
			<?php
				echo "<b>".strtoupper($res->nom)." ".ucfirst($res->prenom)."</b> <br><br>Née le ".$res->bd ;
			?>
		</div>
		
		<div style="word-wrap: break-word; overflow-wrap: break-word;overflow:hidden;margin: 15px;width: 250px; height:250px; border-radius: 4px;  opacity: 0.89; text-align: center;background: linear-gradient(90deg, pink, lightblue); padding:12.5px;">
			
			<?php

			$reqB = 'SELECT * FROM event JOIN bebe ON bebe.id=event.idB WHERE bebe.id ='.$res->id;
			if($recupe = $bdd->query($reqB))
			{
				if ( $e = $recupe->fetch()) 
				{	
					$eId = $e->id;
					$eDate= $e->date;

					echo "<b>".$eDate."<br><br></b>est le temps pendant le quel le petit mioche de merde à chialer! lllllllllllkgxlgjgywdthnbêqut^qburtgv^quollllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll";
				}
				else
				{ 
					
					echo "Votre enfant est doux comme un agneau";
				}
			}	
			
			?>
		</div>
	</div>

	<?php
}
	if($i==0)
	{
		include ('newBaby.php');
	}
  
?>