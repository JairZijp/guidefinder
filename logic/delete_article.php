<?php
	$count=mysqli_num_rows($result); // tel de rows in de datbase
	echo '<div class="container"><br>Totale artikelen: ' .  $count;
				
		if(isset($_POST['delete'])) {
			$delete_id = $_POST['checkbox'];
			$id = count($delete_id );
			       
			if (count($id) > 0) {
			    $delete = $mysqli->query("DELETE FROM article WHERE id='$delete_id'"); // als 1 is selecteert verwijder dan degene met die id
			}
			if($delete) {
				echo "<br>Als u op de op delete heeft gedrukt graag even refreshen van de pagina"; // output check
				header('Location: index.php?a=beheer');
	        }
		}
?>