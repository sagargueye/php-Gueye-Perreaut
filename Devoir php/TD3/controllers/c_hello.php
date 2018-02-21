<?php

require_once(PATH_MODELS.'filmDAO.php');
require_once(PATH_MODELS.'genreDAO.php');

$idi=htmlspecialchars($_GET['idi']);
$fDAO=new filmDAO();

$i=1;
$gd=0;

do
{ 
	$f=$fDAO->getid($i);
    if($f!=null)
    {
        if($f->getid()==$idi)
        {
            $gd=1;
        }
	$i=$i+1;
    }
}
while($f!=null);

if($gd==1)
{
$f=$fDAO->getid($idi);
$image=$f->getnomfichier();
$resu=$f->getresume();
$titre=$f->gettitre();

$gDAO=new genreDAO();
$g=$gDAO->getid($f->getgenid());
$genre=$g->getlibelle();
}
else
{
    $page="404";
}




require_once(PATH_VIEWS.$page.'.php'); 

