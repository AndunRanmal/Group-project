<!DOCTYPE html>
<html>
<head>
	<title>search result</title>
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
                <a class="navbar-brand" href="index.html">TourSL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="login.html">Forum</a>
                    </li>
                    <li>
                        <a href="#">Contact US</a>
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

</body>
</html>