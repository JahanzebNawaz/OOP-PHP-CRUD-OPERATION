<?php

Class Database{

// Variables for Databse Connection
public $host =  "localhost";
public $user = "root";
public $pswd = "";
public $dbase = "bsse";


// Variables
public $conn;
public $error;

public function __construct(){
	$this -> connectDB();

}

public function connectDB(){
	$this->conn = new mysqli($this->host, $this->user, $this->pswd, $this->dbase);

	if (!$this->conn) {
		# code...
		$this->error = "Connection Failed ". $this->conn->connect_error;
		return false;
	}
}

// Insert data into database
public function insert($query){
	$insert_row = $this->conn->query($query) or die($this->conn->error.__LINE__);
	if ($insert_row) {
		# code...
		return $insert_row;
	} else{
		return false;
	}

}

//Select data from Database

public function select($query)
{
	$result = $this->conn->query($query) or die( $this->conn->error.__LINE__);
	if ($result->num_rows >0) {
		# code...
		return $result;
	} else {
		return false;
	}
}

public function delete($query)
{
	# code...
	$delete_row = $this->conn->query($query) or die( $this->conn->error.__LINE__);
	if ($delete_row) {
		# code...
		return $delete_row;
	} else {
		return false;
	}
}


// Update

public function update($query)
{
	# code...
	$update_row = $this->conn->query($query) or die( $this->conn->error.__LINE__);
	if ($update_row) {
		# code...
		return $update_row;
	} else {
		return false;
	}
}


} //end of CLass

// $db = new Database();


?>