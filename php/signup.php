<?php
	
	include("../config/config.php");

	

	if(isset($_POST["submit"])){
		$f_name = $_POST["FName"];
		$l_name = $_POST["LName"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$con_pass = $_POST["confirm_pass"];



		$sqluser = "insert into `user` (`F_Name`,`L_Name`,`email`,`password`,`confirm_pass`,`status`) values ('$f_name','$l_name','$email','$pass','$con_pass','0')"; 

		if(mysqli_query($conn,$sqluser)){
			echo "<script>
			alert('User account created successfully');
			window.location.href='../views/login.php';
			</script>";
		}
		else{
			echo "<script>
			alert('oops something went wrong');
			window.location.href='../views/login.php';
			</script>";
		}
	}


?>