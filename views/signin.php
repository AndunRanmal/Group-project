<?php
include("../config/config.php");
session_start();
if(isset($_POST["email"])){
	$query="select * from user where email='".$_POST["email"]."' and password='".$_POST["password"]."'";
	echo $query;

	$res = mysqli_query($conn,$query);
	if(mysqli_num_rows($res)>0){
		 $_SESSION["email"] = $_POST["email"];
		 echo "Yes";
	}else{
		echo "No";
	}
}

?>