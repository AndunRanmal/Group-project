<!DOCTYPE html>
<html lang="en">

<?php include("../config/config.php"); ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="logo.ico" type="image/x-icon" />

    <title>Waterfall Hunting</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <!-- Navigation -->
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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

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
                    <a href="food.php" class="list-group-item">Foods</a>
                    <a href="hotels.php" class="list-group-item">Hotels</a>
                </div>
    </div>

        <!-- Jumbotron Header -->
        <div class="col-md-9">
        <header class="jumbotranHist hero-spacer">
            <img style= "no-repeat center center" src="../TSLphoto/waterfallMain.jpg" width="840" height="400" alt="">
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-md-9">
                
            </div>
        </div>
        </div>
        <br/>

        <!-- /.row -->

        
       <!-- Limiting description length retrived by words -->
        <?php  function truncate_string($str, $length) {
            if (!(strlen($str) <= $length)) {
                $str = substr($str, 0, strpos($str, ' ', $length)) . '...';
            }

            return $str;
        } ?>

        <!-- Loading records from the database -->
        <div class="row text-center">
            <h3>Pick your favourite Waterfall</h3>
            <br/>
            <?php
                $query = "select * from places WHERE category = 'waterfall' order by rand() limit 4  ";
                //$query = "select * from places order by rand() limit 4";
                $result = mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result)){

            ?>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="<?php echo $row['photopath']?>" alt="">
                            <div class="caption">
                                <h3><?php echo $row['name']?></h3>
                                <p><?php echo truncate_string($row['discription'],150); ?></p>
                                <p>
                                    <a href="#" class="btn btn-primary">See More</a>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
            

        </div>
        <!-- /.row -->

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
