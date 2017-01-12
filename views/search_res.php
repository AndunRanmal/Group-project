
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>search result</title>
     <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet"> 
    <link href="css/shop-homepage.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Droid Sans">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Josefin Slab">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Fontin-Sans">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fertigo">

        
        <style type="text/css">
            
         </style>
     
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <style>
        /*body{
                font-family: 'Fertigo';
                font-weight: normal;
                font-size: 16px;
            }
*/     
      p{
        font-family: 'Fontin-Sans';
        font-size: 17px;
        font-weight: normal;
      }
      h4{
        font-family: 'Droid Sans';
        font-weight: bold;
      }
      .col-md-9 a{
        font-family: 'Droid Sans';
        font-weight: bold;
      }
      h2{
        font-family: 'Josefin Slab';
        font-weight: bold;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#seemore").click(function(){
            $("#p2").toggle('slow');
            $("#p3").toggle('slow');
            
        });
    });
</script>

<?php
session_start();
?>
  
</head>
<body>

	 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">TravelSL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="login.php">Forum</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
                <form action="../php/search.php" method="get">
                    <input type="text" name="search" placeholder="place your search hear" class="text">
                    <input type="submit" name="go" value="Search" class="button">
                </form>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



<div class="container">

        <div class="row">

            <div class="col-md-3">
            <!--List of categories-->
            <img src="images/travelSL.png" style="width:300px;height:300px;padding:0 40px 10px -10px;">
                
                <div class="list-group" style="padding:0 40px 10px 0px;">
                    
            <?php
        /*Calling  the session used in search.php*/
          //  session_start();
            echo "<h4>Name: ".$_SESSION["name"]."</h4>" ;
            echo "<h4>Category: " .$_SESSION["category"]."</h4>";
            echo "<h4>Address: " .$_SESSION["address"]. "</h4>";
            echo "<h4>Distance from Colombo: ".$_SESSION["distance"]."</h4>";
            echo "<h4>Rating: </h4>";
            $rate = $_SESSION["rating"];
            
            for($x=1;$x<=$rate;$x++) {
                echo '<img style="height:25px;width:25px;" src="images/Full_star.jpg" />';
            }
            if (strpos($rate,'.')) {
                echo '<img style="height:25px;width:25px;" src="images/half_star.jpg" />';
                $x++;
            }
            while ($x<=5) {
                echo '<img style="height:25px;width:25px;" src="images/blank_star.png" />';
                $x++;
            }
            echo "<br/>";
        ?>    
              
    <div class="col-md-3" style="padding:0px 10px 0px 5px;">
        <?php
        /*Calling  the session used in search.php
            session_start();
            echo "<h4>Name: ".$_SESSION["name"]."</h4>" ;
            echo "<h4>Category: " .$_SESSION["category"]."</h4>";
            echo "<h4>Address: " .$_SESSION["address"]. "</h4>";
            echo "<h4>Transport: " .$_SESSION["transport"]. "</h4>";
            echo "<br/>";*/
        ?>    
    </div>
    </div>
    </div>

    
    <div class="container-fluid">
    <div class="col-md-9">
<?php        echo "<h2>A Description About " .$_SESSION["name"]. "</h2>";
        echo "<br/>";
        echo "<img src=\n".$_SESSION['photo']." style='height:400px;width:800px;border:5px solid black;'/\n>";
        echo "<br/><br>";
        echo "<p style='text-align:justify;'>" .$_SESSION["description1"]. "</p>";
        echo "<p id='p2' style='display:none;text-align:justify;'>" .$_SESSION["description2"]. "</p>";
       // echo "<p id='p3' style='display:none;text-align:justify;'>" .$_SESSION["description3"]. "</p>";

        //echo "<br/>";
?>
<button class='btn btn-info sm' id='seemore'>See more</button><hr/>
</div>
<div class="row text-center">
<h4>You may also interested in following</h4>

<?php
    include("../config/config.php");
    $cat=$_SESSION["category"];

    $sql="select * from `places` where `category`= '$cat' order by rand() limit 4";
    $res=mysqli_query($conn,$sql);
    


    if (mysqli_num_rows($res)==0){
        echo "There are no any suggestion related to your search!";
    }else{
        while ($row=mysqli_fetch_assoc($res)){
            //echo "<li><a href=''>".$row['name']."<br> <img src=".$row['photopath']." style='width:200px;height:80px;'></a></li><br>";
            //echo "<li><a href=''><img src=".$row['photopath']." style='width:200px;height:80px;'><br/>".$row['name']."</a></li></br>";
            ?>
            
        
            <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="<?php echo $row['photopath']?>" alt="">
                            <div class="caption">
                                <h3><?php echo $row['name']?></h3>
                                <p>
                                    <button class="btn btn-info" id="seemore" name="<?php echo $row['pid']?>" onclick="myFunction();"">See More</button>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                
    <?php
        }
    }

?>
</div>

</div>
</div>
</div>
</body>

 <script type="text/javascript">
        function myFunction(){
        window.location.href='seemore.php';
    }
    </script>


    <script type="text/javascript">
        $('.row').on('click','#seemore',function(){
            var name = $(this).attr('name');
            console.log(name);
            $.ajax({
                url:"/project/Group-project/php/seemore.php",
                method: "POST",
                data:{
                    category:name
                },

                success:function(data){
                    console.log("Done"+ data);
                    //$('#result').html(data);
            }
            });
            

        });
    </script>
</html>