<?php
	include("../../config/config.php");
	include("../include/header.php");
?>

<div class="container">
	<div class="row">

		<?php
			$id = $_GET['ref'];
			$name = $_GET['name'];
			echo "<h3 style='text-align:justify;'>".$name."</h3>";
			echo "<hr>";
			echo "<div style='background-color:#eaf2f8;padding:12px 12px 2px 12px'>";
			$post = "select * from posts where post_topic =$id";
			$res = mysqli_query($conn,$post);
			if(mysqli_num_rows($res)==0){
				echo "No post can be found on the database";
			}else{
				while($row=mysqli_fetch_assoc($res)){
				echo "<p style='text-align:justify;'>" .nl2br($row['post_content'])." \n</p><br>";
				$user = "select * from user where uid =".$row['post_by'];
				$result = mysqli_query($conn,$user);
				while($name=mysqli_fetch_assoc($result)){
					echo "Posted by: " .$name['F_Name']. " ".$name['L_Name']."<br>";
					echo "Posted on: " .$row['post_date']."<br>";
				}
				echo  "<button style='float:right;' type='button' class='btn btn-info' name='".$row["post_id"]."' id='reply' >Reply to the post</button>";
				$_SESSION['post_id'] = $row["post_id"];
			}
			//echo "<button class='btn btn-info' style='float:right;' id='reply'  name=".row['post_id']."> Reply to the Post</button>"; 
			
			echo "</div><br/><br/>";   //data-target='#modal_reply' data-toggle='modal'
			echo "<hr>";
			}
			
		?>

		<div class="modal" id="modal_reply" role="dialog">
			<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h3> Reply to the Post</h3>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<form id="AddReply">
							<textarea name="text_reply" class="form-control" cols="100" rows="5" id="text_reply"></textarea><br/>
							<input type="submit" name="submit" id="submit" value="Reply to the post">
							<input type="hidden" name="post_id" id="post_id">
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
				</div>
			</div>
			</div>
		</div>

		<?php

			include("../../config/config.php");
			$post_id = $_SESSION['post_id'];
			//echo $post_id;
			$reply = "select * from replies where reply_topic = $post_id order by reply_date DESC";
			$reply_res = mysqli_query($conn,$reply);
			
			if(mysqli_num_rows($reply_res)==0){
				echo "No replies are for this post yet. You can send a reply and start a conversation";
			
			}else{
				while($row=mysqli_fetch_assoc($reply_res)){
					echo "<div>";
						echo "<div style='background-color:#f4ecf7;padding:12px 12px 2px 12px'>";
							$user = "select * from user where uid =".$row['reply_by'];
							$res_user = mysqli_query($conn,$user);
							while($y=mysqli_fetch_assoc($res_user)){
								$fname = $y['F_Name'];
								$lname = $y['L_Name'];
							} 
							echo "<div style='clear:both;'>";
							echo "<p>Replied by: " .$fname. " ".$lname."</p>";
							
							echo "</div>";
						echo "</div>";
						echo "<div style='background-color:#e8f8f5;padding:12px 12px 2px 12px'>";
							echo "<p>" .$row['reply_content']."</p>";
							echo "<p >Replied on: ".date('d-m-Y',strtotime($row['reply_date']))."</p>";
							
						echo "</div><br/><br/>";
					echo "</div>";
				}
			}
		?>


	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#AddReply').on('submit',function(event){
			event.preventDefault();
			if($('#text_reply').val()==""){
				alert("Subject is required");
			}else{
				$.ajax({
					method: "POST",
					url: "AddReply.php",
					data: $("form").serialize(),
					success:function(data){
						console.log(data +"Done");
						alert("Reply has add to the post Successfully!");
						$('#AddReply')[0].reset();
						$('#modal_reply').modal('hide');
						location.reload();

						
					}
				})
			}
		})
	})
	//$('.row').on('click','#new_topic',function(){
	$('.row').on('click','#reply',function(){
		var ele = $(this).attr("name");
		console.log(ele);
		$('#post_id').val(ele);
		$('#modal_reply').modal('show');
	})
</script>

	