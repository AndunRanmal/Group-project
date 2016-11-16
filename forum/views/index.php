<?php
	include("../include/header.php");
    include("../../config/config.php");
?>
<div class="container">
    	<div class="row">

    		<div class="col-md-3" style="padding:0 50px 0 0px; text-align:center">

         
            <?php 
            session_start();
            $user = $_SESSION["uid"];
            $sql = "select * from `user` where `uid` ='$user'"; 
            $res = mysqli_query($conn,$sql);
            if (mysqli_num_rows($res)==1){
                while ($row = mysqli_fetch_assoc($res)){
                    $photo = $row["photo"];
                }
            }

           /* echo"<img src='images/user.png' style='width:100px;height:100px;'>";*/
            echo "<img src=\n".$photo." style='height:150px;width:150px;border-radius:50%;'/\n>";
           // echo "<img src='data:image/jpeg;base64,".base64_encode($_SESSION["Photo"])."'style='height:150px;width:150px'/>";

            echo "<h4>You are log as: ".$_SESSION["FName"]. " ".$_SESSION["LName"]. "</h4>";
            ?>
            <form action="../php/upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-info btn-md">
            <input type="submit" value="Upload Image" name="submit" class="btn btn-info btn-md">
            </form>
            <form action="category.php">	
            <button class="btn btn-info btn-md" formaction="category.php">Add a new category</button>
            <button class="btn btn-info btn-md" formaction="topic.php">Add a new Topic</button>
            <button class="btn btn-info btn-md" formaction="../../php/logout.php">Logout</button>
            </form>
			</div>
		</div>

        <?php

            $sql = "select * from `categories`";
            $res = mysqli_query($conn,$sql);
            if(mysqli_query($conn,$sql)){
                if (mysqli_num_rows($res)==0){
                    echo ("There isn't any categories posted yet. Add a category and begin to communicate through community.");
                }else{
                    echo "<table border='1' align='center' cellpadding='10'>
                        <tr>
                            <th>Category</th>
                            <th>Last Topic</th>
                        </tr>";

                    while ($row = mysqli_fetch_assoc($res)){
                        echo "<tr>";
                            echo "<td class='leftpart'>";
                                echo "<h4> <a href=''>".$row["cat_name"]. "</a></h4>". $row["cat_desc"];
                            echo "</td>";
                            echo "<td class='rightpart'>";
                                echo "<a href=''>Topic Subject</a>";
                            echo "</td>";
                        echo "</tr>";

                    }
                }
            }

        ?>



</div>
<?php
	include("../include/footer.php");
?>