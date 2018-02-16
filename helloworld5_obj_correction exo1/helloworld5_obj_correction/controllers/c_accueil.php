<?php
/*
 * DS PHP
 * Controller page accueil
 *
 * Copyright 2017, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

if (isset($_GET['nom']))
{
  $nom =  htmlspecialchars($_GET['nom']);
}

//traitement des problèmes de login
if(isset($_GET['message']))
{
  $message = htmlspecialchars($_GET['message']);
  $alert = choixAlert($message);
}
//appel de la vue
require_once(PATH_VIEWS.$page.'.php'); 

