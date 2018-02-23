<?php
/*
 * TP PHP
 * Vue page 404
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong>Identifiant de film incorrect dans l'URL</strong>
</div>

<?php require_once(PATH_VIEWS.'footer.php'); 
