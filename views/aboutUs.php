<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="logo.ico" type="image/x-icon" />

    <title>About Us - TravelSL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">

    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>

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
                        <a href="#">Contact Us</a>
                    </li>

                </ul>

            </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h3>TravelSL</h3><p>This is the travel guide all tourists would find the best features in. It's a complete tour guide in your mobile device. TravelSL is special because it allows a tourist to browse through tourist attractions in Sri Lanka through a mobile app or a web browser while engaging in a community of travellers.</p>
                <h3>Meet our team</h3>
                <p>We are a group of individuals who provide innovative solutions. Our team is equipped with a variety of knowledge personnel.</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/adminImages/andun.jpg" alt="">
                <h3>Andun Ranmal</h3>
                 <p>Web Developer</p>
                
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/adminImages/namal.jpg" alt="">
                <h3>Kanishka Namal</h3>
                <p>Mobile Developer</p>
                
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/adminImages/viduni.jpg" alt="">
                <h3>Viduni Wickramarachchi</h3>
                <p>Web Developer</p>
                
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/adminImages/kasun.jpg" alt="">
                <h3>Kasun Maduranga</h3>
                <p>Developer</p>
                
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/adminImages/dulana.jpg" alt="">
                <h3>Dulana Kasunjith</h3>
                <p>Database Administrator</p>
                
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/adminImages/pasindu.png" alt="">
                <h3>Pasindu Srimal</h3>
                 <p>Project Manager<p>
                
            </div>
        </div>

        <hr>

        <div>
        <h4 style="text-align:center"> We are based at University of Colombo School of Computing</h4>
        <p style="text-align:center"> Address : Kumaratunga Munidasa Mawatha, Colombo 00700 </p>
        <p style="text-align:center"> Mobile : +9477657456</p>

        </div>

        <hr>


        <div id="map"></div>
    <script>
      function initMap() {
        var Colombo = {lat: 6.9271, lng: 79.8612}
        var UCSC = {lat: 6.9022, lng: 79.8607};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: Colombo
        });
        var marker = new google.maps.Marker({
          position: UCSC,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAONk_h_xW0rvwtp5-kwwF_qg4vC8K6NrU&callback=initMap">
    </script>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; TravelSL</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
