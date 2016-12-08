<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page-TourSL</title>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

        <!-- Import Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!--Import Custom CSS -->
        <link href="css/shop-homepage.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fertigo">
        
        <style type="text/css">
            body{
                font-family: 'Fertigo';
                font-weight: bold;
                font-size: 16px;
            }
            .signin{
                border-top-right-radius: 5px 5px;
                border-bottom-right-radius: 5px 5px;
                border-bottom-left-radius: 5px 5px;
                border-top-left-radius: 5px 5px;
                margin: 10;
                padding: 3px 15px;
                outline: none;
                float: right;
                color: #ffffff;
                border: solid 1px #0076a3; border-right:0px;
                background: #0095cd;
                background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
                background: -moz-linear-gradient(top,  #00adee,  #0078a5);
                text-align: center;
                font-size:14px;
            }
        </style>
            <script type="text/javascript">
                function testsearch(){
                if(document.search_form.search.value==''){
                    alert("Please enter a place you want to search");
                    return false;
                    }
                }
            </script>
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
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="login.php">Forum</a>
                    </li>
                    <li>
                        <a href="#">Contact US</a>
                    </li>
                    <li>
                        <form action="../php/search.php" method="get" name="search_form" onSubmit="return testsearch()">
                            <input type="text" name="search" placeholder="place your search hear" class="text">
                            <input type="submit" name="go" value="Search" class="button">
                        </form>
                    </li>
                </ul>
                <?php
                if(isset($_SESSION["email"])){
                ?>
                <div text-align="right">
                    <h3> Welcome <?php echo $_SESSION['email'];?></h3>
                    <a href="#" id="logout">Logout</a>
                    </div>
                    <?php
                }else{
                    ?>
               <button class="signin" name="login" id="login" data-toggle="modal" data-target="#loginModal">Login</button>
               <?php
           }
           ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>