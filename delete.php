<?php
require('dbconn.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM list_table WHERE id=$id"; 
$result = mysqli_query($con,$query);
header("Location: dashboard.php"); 
?>