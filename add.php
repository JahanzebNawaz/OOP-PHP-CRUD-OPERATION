<?php include_once 'header.php' ?>

<div class="row">
	<div class="col">
		<div class="w-50 mx-auto p-3 bg-lights">
			<?php 
			if (isset($_POST['add'])) {
				# code...
				include_once 'student.php';

				$std = new Student();

				$name = $_POST['name'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];

				echo $std->insert($name, $email, $pass);
				// executed INSERT function and shown Alert Message

			}
			 ?>
			<form action="" method="post">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" class="form-control" />
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" name="email" class="form-control" />
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="pass" class="form-control" />
				</div>
				<div class="form-group">
					<input type="submit" name="add" class="btn btn-success btn-block" />
				</div>
			</form>
		</div>
	</div>
</div>


<?php include_once 'footer.php' ?>