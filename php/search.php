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
					$distance = $row["distance"];
					$rating = $row["rating"];

					session_start();
					$_SESSION["name"] = $place;
					$_SESSION["category"] = $cat;
					$_SESSION["address"] = $address;
					$_SESSION["photo"] = $photo;
					$_SESSION["description1"] = $description1;
					$_SESSION["description2"] = $description2;
					$_SESSION["description3"] = $description3;
					$_SESSION["transport"] = $transport;
					$_SESSION["distance"] = $distance;
					$_SESSION["rating"] = $rating; 

					header("Location:../views/search_res.php");
				
			}
		}else{
			echo"<script>
	 			alert('Sorry, your search doesn't match with any place in TravelSL');
	 			window.location.href='../views/index.php';
	 		</script>";
		}


	}

	if(preg_match("/^[a-zA-Z]+/", $_GET["search"])){
			$val = $_GET["search"];

		$year = date("Y");	
		if($year == '2017')
			{
				$sql="UPDATE search_count SET `2017`=`2017` + 1 WHERE `name` = '$val'";
				$res = mysqli_query($conn,$sql);
			}
	}
		
}
	 

?>