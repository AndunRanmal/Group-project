<!DOCTYPE html>
<html>

<?php include("../config/config.php"); ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="logo.ico" type="image/x-icon" />

    <title>Home Page-TravelSL</title>

        <!-- Import Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!--Import Custom CSS -->
        <link href="css/shop-homepage.css" rel="stylesheet">

    <!--import google api-->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
			function initialize(){
				var Colombo=new google.maps.LatLng(6.9271,79.8612);
				var mapProp={
					center:Colombo,
					zoom:7,
					mapType:google.maps.MapTypeId.ROADMAP
				};
				var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
				var marker=new google.maps.Marker({
					position:Colombo,
				});
				marker.setMap(map);
			}
			google.maps.event.addDomListener(window,'load',initialize);
		</script>	

<body>

<!-- +++++++++++++++++++++++++++++++++++++++++ Navigation ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
</head>
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
                        <a href="contact.php">Contact Us</a>
                    </li>

                    </ul>

                    <ul class="nav navbar-nav">

                <form action="../php/search.php" method="get">
                    <input type="text" name="search" placeholder="Place your search here" class="text">
                    <input type="submit" name="go" value="Search" class="button">
                </form>

                </ul>

                

            </div> 

            <!-- Search field -->

        </div>
        <!-- /.container -->
    </nav>

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
            <!--List of categories-->
            <img src="images/travelSL.png" style="width:300px;height:300px;padding:0 40px 10px -10px;">
                <p class="lead"><strong>Categories</strong></p>
                <div class="list-group" style="padding:0 40px 10px 0px;">
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

                <!--Calling function(Google Map)-->
                <a href="http://kanishkanamal.comuf.com/map.html"><img src="images/map.png" style="width:200px;height:200px;"></a>
                <br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="http://kanishkanamal.comuf.com/map.html"><strong>Search from Map</strong></a>
            </div>

            <div class="col-md-9">

            <!-- ++++++++++++++++++++++++++++++++++ Image Slider ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/4.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/6.jpg" alt="">
                                </div>
                            </div>

                            <!-- Arrows to move images -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a> 

                        </div>
                    </div>
                </div>

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++ Random Places +++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    
                    <div class="row">
                        
                        <!-- Loading records from the database -->
    
                            <?php
                                $query = "select * from places order by rand() limit 6  ";
                                $result = mysqli_query($conn,$query);
                                while($row=mysqli_fetch_assoc($result)){

                            ?>
                                    <div class="col-sm-4 col-lg-4 col-md-4">
                                        <div class="thumbnail">
                                            <img style="width:320px; height:150px" src="<?php echo $row['photopath']?>" alt="">
                                            <div class="caption">
                                                <h4><?php echo $row['name']?></h4>
                                                <p>Nearby City: <?php echo $row['nearbyCity']?></p>
                
                                                <p>
                                                    <button class="btn btn-primary" id="seemore" name="<?php echo $row['pid']?>" onclick="myFunction();">See More</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>     
                            <?php
                                }
                            ?>
                    </div>

                

            </div>

        </div>

    </div>
<!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
           <p>Download the TravelSL mobile application to surf through Sri Lanka while travelling!</p>
        </footer>

    </div>
    <!-- /.container -->
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
