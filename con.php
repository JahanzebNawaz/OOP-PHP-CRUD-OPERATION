<?php

Class Database{

// Variables for Databse Connection
public $host =  "localhost";
public $user = "root";
public $pswd = "";
public $db = "bsse";


// Variables
public $conn;
public $error;

public function __construct(){
	$this -> connectDB();

}

public function connectDB(){
	$this->conn = new mysqli($this->host, $this->user, $this->pswd, $this->db);

	if (!$this->conn) {
		# code...
		$this->error = "Connection Failed ". $this->conn->connect_error;
		return false;
	}
}


} //end of CLass

// $db = new Database();


?>