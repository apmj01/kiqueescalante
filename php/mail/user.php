<?php 
class User{
	private $name;
	private $pass;

	public function __Construct(){
		$this->name = "annslv01@gmail.com";
		$this->pass = "An0n!m&th&m";
	}
	public function getName(){
		return $this->name;
	}
	public function getPass(){
		return $this->pass;
	}
}

 ?>
