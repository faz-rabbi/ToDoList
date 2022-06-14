<?php
		require('dbconn.php');
		session_start();
        if (isset($_POST['login_btn'])){
		$username    = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM list_table WHERE username='$username' AND password='$password'";
		$results = mysqli_query($con, $query);

	    if (mysqli_num_rows($results) == 1) { 
		$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
		}
?>