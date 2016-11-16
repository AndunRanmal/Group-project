<?php
	include("../include/header.php");
    include("../../config/config.php");
?>
<head>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fertigo">
        
        <style type="text/css">
            body{
                font-family: 'Fertigo';
                font-weight: bold;
                font-size: 16px;
            }
         </style>
</head>
 <div class="container">

        <div class="row">
 			<div class="col-md-3">

			 	<?php 
			            
			            $user = $_SESSION["uid"];
			            $sql = "select * from `user` where `uid` ='$user'"; 
			            $res = mysqli_query($conn,$sql);
			            if (mysqli_num_rows($res)==1){
			                while ($row = mysqli_fetch_assoc($res)){
			                    $photo = $row["photo"];
			                }
			            }

			           /* echo"<img src='images/user.png' style='width:100px;height:100px;'>";*/
			            echo "<img src=\n".$photo." style='height:200px;width:200px;border-radius:50%;'/\n>";
			           // echo "<img src='data:image/jpeg;base64,".base64_encode($_SESSION["Photo"])."'style='height:150px;width:150px'/>";

			            echo "<h4>".$_SESSION["FName"]. " ".$_SESSION["LName"]. "</h4>";
			            echo "<h4>Welcome to TravelSL blog<h4>";
			     ?>       
                <!--upload photo-->
	                <div class="list-group" style="padding:0 40px 10px 0px;">
	                	<form action="../php/upload.php"  method="post" enctype="multipart/form-data">
	                	<input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-info btn-sm" style="width:200px">
            			<input type="submit" value="Upload Image" name="submit" class="btn btn-info btn-sm" style="width:200px"></form>
	                	<form>
	                	<button class="btn btn-info btn-sm" formaction="../../php/logout.php" style="width:200px">Logout</button>
	                	</form><br>
	                	
	                	<button class="btn btn-info btn-sm" style="width:200px" data-target="#modal_topic" data-toggle="modal">New Topic</button>
	                    
	                </div>
	                
	                    
	            </div>

	            <div class="col-md-9">
	            <!--image slide-->
	                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/4.jpg" alt="">
                                </div>
                                
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    </div>
	                <div class="row">

	                <!--Categories added by  admin-->
	                <?php
			            $sql = "select * from `categories`";
			            $res = mysqli_query($conn,$sql);
			            if(mysqli_query($conn,$sql)){
			                if (mysqli_num_rows($res)==0){
			                    echo ("There isn't any categories posted yet. Add a category and begin to communicate through community.");
			                }else{
			                	while($row = mysqli_fetch_assoc($res)){
			                    echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
			                    	echo"<div class='thumbnail'>";
			                    		echo "<h4>".$row["cat_name"]."</h4>";
			                    		echo "<img src=\n".$row['photo'].">";
			                    		echo "<div class='caption'>";
			                    			echo "<h4 class='pull-right'></h4>";
			                    			
			                    			echo "<p>" .$row["cat_desc"]."</p>";
			                    			echo "<button type='button' class='btn btn-info btn-sm'>See more</button>";
			                    			echo  "<button style='float:right;' type='button' class='btn btn-info btn-sm' name='".$row["cat_name"]."' id='new_topic' >New Topic</button>";
			                    		echo "</div>";
			                    		
			                    	echo "</div>";
			                    echo "</div>";
			                    
			                    // data-target='#modal_topic' data-toggle='modal'

			                	}
			                }
			            }
			        ?>
			       	<!--moal for adding a new topic-->
			        <div class="modal" id="modal_topic" role="dialog" style="">
			 
	                	<div class="modal-dialog modal-md">
	                		<div class="modal-content">
	                			<div class="modal-header">
	                				<!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
	                				<h3>Add a New Topic</h3>
	                				<div id="nm"></div>
	                			</div>
	                			<div class="modal-body">
	                			<div class="form-group">
	                				<form method="post" id="AddTopic" action="AddTopic.php">
	                					<label>Subject</label>
	                					<input type="text" name="subject" class="form-control" id="subject">
	                					<label>Category</label>
	                					<select name="Topic_cat">
	                						<?php
	                							$sql = "select * from categories";
	                							$result=mysqli_query($conn,$sql);
	                							while($row = mysql_fetch_assoc($result)){
	                								echo '<option value="'.$row['cat_id'].'">'.$row['cat_name']. '</option>';

	                							}
	                						?>
	                					</select><br>
	                					<label>Messege</label>
	                					<textarea name="content" class="form-control" cols="100" rows="5" id="content"></textarea></br>
	                					<input type="submit" name="submit" value="Add a new Topic" class="btn btn-info" id="submit">
	                				</form>
	                			</div>
	                			</div>
	                			<div class="modal-footer">
	                				<button type="button" class="btn btn-defaoult" data-dismiss="modal">Close</button>
	                			</div>
		                	</div>
	                	</div>

</div>
</div>

<form id="userForm" method="post" style="display:none;">
	<input type="text" name="email"/>
</form>
<script type="text/javascript">
$('#userForm').find('[name="email"]').val(...);

bootbox.dialog({
	message:$('#userForm')
});

$('#userForm')
	.formValidation({
		...
	})
	.on('success.form.fv',function(e){
		e.preventDefault();

		$.ajax({
			url:'',
			data:$form.serialize()
		}).success(function(response){

		});
	});

</script>

</div>


			    <!--adding the footer-->         
 <?php
	include("../include/footer.php");
?>  	




<!--<script type="text/javascript">
	$(document).ready(function(){
		$('#AddTopic').on('submit',function(event){
			event.preventDefault();
			if($('#subject').val()==""){
				alert("Subject is reqiured");
			}else if($('#content').val()==''){
				alert("content is reqired")
			}else{
				$.ajax({
					url:"AddTopic.php",
					method:"POST",
					data:$('#AddTopic').serialize(),
					success:function(data){
						$('#AddTopic')[0].reset();
						$('#modal_topic').modal('hide');
					}
				})
			}
		})

	})


	$('.row').on('click','#new_topic',function(){
		var ele = $(this).attr("name");

		console.log(ele);
		$('#nm').html("<h4>"+ ele +"</h4>");
		$('#modal_topic').modal('show');
		
	});

</script>




<!--<script type="text/javascript">
	$(function(){
		$("input#submit").click(function(){
			$.ajax({
				type: "POST",
				url: "../php/AddTopic.php"
				data: $('form.AddTopic').serialize(),
				success:function(mes){
					$("#Thanks").html(mes)
					$("#form-content").modal('hide');
			},
			error:function(){
				alert("failure");
			}
				
			});
			});
		});
	
</script>-->