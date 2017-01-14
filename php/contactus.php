<?php
	include("../config/config.php");
	
	if(isset($_POST["submit"])){
		$name=$_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		$phoneNumber = $_POST['phone'];
		
		$sql = "insert into contact (Name,Comment,Email,phoneNumber) values('$name','$comment','$email','$phoneNumber')";
		
		$res = mysqli_query($conn,$sql);
		
		header("location:../views/contact.php");
		
	}
	
?>