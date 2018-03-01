<?php

// Message d'alerte permettant de d'afficher le nombre de film sélectionné
if(isset($cpt))
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'success' ?>">
		<strong><?=$cpt?> film(s) sélectionné(s)</strong>
	</div>
<?php
}

// Message d'alerte permettant de d'afficher le nombre de film sélectionné
if($page==404)
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong>Identifiant de film incorrect dans l'URL</strong>
	</div>
<?php
}



