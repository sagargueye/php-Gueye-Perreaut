<?php

require_once(PATH_MODELS.'filmDAO.php');
require_once(PATH_MODELS.'genreDAO.php');

$idi=htmlspecialchars($_GET['idi']);
$fDAO=new filmDAO();
$f=$fDAO->getid($idi);
$image=$f->getnomfichier();
$resu=$f->getresume();
$titre=$f->gettitre();

$gDAO=new genreDAO();
$g=$gDAO->getid($f->getgenid());
$genre=$g->getlibelle();




require_once(PATH_VIEWS.$page.'.php'); 

