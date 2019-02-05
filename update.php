<?php include_once 'header.php' ?>
<?php
session_start();
if (!isset($_SESSION['login'])) {
	# code...
	echo '<script>window.location.replace("login.php") </script>';
}
?>
<div class="row">
	<div class="col">
		<div class="w-50 mx-auto p-3 bg-lights">
			<?php 
				include_once 'student.php';

				$std = new Student();

			if (isset($_POST['update'])) {
				
				$id = $_POST['id'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];

				echo $std->Update($name, $email, $pass, $id);


			}
			 ?>

			 <?php 
			 	
			 	if (isset($_GET['upd'])) {
					# code...
					$upd_id = $_GET['upd']; 

					$get = $std->getforupdate($upd_id);
					// echo "string";

					if ($get) {
						# code...
						while ( $row = $get->fetch_assoc()) { ?>

						<form action="" method="post">
							<div class="form-group">
								<label>Student id:</label>
								<input type="text" name="id" class="form-control" value="<?php echo $row['id']; ?>" />
							</div>

							<div class="form-group">
								<label>Name:</label>
								<input type="text" name="name" class="form-control" value="<?php echo $row['stdname']; ?>" />
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input type="email" name="email" class="form-control" value="<?php echo $row['stdemail']; ?>" />
							</div>
							<div class="form-group">
								<label>Password:</label>
								<input type="password" name="pass" class="form-control" value="<?php echo $row['stdpass']; ?>" />
							</div>
							<div class="form-group">
								<input type="submit" name="update" class="btn btn-success btn-block" />
							</div>
						</form>

					<?php	}
					}
				}


			  ?>
			
		</div>
	</div>
</div>


<?php include_once 'footer.php' ?>