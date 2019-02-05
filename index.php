<?php include_once 'header.php'; ?>
<?php
session_start();
if (!isset($_SESSION['login'])) {
	# code...
	echo '<script>window.location.replace("login.php") </script>';
}
?>
<div class="row">
	<div class="col">
		<div class="w-75 mx-auto p-3 bg-lights">
			
			<h2>Record</h2>
			<form action="" method="post">
				<table class="table">
					<thead>
						<tr>
							<td>ID</td>
							<td>Name</td>
							<td>Email</td>
							<td>Password</td>
							
						</tr>
					</thead>
					<tbody>
						<?php
						include_once 'student.php';
				
						$std = new Student();

							// Show Records of Students
							$result = $std->StudentRecord();
							if ($result) {
								# code...
								while ($row = $result->fetch_assoc()) {  ?>
									<tr>
										<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['stdname']; ?></td>
									<td><?php echo $row['stdemail'];?></td>
									<td><?php echo $row['stdpass']; ?></td>
									
								</tr>

									<?php
								}
							}
						?>
						
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>

<?php include_once 'footer.php'; ?>