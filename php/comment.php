<?php

	include("../config/config.php");
	session_start();

	if(isset($_POST["submit"])){
		$uname = $_POST['uname'];
		$pid = $_SESSION["pid"];
		$name = $_SESSION["name"]
		$review = $_POST['review'];
		
		
		$sql = "insert into comme (uname,pid,name,comment) values('$uname','$pid','$name','$review')";
		
		$res = mysqli_query($conn,$sql);
		
		header("location:../views/contact.php");
		
	}
	






?>