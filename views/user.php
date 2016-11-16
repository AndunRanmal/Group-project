<!DOCTYPE html>
<html>
<head>
	<title>user</title>

	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
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
                <a class="navbar-brand" href="index.php">TourSL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="login.php">Forum</a>
                    </li>
                    <li>
                        <a href="#">Contact US</a>
                    </li>	
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
    	<div class="row">
    		<div class="col-md-3" style="padding:0 50px 0 0px;">

            <?php
                session_start();
                echo"<table>";
                echo "<thead>";  
                echo "<tr>";
                echo "<th><img src='images/user.png' style='width:100px;height:100px;'></th>";
                echo "<th><h4>Login as: ".$_SESSION["user"]."</h4></th>"; 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                echo "<tr>";
                echo "<td>Name</td>";
                echo "<td>".$_SESSION["FName"]. " " .$_SESSION["LName"]. "</td>";
                echo "</tr>";
                echo "</tbody>";
                echo "<table>";       
                        

            ?>

    		
    		<form action="../php/logout.php" method="post">
    			<input type="submit" name="logout" value="Logout" class="button">
    		</form>
    				
			
				
			</div>
		</div>
	</div>

</body>
</html>