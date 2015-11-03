<?php
	if (isset($_SESSION['admin'])) {
 ?>

<nav class="navigation">
	<ul>
		<li><a href="index.php?a=toevoegen">Artikel toevoegen</a></li>
		<li><a href="index.php?a=beheer">Artikelen beheren</a></li>
	</ul>
</nav>
<hr>
<?php
}
 ?>
