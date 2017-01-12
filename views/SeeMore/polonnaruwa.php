<!DOCTYPE html>
<html lang="en">

<?php include("../../config/config.php");
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-item.css" rel="stylesheet">
    <link href="../css/shop-homepage1.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
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
                        <a href="#">Contact US</a>
                    </li>

                

            <!-- </div>

            <!-- Search field

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav"> -->
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

    <!-- Page Content -->
     <div class="container">
     <div class="row">
        <div class="col-md-3">
            <p class="lead">Categories</p>
                <div class="list-group">
                    <a href="../adventure.php" class="list-group-item">Adventure</a>
                    <a href="../historical.php" class="list-group-item">Historical</a>
                    <a href="../beaches.php" class="list-group-item">Beaches</a>
                    <a href="../sighseeing.php" class="list-group-item">Sightseeing</a>
                    <a href="../camping.php" class="list-group-item">Camping</a>
                    <a href="../waterfall hunting.php" class="list-group-item">Waterfall hunting</a>
                    <a href="../climate.php" class="list-group-item">Climate</a>
                    <a href="../cities.php" class="list-group-item">Cities</a>
                    <a href="../food.php" class="list-group-item">Food</a>
                    <a href="../hotels.php" class="list-group-item">Hotels</a>
                </div>
        </div>

            <div class="col-md-9">

            

                <div class="thumbnail">
                    <img class="img-responsive" src="../<?php echo $row['photopath']?>">
                    <div class="caption-full">
                        <h4 class="pull-right"></h4>
                        <h4><?php echo $_SESSION['name']?></a>
                        </h4>
                        
                        

<<<<<<< HEAD:views/SeeMore/airballooningKandalamaS.php
                        <p>Category: <strong><?php echo $_SESSION['category']?></strong></p>
                        <p>Address: <strong><?php echo $_SESSION['address']?></strong></p>
                        <p>Distance from Colombo: <strong><?php echo $_SESSION['distance']?></strong></p>
                        <p>Nearby City: <strong><?php echo $_SESSION['nearbyCity']?></strong></p>
                        <p>Ticket information: <strong><?php echo $_SESSION['tickets']?></strong></p>
                        <p><?php echo $_SESSION['description1']?></p>
                        <p><?php echo $_SESSION['description2']?></p>
=======
                        <p>Category: <strong><?php echo $row['category']?></strong></p>
                        <p>Address: <strong><?php echo $row['address']?></strong></p>
                        <p>Distance from Colombo: <strong><?php echo $row['distance']?></strong></p>
                        <p>Nearby City: <strong><?php echo $row['nearbyCity']?></strong></p>
                        <p>Ticket information: <strong><?php echo $row['tickets']?></strong></p>
                        <p><?php echo $row['description1']?></p>
                        <p><?php echo $row['description2']?></p>
>>>>>>> 4e9552ee23beb517ecb2cdb26c7bc5c65ef2d402:views/SeeMore/polonnaruwa.php


                        <?php
                    
                    ?>

                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            ABC
                            <span class="pull-right">10 days ago</span>
                            <p>This place was great for alot of activities including camping. I would definitely go another day!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            CDE
                            <span class="pull-right">12 days ago</span>
                            <p>Great hospitality and alot of fun. Hands on experience of exciting adventures</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            GHI
                            <span class="pull-right">15 days ago</span>
                            <p>Best place to enjoy with a group of friends. Ticket prices are reasonable.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
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
