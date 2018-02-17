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
<div><?php echo $cpt?> : film sélectionné(s)</div>

<form action="index.php?page=accueil" method="post"> 
 <select name="liste">
  <option value="Tous_les_genres">Tous les genres</option>
  <option value="Science_Fiction">Science Fiction</option>
  <option  value="Comedie">Comédie</option>
  <option  value="Film_musical">Film musical</option>
</select>
<input type="submit" value="<?= SUBMIT ?>">
</form> 

<h1><?php  echo $t;?></h1>

<!--  Formulaire -->


<?php foreach($a as $val)
{ ?><a href="index.php?page=hello&image=<?=$val?>"/>
     <img
         src="<?= PATH_IMAGES.$val?>"
    alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]"
    height="200px" 
    width="200px" 
    /> 
	</a>
<?php 

} ?>


<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
