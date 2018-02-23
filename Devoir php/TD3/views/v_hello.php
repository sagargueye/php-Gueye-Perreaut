<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
?>

<!--  En tête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>


<!--  Début de la page -->
<h1>Les détails du film</h1>

<!--  Liste  -->
	 <div class = "col-md-6 col-sm-6 col-xs-12"> 
	<img
         src="<?= PATH_IMAGES.$image?>"
    alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]"
    height="800px" 
    width="500px" 
    />
	</div>
	<div class = "col-md-6 col-sm-6 col-xs-12"> 
	<table class="table table-bordered"  > 
	    <tr>
			<td>Titre</td>
			<td><?=$titre?></td>
		</tr>
		<tr>
			<td>Résumé</td>
			<td><?=$resu?></td>
		</tr>
		<tr>
			<td>Nom du fichier</td>
			<td><?=$image?></td>
		</tr>
		<tr>
			<td>Genre</td>
			<td><a href="javascript:history.go(-1)"><?=$genre?></a></td>
		</tr>
	</table>
	</div>
<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
