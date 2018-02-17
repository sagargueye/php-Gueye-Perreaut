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

$a = array();
$cpt=0;

if(isset($_POST['liste']))
{
	$liste= htmlspecialchars($_POST['liste']);
	$fDAO = new filmDAO();
	
	if($liste=="Tous_les_genres")
	{
		$t="Tous les genres";
		$i=1;
		do
		{
		$f=$fDAO->getid($i);
		if($f!=null)
		{
			$a[]=$f->getnomfichier();
			$i=$i+1;
			$cpt=$cpt+1;
		}
	}
	while($f!=null);
	
	}
	
	if($liste=="Science_Fiction")
	{
		$t="Les films du genre Science Fiction";
		$i=1;
		do
		{
			$f=$fDAO->getid($i);
			
			if($f!=null)
			{
				if($f->getgenid()==1)
				{
					$a[]=$f->getnomfichier();
					$cpt=$cpt+1;
				}
				$i=$i+1;
				
			}
		}
		while($f!=null);
	}

	if($liste=="Comedie")
	{
		$t="Les films du genre Comédie";
		$i=1;
		do
		{
			$f=$fDAO->getid($i);
			
			if($f!=null)
			{
				if($f->getgenid()==11)
				{
					$a[]=$f->getnomfichier();
					$cpt=$cpt+1;
				}
				$i=$i+1;
				
			}
		}
		while($f!=null);
	}
	
	if($liste=="Film_musical")
	{
		$t="Les films du genre Musical";
		$i=1;
		do
		{
			$f=$fDAO->getid($i);
			
			if($f!=null)
			{
				if($f->getgenid()==30)
				{
					$a[]=$f->getnomfichier();
					$cpt=$cpt+1;
				}
				$i=$i+1;
				
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
			$a[]=$f->getnomfichier();
			$i=$i+1;
			$cpt=$cpt+1;
		}
	}
	while($f!=null);

	
}




require_once(PATH_VIEWS.$page.'.php'); 




	
 





