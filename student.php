<?php

/**
 * 
 */

include_once 'con.php';

class Student
{
	public $db;
	
	function __construct()
	{
		# code..
		$this->db = new Database();

	}

	public function insert($n, $e, $p){
		$query = "INSERT INTO student(stdname, stdemail, stdpass) VALUES('$n','$e','$p') ";

		$result = $this->db -> insert($query);

		if ($result) {
			# code...
			return '<div class="alert alert-success"> <b>Data Inserted</b> </div>';
		} else {
			return '<div class="alert alert-warning"><b>Data Not Inserted </b> </div>';
		}
	}

	// Get Records of Student
	public function StudentRecord(){
		$query = "SELECT * FROM student";
		$result = $this->db->select($query);
		return $result;
	}

	// Delete Record of Student
	public function Delete($id)
	{
		$query = "DELETE FROM student WHERE id = '$id'";
		$result = $this->db->delete($query);
		if ($result) {
			# code...
			return '<div class="alert alert-success"> <b>Data Deleted</b> </div>';
		} else {
			return '<div class="alert alert-warning"><b>Data Not Deleted </b> </div>';
		}
	}

	// Update Record of Student
	public function Update($name, $email, $pass, $id)
	{
		$query = "UPDATE student SET stdname ='$name', stdemail='$email', stdpass='$pass' WHERE id = '$id'";
		$result = $this->db->delete($query);
		if ($result) {
			# code...
			return '<div class="alert alert-success"> <b>Data Updated</b> </div>';
		} else {
			return '<div class="alert alert-warning"><b>Data Not Updated </b> </div>';
		}
	}


	// data for update 
	public function getforupdate($id)
	{
		# code...
		$query = "SELECT * FROM student WHERE id = '$id'";
		$result = $this->db->select($query);
		return $result;
	}


} //end of class

?>