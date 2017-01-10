<?php
	
	include("../config/config.php");

	if(isset($_GET["go"])){	
		if(preg_match("/^[a-zA-Z]+/", $_GET["search"])){
			$val = $_GET["search"];

			$sql = "select * from `places` where `name` like '%$val%'";

			$res = mysqli_query($conn,$sql);
			if(mysqli_num_rows($res)==1){


				while($row = mysqli_fetch_array($res)){
					$place = $row["name"];
					$id = $row["pid"];
					$cat = $row["category"];
					$address = $row["address"];
					$photo = $row["photopath"];
					$description1 = $row["description1"];
					$description2 = $row["description2"];
					$description3 = $row["description3"];
					$transport = $row["transport"];

					session_start();
					$_SESSION["name"] = $place;
					$_SESSION["category"] = $cat;
					$_SESSION["address"] = $address;
					$_SESSION["photo"] = $photo;
					$_SESSION["description1"] = $description1;
					$_SESSION["description2"] = $description2;
					$_SESSION["description3"] = $description3;
					$_SESSION["transport"] = $transport;

					header("Location:../views/search_res.php");
				
			}
		}else{
			echo"<script>
	 			alert('Sorry Your serarch didnt match with any place we have');
	 			window.location.href='../views/index.php';
	 		</script>";
		}
		


	}
}
	 

?>