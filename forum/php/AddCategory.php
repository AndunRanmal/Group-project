<?php
		include("../../config/config.php");

		if (isset($_POST["submit"])){
			$cat_type = $_POST["category"];
			$cat_des = $_POST["cat_description"];

			$sql = "insert into categories(cat_name,cat_desc) values ('$cat_type','$cat_des')";

			if(mysqli_query($conn,$sql)){
				echo "<script>
				alert('New category added successfully');
				window.location.href='../views/index.php';
				</script>";
			}else{
				echo "<script>
				alert('Something went wrong');
				window.location.href='../views/category.php';
				<script>";
			}
		}
		
?>