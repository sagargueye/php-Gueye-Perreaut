<?php

class Utilisateur
{
  private $_login;

  private $_mot;

  private $_nbRepet;

  public function __construct($login, $mot, $nbRepet)
  {
    $this->_login = $login;
    $this->_mot = $mot;
    $this->_nbRepet = $nbRepet;

  }

  public function getLogin() {
    return $this->_login;
  } 

  public function setLogin($login){
    $this->_login = $login;
  }

  public function getMot() {
    return $this->_mot;
  } 

  public function setMot($mot){
    $this->_mot = $mot;
  }

  public function getNbRepet() {
    return $this->_nbRepet;
  } 

  public function setNbRepet($nbRepet){
    $this->_nbRepet = $nbRepet;
  }
}
