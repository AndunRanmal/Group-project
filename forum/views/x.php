<?php
 include ("../../config/config.php")
 session_start();
 $cat = $_SESSION["cat_id"];
 
 $query = "select * from topics where topic_cat = $cat";

		$result = mysqli_query($conn,$query);

		if (mysqli_num_rows($result)==0){
			echo "Notopics are added to the category yet";
		}else{
			while($row = mysqli_fetch_assoc($result)){
			 	$_SESSION["topic_id"] = $row["topic_id"];
				$_SESSION["subject"] = $row["topic_subject"];
				$_SESSION["date"] = $row["topic_date"];
				$_SESSION["topic_by"] = $row["topic_by"];
			}
}
?>