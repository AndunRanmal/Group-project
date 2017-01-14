<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" href="logo.ico" type="image/x-icon" />

    <title>Forum-TravelSL</title>

        <!-- Import Bootstrap CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!--Import Custom CSS -->
        <link href="../css/shop-homepage.css" rel="stylesheet">

        


        <script type="text/javascript">
                function testsearch(){
                if(document.search_form.search.value==''){
                    alert("Please enter a place you want to search");
                    return false;
                    }
                }
        </script>
  
<body>

    <!-- Navigation -->
</head>
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
                <a class="navbar-brand" href="../../views/index.php">TravelSL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../views/aboutUs.php">About Us</a>
                    </li>
                     <li>
                    <?php
                    session_start();
                    if ($user = $_SESSION["uid"]){
                        echo "<a class='active' href='../views/index2.php'>Forum</a>";
                    }else{
                        echo "<a href='../../views/login.php'>";
                    }

                    ?>
                    </li>
                    <li>
                        <a href="../../views/contact.php">Contact Us</a>
                    </li>
                    
                </ul>
                
      				

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    