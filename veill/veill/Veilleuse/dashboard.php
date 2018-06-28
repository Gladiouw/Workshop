<div style="display: flex; flex-direction: row; justify-content: space-around; background: linear-gradient(180deg, blue, lightblue); opacity: 0.89; position: sticky; top: 0; z-index: 1;">
  
  
  	<div style="margin-top: auto;margin-bottom:auto; padding-top: 30px; padding-bottom: 30px; ">

  		<a style=" color: white;cursor: pointer; font-size: 20px;" href="logout.php" >
        <?php
						echo $_SESSION['nom'] ." " . $_SESSION['prenom'];
					?></a>

  	</div>
  <div class="navbar" id="nini" >
    <a id="myBtn" style="color: white; cursor: pointer;">Ajout Enfant</a>

<!-- The Modal -->
        
</div>
<div id="myModal" class="modal" style="display: none;">

          <!-- Modal content -->
          <div class="modal-content">
            <?php
              include ('newBaby.php');
            ?>
          </div>

        </div>
</div></div>


  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");



// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

