<?php
	session_start();
	session_unset();
	$_SESSION['logout'] = true;
	echo '<script>window.location.replace("login.php")</script>';
	exit();
	
?>