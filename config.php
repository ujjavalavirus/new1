<?php
session_start();
Class connection{

	var $host ;
	var $user ;
	var $password ;
	var $database;
	public $con ;

	public function connect($set_host,$set_user,$set_password,$set_database){

		$this->host = $set_host;
		$this->user = $set_user;
		$this->password = $set_password;
		$this->database = $set_database;

		$this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database) or die('Error connecting to DB');
		return ($this->con);


	}


	public function myquery($sqlquery){

		$result = mysqli_query($this->con,$sqlquery) or die('Error in query');
		return($result);


	} 

	public function myarrayfetch($sqlquery){

		$arrayresult = mysqli_fetch_array($sqlquery) ;
		return $arrayresult;

	}

	public function close(){

		return mysqli_close($this->con);
	}



}

?>