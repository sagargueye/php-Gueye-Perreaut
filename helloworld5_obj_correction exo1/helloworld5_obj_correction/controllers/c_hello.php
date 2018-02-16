<?php

// Contrôle - Neutralisation du paramètre reçu 
if (isset($_POST['nom']))
{
  $nom =  htmlspecialchars($_POST['nom']);

  //Appel du modèle
  require_once(PATH_MODELS.'UtilisateurDAO.php');
  $userDAO = new UtilisateurDAO();
  $user = $userDAO->getUser($nom);
  if(is_null($user))
  {
	 if(!is_null($userDAO->getErreur()))
	 {
	   $erreur = 'query';
	   if(DEBUG) 
		die($userDAO->getErreur());
	 }
	 else
	   $erreur = 'login';
    }

  //Redirection ou appel de la vue
  if(isset($erreur)) // affichage des erreurs de login
  {
     header('Location: index.php?nom='.$nom.'&message='.$erreur);
     exit();
  }
  else
  {                  // affichage des hellos
    require_once(PATH_VIEWS.$page.'.php');     
  }
}
else
{
     header('Location: index.php');
}



