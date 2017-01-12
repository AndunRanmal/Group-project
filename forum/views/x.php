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
			echo "No topics are added to the category yet";
		}else{
			echo "<table class='table table-hover' style='align:center;'>";
			 		echo "<thead>";
			 			echo "<tr>";
				 			echo "<th>Topic Subject</th>";
				 			echo "<th>Post Date</th>";
				 			echo "<th>Started by</th>";
				 			echo "<th>Last reply on";
				 		echo "</tr>";
				 	echo "</thead>";
			while($row = mysqli_fetch_assoc($result)){
			 	
				 	echo "<tbody>";
				 	$id = $row['topic_id'];
				 	$name = $row['topic_subject'];
				 		
				 		echo "<tr class='row1'>";
				 			echo "<td>";
				 			echo "<a href='view_post.php?ref=$id&name=$name'>" .$row['topic_subject'];
				 			echo "</td>";
				 			echo "<td>";
				 			echo date('d-m-Y',strtotime($row['topic_date']));
				 			echo "</td>";
				 			echo "<td>";
				 			$name = "select F_Name from user where uid=".$row['topic_by'];
				 			$res = mysqli_query($conn,$name);
				 			while($x = mysqli_fetch_assoc($res)){
				 				echo $x['F_Name'];
				 			}
				 			echo "</td>";
				 			echo "<td>";
				 			$last_reply = "select reply_date from replies where reply_topic =$id ORDER BY reply_id DESC LIMIT 1";
				 			$last_res = mysqli_query($conn,$last_reply);
				 			//echo (mysqli_num_rows($last_res));
				 			if(mysqli_num_rows($last_res)==0){
				 				echo "No reply yet";
				 			}else{
				 				while($y = mysqli_fetch_assoc($last_res)){
					 				echo date('d-m-Y',strtotime($y['reply_date']));
					 			}
				 			}
					 			
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