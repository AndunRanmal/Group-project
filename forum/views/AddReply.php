<?php
include("../../config/config.php");

session_start();
$uid = $_SESSION["uid"];

echo $uid;

if(!empty($_POST)){
	$reply = $_POST['text_reply'];
	$id =$_POST['post_id'];
	echo $reply;
	echo $id;



	$sql = "insert into replies(reply_content,reply_date,reply_topic,reply_by)values('$reply',NOw(),$id,$uid)";

	//$res = mysqli_query($conn,$sql);

	if(mysqli_query($conn,$sql)){
		echo "data entered";
	}else{
		echo "Something went wrong";
	}
	
}

?>