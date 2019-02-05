

<?php 

session_start();

if(isset($_SESSION['login']))
{
    //echo '<script>window.location.replace("index.php")</script>';
}


$error="";
if(isset($_POST['login']))
{
    include_once 'con.php';

    $db=new Database();

    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $q="select * from student where stdemail='$email' AND stdpass='$pass'";

    $check=$db->select($q);
    if($check) {
        $_SESSION['login'] = true;
        echo '<script>window.location.replace("index.php")</script>';
    }
    else
        $error="Usernmae or pass not found";

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>OOP CRUD OPERATION</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<section class="container">
	<div class="jumbotron bg-secondary text-center text-white">
		<h2 class=" display-3">OOP PHP CRUD</h2>
		<hr>
		<h4>Welcome to OOP PHP Programming</h4>
	</div>
<div class="row">
	<div class="col">
		<div class="w-50 mx-auto p-3 bg-lights">
			<?php echo $error; ?>
			<h2> LOGIN TO ACCOUNT</h2>
			<form action="" method="post">
				
				<div class="form-group">
					<label>Email:</label>
					<input type="email" name="email" class="form-control" />
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="pass" class="form-control" />
				</div>
				<div class="form-group">
					<input type="submit" name="login" class="btn btn-success btn-block" />
				</div>
			</form>
		</div>
	</div>
</div>



<!-- Footer -->
<footer class="page-footer font-small bg-light text-dark mt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="mailto:jahanzaib.ch9996@gmail.com"> Jahanzaib Nawaz</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</section>

</body>
</html>