<?php
 include ("../../config/config.php");
 include("../include/header.php");

 
 $cat = $_SESSION["cat_id"];
 $photo = $_SESSION["photo"];
 $name  = $_SESSION["cat_name"];
 
 
?>
<head>
	<head>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fertigo">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid Sans">

        
        <style type="text/css">
            body{
                font-family: 'Fertigo';
                font-weight: bold;
                font-size: 16px;
            }
            table{
            	font-family: 'Droid Sans';
            	font-weight: 'bold';
            }
            .row1:hover{
			  cursor: pointer;
			  background-color: #ccc;


			}
			a:hover{
				text-decoration: none;
			}
         </style>
</head>
</head>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php
				//echo "<h3 style='text-align:left;float:left;'>".$name. "</h3>";
				echo "<img class='img-rounded' src=\n".$photo." style='float:right;'/\n>";

			?>
		</div>
		<div class="col-md-9">
			<?php
				echo "<h1 style='text-align:center;'>".$name. "</h1>";
				echo "<hr/>";

				$query = "select * from topics where topic_cat = $cat order by topic_date DESC";

		$result = mysqli_query($conn,$query);

		if (mysqli_num_rows($result)==0){
			echo "Notopics are added to the category yet";
		}else{
			echo "<table class='table table-hover' style='align:center;'>";
			 		echo "<thead>";
			 			echo "<tr>";
				 			echo "<th><h3>Topic Subject</h3></th>";
				 			echo "<th><h3>Post Date</h3></th>";
				 			echo "<th><h3>Started by</h3></th>";
				 		echo "</tr>";
				 	echo "</thead>";
			while($row = mysqli_fetch_assoc($result)){
			 	
				 	echo "<tbody>";
				 	$id = $row['topic_id'];
				 	$name = $row['topic_subject'];
				 		
				 		echo "<tr class='row1'>";
				 			echo "<td>";
				 			echo "<a href='view_post.php?ref=$id&name=$name'><h4>" .$row['topic_subject']."</h4>";
				 			echo "</td>";
				 			echo "<td>";
				 			echo date('d-m-Y',strtotime($row['topic_date']));
				 			echo "</td>";
				 			echo "<td>";
				 			$name = "select F_Name from user where uid=".$row['topic_by'];
				 			$res = mysqli_query($conn,$name);
				 			while($x = mysqli_fetch_assoc($res)){
				 				echo "<h4>" .$x['F_Name']. "</h4>";
				 			}
				 			echo "</td>";
				 		echo "</tr>";
				 		
				 	echo "<tbody>";
				 	$id= $row['topic_id'];
				 

			



			

		 echo"<script type='text/javascript'>
		 	$('.row1').click(function(){
		 		   window.location = '';
		 		 });
		 </script>";
		}
	}
		?> 
	
		</div>
	</div>
</div>