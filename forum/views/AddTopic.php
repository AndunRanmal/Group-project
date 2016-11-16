<?php
	include("../../config/config.php");
	session_start();
	$user = $_SESSION["uid"];
	//$cat = $_SESSION["cat"];
	
	if(!empty($_POST)){
		
		print_r($_POST);
		$subject = $_POST["subject"];
		$messege = $_POST["content"];
		$cat = $_POST['cat_id'];

	//	$subject =mysqli_real_escape_string($conn,$_POST["subject"]);

	//	$messege =mysqli_real_escape_string($conn,$_POST["content"]);
		

		$query = "insert into topics (topic_subject,topic_date,topic_cat,topic_by) values ('$subject',NOW(),$cat,$user)";
		$topic_id = mysqli_insert_id($conn);
		if(mysqli_query($conn,$query)){
			 //echo "<script>
			 //alert('New Topic added successfully');
			 //window.location.href=AddTopic.php;
			 //</script>";
			echo 'Data insert';
			
			
				$sql = "insert into posts(post_content,post_date,post_topic,post_by)values('$messege',NOW(),$topic_id,$user)";
				echo $sql;

				if(mysqli_query($conn,$sql)){
				echo "success";
				}else{
				echo "Failed";
				}
		
		}else{
			// echo "<script>
			// alert('Something went wrong');
			
			// <script>";

			echo 'Not entered';
		}

		
	}

?>zz