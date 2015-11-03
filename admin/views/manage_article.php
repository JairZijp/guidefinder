<?php
	if (isset($_SESSION['admin'])) {
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">

			<form name="form1" method="POST" action="">
				<table class="tftable" border="1">
					<tr>
						<th>Naam</th>
						<th>Datum van afloop</th>
						<th>Template Keuze</th>
						<th>Selecteer voor verwijderen</th>
					</tr>
			<?php

			$result = $mysqli->query("SELECT * FROM article");
			while ($artikelen = $result->fetch_assoc()) {
				$user_id = $artikelen['ID'];
				echo '<tr>
						<td>' . $artikelen['title'] . '</td>
						<td>' . $artikelen['date_expired'] .  '</td>
						<td>' . $artikelen['template_nr'] . '</td>'; // output van artikelen in tabel
			?>
						<td>
							<input name="checkbox" type="checkbox" id="checkbox" value="<?php echo $artikelen['ID']; ?>">
							<!-- checkbox voor verwijderen -->
						</td>
					<?php } ?>
					</tr>
				</table>
					 <input class="btn" type="submit" name="delete" value="Delete" id="delete">
					<!-- Submit button -->


		</div>
	</div>
</div>

<?php
}
 ?>
