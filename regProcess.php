<?php
	require('dbconn.php');
    if (isset($_POST['register_btn'])){
		$name    = $_POST['name'];
		$username    = $_POST['username'];
		$email       = $_POST['email'];
		$password  = $_POST['password'];
		$query = "INSERT into `list_table` (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
        $result = mysqli_query($con,$query);
        if($result){
			echo "<div><h3>You are registered successfully.</h3><br/>Click here to <a href='dashboard.php'>Dashboard</a></div>";
        }
    }else{
		echo "Faild.";
	}
?>
		