<?php
	include("../config/config.php");
	 if (isset($_POST["submit"])){
	 	$email = $_POST["email"];
	 	$pass = $_POST["pass"];


	 	$sql ="select * from `user` where `email` = '$email' and `password` = '$pass' ";
	 	$result = mysqli_query($conn,$sql);
	 	if(mysqli_num_rows($result)==1){
	 		while ($row = mysqli_fetch_assoc($result)){
	 			$status = $row["status"];
	 			$FName = $row["F_Name"];
	 			$LName = $row["L_Name"];
	 			$photo = $row["photo"];
	 			$id = $row["uid"];
	 		}

	 		session_start();

	 		$_SESSION["user"] = $email;
	 		$_SESSION["FName"] = $FName;
	 		$_SESSION["LName"] = $LName;
	 	//	$_SESSION["Photo"] = $photo;
	 		$_SESSION["uid"] = $id;

	 		if ($status ==0){
	 			header("Location: ../forum/views/index2.php");
	 		}

	 		elseif ($status ==  1) {
	 			echo "You are succesfully login as admin";
	 		}
	 	}
	 		else{
	 			echo"<script>
	 			alert('Sorry you dont have an account');
	 			window.location.href='../views/login.php';
	 		</script>";
	 		}
	 	

	 }

?>