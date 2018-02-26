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

<form action="index.php?page=accueil" method="post"> 
 <label>Quels films souhaitez-vous afficher ?  <select name="liste">
  <option value="Tous les genres" selected>Tous les genres</option>
  <?php foreach  ($ge as $val) { ?>
  <option value="<?=$val->getlibelle()?>" <?php if(isset($liste)) if($liste==$val->getlibelle()) echo "selected"; ?>><?php echo $val->getlibelle()?></option>
  <?php } ?>
</select>
<input type="submit" value="<?= SUBMIT ?>"></label>
</form> 


<h1><?php  echo $t;?></h1>

<?php
if($cpt==0)
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong>Il n'y a aucun film dans cette catégorie</strong>
	</div>
<?php
}
?>



<!--  Formulaire -->


<?php foreach($aid as $val)

{ ?><a href="index.php?page=hello&idi=<?=$val->getid()?>"/>
     <img
         src="<?= PATH_IMAGES.$val->getnomfichier()?>"
    alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]"
    height="300px" 
    width="200px" 
    /> 
	</a>
<?php 

} ?>


<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
