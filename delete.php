
<?php include_once 'header.php'; ?>

<div class="row">
	<div class="col">
		<div class="w-75 mx-auto p-3 bg-lights">
			<?php
			include_once 'student.php';
				
				$std = new Student();
				// delete record

				if (isset($_GET['id'])) {
					# code...
					$id = $_GET['id'];

					$delete = $std->Delete($id);
						echo $delete;
				}

			 ?>
			<h2>Record</h2>
			<form action="" method="post">
				<table class="table">
					<thead>
						<tr>
							<td>Name</td>
							<td>Email</td>
							<td>Password</td>
							<td>Option</td>
						</tr>
					</thead>
					<tbody>
						<?php

							// Show Records of Students
							$result = $std->StudentRecord();
							if ($result) {
								# code...
								while ($row = $result->fetch_assoc()) {  ?>
									<tr>
									<td><?php echo $row['stdname']; ?></td>
									<td><?php echo $row['stdemail'];?></td>
									<td><?php echo $row['stdpass']; ?></td>
									<td> 
										<a class="btn btn-danger btn-sm m-1" href="?del=<?php echo $row['id']; ?>">Delete</a> </td>
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