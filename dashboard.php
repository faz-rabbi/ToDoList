<?php
	require('dbconn.php');
	include("authentication.php");
?>
<html>
<body>
	<div class="form">
		<h1 align="center">Welcome to Dashboard.</h1>
	</div>
	<div class="form">
		<p><a href="index.php">Home</a> | <a href="registration.php">Registration</a> | <a href="logout.php">Logout</a></p>
		<h2>View Records</h2>
		<table width="100%" border="1" style="border-collapse:collapse;">
			<thead>
				<tr>
					<th>
						<strong>S.No</strong>
					</th>
					<th>
						<strong>User Name</strong>
					</th>
					<th>
						<strong>Email</strong>
					</th>
					<th>
						<strong>Edit</strong>
					</th>
					<th>
						<strong>Delete</strong>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$count=1;
					$query="Select * from list_table ORDER BY id desc;";
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td align="center"><?php echo $count; ?></td>
							
							<td align="center"><?php echo $row["username"]; ?></td>
							<td align="center"><?php echo $row["email"]; ?></td>
							<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
							<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
						</tr>
							<?php $count++; } ?>
			</tbody>
		</table>
	</div>
</body>
</html>
