<!DOCTYPE html>
<html lang="en">

<?php include("../config/config.php"); 
session_start();
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="logo.ico" type="image/x-icon" />

    <title><?php echo $_SESSION["name"]?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">
     <link href="css/shop-homepage.css" rel="stylesheet">


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
                        <a href="aboutUs.php">About Us</a>
                    </li>
                    <li>
                        <a href="login.php">Forum</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>

                

                <li>
                <form action="../php/search.php" method="get">
                    <input type="text" name="search" placeholder="Place your search here" class="text">
                    <input type="submit" name="go" value="Search" class="button">
                </form>
</li>
                </ul>
            </div>

        </div>
        <!-- /.container -->
    </nav>

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->    

    <!-- Page Content -->

    <div class="container">
    <div class="col-md-3">
        <p class="lead">Categories</p>
                <div class="list-group">
                    <a href="adventure.php" class="list-group-item">Adventure</a>
                    <a href="historical.php" class="list-group-item">Historical</a>
                    <a href="beaches.php" class="list-group-item">Beaches</a>
                    <a href="sighseeing.php" class="list-group-item">Sightseeing</a>
                    <a href="camping.php" class="list-group-item">Camping</a>
                    <a href="waterfall hunting.php" class="list-group-item">Waterfall hunting</a>
                    <a href="climate.php" class="list-group-item">Climate</a>
                    <a href="cities.php" class="list-group-item">Cities</a>
                    <a href="food.php" class="list-group-item">Food</a>
                    <a href="hotels.php" class="list-group-item">Hotels</a>
                </div>
    </div>

            <div class="col-md-9">

            

                <div class="thumbnail">
                    <img class="img-responsive" src="../TSLphoto/<?php echo $_SESSION['photopath']?>" style='height:400px;width:800px;'>
                    <div class="caption-full">
                        <h4 class="pull-right"></h4>
                        <h4><?php echo $_SESSION["name"]?></a>
                        </h4>
                        
                        

                        <p>Category: <strong><?php echo $_SESSION['category']?></strong></p>
                        <p>Address: <strong><?php echo $_SESSION['address']?></strong></p>
                        <p>Distance from Colombo: <strong><?php echo $_SESSION['distance']?></strong></p>
                        <p>Nearby City: <strong><?php echo $_SESSION['nearbyCity']?></strong></p>
                        <p>Ticket information: <strong><?php echo $_SESSION['tickets']?></strong></p>
                        <p><?php echo $_SESSION['description1']?></p>
                        <p><?php echo $_SESSION['description2']?></p>
                        <div class="ratings">
<?php
                        $rate = $_SESSION["rating"];
                        echo "<p style='font-weight:bold;'>Rating: ".$rate." stars</p>";
            
            for($x=1;$x<=$rate;$x++) {
                echo '<img style="height:20px;width:20px;" src="images/Full_star.jpg" />';
            }
            if (strpos($rate,'.')) {
                echo '<img style="height:20px;width:20px;" src="images/half_star.jpg" />';
                $x++;
            }
            while ($x<=5) {
                echo '<img style="height:20px;width:20px;" src="images/blank_star.png" />';
                $x++;
            }
            

?>                      
              </div>
              </div>
              </div>      

                    
                   
                

                <div class="well">

                <div class="text-left">
                        <h4 style="color:green;">Reviews</h4>
                    </div>


                <?php
                    $pid = $_SESSION["pid"];
                   // echo $pid;
                    
                    $comment = "select * from comme where pid = $pid order by rand() limit 5";

                    $res  = mysqli_query($conn,$comment);

                    if(mysqli_num_rows($res)==0){
                        echo "No reviews for this place yet.";
                    }else{
                        while ($row = mysqli_fetch_assoc($res)) {
                           // echo $row["comment"];
                            $_SESSION["comment"] = $row["comment"];
                        
                    
                   // echo $_SESSION["comment"];
                ?>

                    
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            ABC
                            <span class="pull-right">10 days ago</span> -->
                            <p><?php echo $_SESSION["comment"] ?></p>
                        </div>
                    </div>

                    <hr>
<?php
}
}
?>
               

            </div>

            <h3> Post a review </h3>

            <form class="form-horizontal" method="POST" action="../php/comment.php">

                <form class="form-horizontal" role="form">                                   
                    <div class="form-group">
                        <label class="col-md-2 control-label" style="text-align:left">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="uname" placeholder="Your username"/>
                        </div>
                    </div>

                <form class="form-horizontal" role="form">                                   
                    <div class="form-group">
                        <label class="col-md-2 control-label" style="text-align:left">Comment</label>
                        <div class="col-md-10">
                            <textarea name="review" rows="5" cols="94" placeholder="Your review"></textarea>
                        </div>
                    </div>
                <div class="panel-footer">
                    <button type="reset" class="btn btn-default">Clear</button>
                    <button type="submit" class="btn btn-primary pull-right" name="Post_Review">Post Review</button>
                </div> 
            </form>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Download the TravelSL mobile application to surf through Sri Lanka while travelling!</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
