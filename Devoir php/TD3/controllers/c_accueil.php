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
require_once(PATH_MODELS.'filmDAO.php');
require_once(PATH_MODELS.'genreDAO.php');

$ge=array();
$aid= array();
$cpt=0;

$gDAO=new genreDAO();

$i=1;
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

if(isset($_POST['liste']))
{
	$liste= htmlspecialchars($_POST['liste']);
	$fDAO = new filmDAO();
	
	
    if($liste!="Tous les genres")
	{		
        $i=0;
        do
        {
            $i=$i+1;
            $g=$gDAO->getid($i);
        }
        while(($g!=null)&&($g->getlibelle()!=$liste));
        
        $j=0;
        
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
		
		$t="Les films du genre $liste";
	}
	else
	{
	$t="Tous les genres";

	$fDAO = new filmDAO();
	$i=1;

	do
	{
		$f=$fDAO->getid($i);
		if($f!=null)
		{
			$aid[]=$f;
			$i=$i+1;
			$cpt=$cpt+1;
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

	do
	{
		$f=$fDAO->getid($i);
		if($f!=null)
		{
			$aid[]=$f;
			$i=$i+1;
			$cpt=$cpt+1;
		}
	}
	while($f!=null);

	
}


require_once(PATH_VIEWS.$page.'.php'); 




	
 





