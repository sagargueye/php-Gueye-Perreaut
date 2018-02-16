<?php

class utilisateur
{
	private $_login;
	private $_mot;
	private $_nbRepet;
	
	 public function __construct($login, $mot,$nbRepet)
    {
        $this->_login= $login;
        $this->_mot = $mot;
        $this->_nbRepet = $nbRepet;
    }
	public function setLogin($newlog)
	{
            $this->_login=$newlog;
	}
	public function getLogin() //: string
	{
            return $this->_login;
	}
	public function setMot($newmot)
	{
		$this->_mot=$newmot;
	}
	public function getMot()//: string
	{
		return $this->_mot;
	}
	public function setNbRepet($newnbrepet)
	{
		$this->_nbRepet=$newnbrepet;
	}
	public function getNbRepet() // : int
	{
		return $this->_NbRepet;
	}
	
}