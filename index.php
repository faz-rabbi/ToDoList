<?php
include("authentication.php");
?>
<html>
<head>
	<title>Welcome Home</title>
</head>
<body>
	<div class="form">
		<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
		<p><a href="dashboard.php">Dashboard</a></p>
		<a href="logout.php">Logout</a>
	</div>
</body>
</html>
