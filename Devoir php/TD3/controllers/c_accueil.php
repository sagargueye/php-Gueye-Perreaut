<?php

require_once(PATH_MODELS.'filmDAO.php');
require_once(PATH_MODELS.'genreDAO.php');

$ge=array(); //tableau qui contient la liste de tous les genres de la table genre
$aid= array(); // tableau qui contient la liste des films en fonction du genre sélectionné dans la combobox
$cpt=0;  // compte les film affiché sur la page accueil



$gDAO=new genreDAO();


$i=1;
//boucle permettant de récupérer les informations de la table genre (table de la base de donnée) dans la table ge
do
{
	$g=$gDAO->getid($i);
	if($g!=null)
	{
	$ge[]=$g;
	$i=$i+1;
	}
}
while(($g!=null));


if(isset($_GET['genre'])) //permet de faire la redirection lorsque l'utilisateur clique sur le genre d'un film
{

	$genre= htmlspecialchars($_GET['genre']);
	$fDAO = new filmDAO();
	$liste=$genre;
	
    $i=0; // contient l'id à récupérer
    // boucle permmetant de connaitre l'Id du genre
        do
        {
            $i=$i+1; // contient l'id à récupérer
            $g=$gDAO->getid($i);
        }
        while(($g!=null)&&($g->getlibelle()!=$liste));
        
		
        $j=0;
        
     // boucle permmettant de stocker dans la table aid tous les films qui possèdent l'Id récupéré dans la boucle au dessus
        do
        {
         $j=$j+1;
         $f=$fDAO->getid($j);
		 if($f!=null)
		 {
			if($f->getgenid()==$i)
			{
             $aid[]=$f;
             $cpt=$cpt+1;
			}
		 }
        }
        while($f!=null);
		
		$t="Les films du genre $liste"; // variable pour afficher le titre de la page


		
}
else
{
	
if(isset($_POST['liste'])) // Récupère la valeur choisit dans la combobox
{
	$liste= htmlspecialchars($_POST['liste']);
	$fDAO = new filmDAO();
	
	
    if($liste!="Tous les genres")
	{		
        $i=0; // contient l'id à récupérer
        
        // boucle permmetant de connaitre l'Id du genre séléctionné dans la combobox
        do
        {
            $i=$i+1; // contient l'id à récupérer
            $g=$gDAO->getid($i);
        }
        while(($g!=null)&&($g->getlibelle()!=$liste));
        
		
        $j=0;
        
     // boucle permmettant de stocker dans la table aid tous les films qui possèdent l'id ($i) récupéré dans la boucle au dessus
        do
        {
         $j=$j+1;
         $f=$fDAO->getid($j);
		 if($f!=null)
		 {
			if($f->getgenid()==$i)
			{
                        $aid[]=$f;
                        $cpt=$cpt+1; // compteur de film
			}
		 }
        }
        while($f!=null);
		
		$t="Les films du genre $liste"; // variable pour afficher le titre de la page
	}
	else
	{
	$t="Tous les genres";
	
	
	$fDAO = new filmDAO();
	$i=1;
        
        // boucle permmettant de stocker dans la table aid tous les films 
	do
	{
		$f=$fDAO->getid($i);
		if($f!=null)
		{
			$aid[]=$f;
			$i=$i+1;
			$cpt=$cpt+1; // compteur de film
		}
	}
	while($f!=null);
	}
}
else
{

	$t="Tous les genres";

	$fDAO = new filmDAO();
	$i=1;
        // boucle permmettant de stocker dans la table aid tous les films 
	do
	{
		$f=$fDAO->getid($i);
		if($f!=null)
		{
			$aid[]=$f;
			$i=$i+1;
			$cpt=$cpt+1; // compteur de film
		}
	}
	while($f!=null);

	
}

}


require_once(PATH_VIEWS.$page.'.php'); 




	
 





