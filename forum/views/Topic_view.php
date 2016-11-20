<?php
	include("../include/header.php");
	include("../../config/config.php");
	session_start(cat);
	if(!empty($_POST)){
	$cat=$_POST["category"];

	echo "category is".$cat ;


	$sql = "select * from `categories` where `cat_id` = $cat";

	$res = mysqli_query($conn,$sql);

	if(mysqli_num_rows($res)==0){
		echo "There are no categories under that";
	}else{
		while($row = mysqli_fetch_assoc($res)){
			 $_SESSION["cat_id"] = $row["cat_id"];
			 $_SESSION["cat_name"] = $row["cat_name"];
			 $_SESSION["cat_des"] = $row["cat_desc"];
			 $_SESSION["photo"] = $row["photo"];
		}


		}
	}
	
	

?>