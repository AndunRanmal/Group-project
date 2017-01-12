<?php

	include("../config/config.php");
	session_start();	


	if(!empty($_POST)){
	$pid=$_POST["category"];

	echo "pid is".$pid ;

	$sql = "select * from places where pid = $pid";

	$res = mysqli_query($conn,$sql);

	if(mysqli_num_rows($res)==0){
		echo "there is no place under that name";

	}else{
		while ($row=mysqli_fetch_assoc($res)) {
			$_SESSION["pid"] = $row["pid"];
			$_SESSION["name"] = $row["name"];
			$_SESSION["category"] = $row["category"];
			$_SESSION["address"] = $row["address"];
			$_SESSION["nearbyCity"] = $row["nearbyCity"];
			$_SESSION["latLong"] = $row["latLong"];
			$_SESSION["rating"] = $row["rating"];
			$_SESSION["description1"] = $row["description1"];
			$_SESSION["description2"] = $row["description2"];
			$_SESSION["photopath"] = $row["photopath"];
			$_SESSION["distance"] = $row["distance"];
			$_SESSION["tickets"] = $row["tickets"];
			$_SESSION["transport"] = $row["transport"];

		}
	}

}
?>