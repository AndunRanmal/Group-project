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
			}
			echo "<button class='btn btn-info' style='float:right; id='reply' name=new_reply data-target='#modal_reply' data-toggle='modal' name='".$row['post_id']."'> Reply to the Post</button>"; 
			echo "</div><br/><br/>";
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
						
					}
				})
			}
		})
	})

	$('.row').on('click','#reply',function(){
		var ele = $(this).attr("name");
		console.log(ele);
		$('#post_id').val(ele);
		$('#modal_reply').modal('show');
	});
</script>

	
</script>