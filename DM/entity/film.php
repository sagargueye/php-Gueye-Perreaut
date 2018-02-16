<?php

class film
{
  private $_id;

  private $_titre;

  private $_resume;
  
  private $_nomfichier;
  
  private $_genid;

  public function __construct($id, $titre, $resume,$nomfichier,$genid)
  {
    $this->_id = $id;
    $this->_titre = $titre;
    $this->_resumme = $resume;
    $this->_nomfichier=$nomfichier;
    $this->genid=$genid;

  }
  
  public function getid() {
    return $this->_id;
  } 

  public function gettitre() {
    return $this->_titre;
  } 
  

  public function getresume() {
    return $this->_resume;
  } 
  
  public function nomfichier() {
    return $this->_nomfichier;
  } 

  
  public function setMot($mot){
    $this->_mot = $mot;
  }

  public function getNbRepet() {
    return $this->_nbRepet;
  } 

}
