<?php
	require('dbconn.php');
	include("authentication.php");
	$id=$_REQUEST['id'];
	$query = "SELECT * from list_table where id='".$id."'"; 
	$result = mysqli_query($con, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
	<title>Update Record</title>
</head>
<body>
	<div>
		<p><a href="dashboard.php">Dashboard</a> | <a href="logout.php">Logout</a></p>
		<h1>Update Record</h1>
		<?php
			if (isset($_POST['edit_btn']))
				{
					$name= $_POST['name'];
					$username= $_POST['username'];
					$email= $_POST['email'];
					$password= $_POST['password'];
					$update="update list_table set name='".$name."', username='".$username."', email='".$email."', password='".$password."' where id='".$id."'";
					mysqli_query($con, $update);
					echo "<div><h3>Record edit Successfully.</h3><br/>Click here to <a href='dashboard.php'>Dashboard</a></div>";
				}
			else 
				{
		?>
					<div>
						<form method="post" action=""> 
							<label>Name</label>
							<input type="text" name="name" required value="<?php echo $row['name'];?>">
							<label>Username</label>
							<input type="text" name="username" required value="<?php echo $row['username'];?>">
							<label>Email</label>
							<input type="email" name="email" required value="<?php echo $row['email'];?>">
							<label>Password</label>
							<input type="password" name="password" required value="<?php echo $row['password'];?>">
							<button type="submit" name="edit_btn">Edit</button>
						</form>
			<?php } ?>
					</div>
	</div>
</body>
</html>
