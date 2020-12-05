<?php
	$con = mysqli_connect('127.0.0.1', 'root', "", "youtube");
	$password= $_GET["password"];
	$name = $_GET["name"];
	$c = mysqli_query($con, "SELECT * FROM users WHERE password='{$password}' AND name = '{$name}'");
	$numrows = mysqli_num_rows($c);
	if ($numrows > 0) {
		header("Location: home.php?name=" . $_GET["name"]);
		
	} else{
		header('Location: index.php');
		}
		
?>