<?php
	include("../../config/config.php");
	session_start();
	$user = $_SESSION["uid"];
	//$cat = $_SESSION["cat"];
	
	

	if(isset($_POST['submit'])){
		$subject =mysqli_real_escape_string($conn,$_POST["subject"]);

		$messege =mysqli_real_escape_string($conn,$_POST["content"]);
		

		$query = "insert into topics (topic_subject,topic_date,topic_by) values ('$subject',NOW(),'$user')";
		echo $query;
		if(mysqli_query($conn,$query)){
			echo "<script>
			alert('New Topic added successfully');
			window.location.href=AddTopic.php;
			</script>";
		}else{
			echo "<script>
			alert('Something went wrong');
			
			<script>";
		}
	}

?>