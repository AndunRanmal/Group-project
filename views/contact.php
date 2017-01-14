<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="logo.ico" type="image/x-icon" />

    <title>Contact Us - TravelSL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">       
	
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
            
<script type="text/javascript">   
function (validateform){         
var phone=document.InputForm.mob;
    var phoneno =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (phone.value == "")
			{
		    	window.alert("Please enter your mobile No.");
		         phone.focus();
		    	return false;
			}
    else if(!phoneno.test($("#mob").val()))  
        {  
        window.alert("wrong mobile phone no");  
        return false;   
        }
}
  </script>      
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="aboutUs.php">About Us</a>
                    </li>
                    <li>
                        <a href="login.php">Forum</a>
                    </li>
                    <li class="active">
                        <a href="contact.php">Contact Us</a>
                    </li>
                
                </ul>
                

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
<div class="container">
<div class="row">
<!--<div class="container960 container contact">-->
    <h2 style="color: #51e7ff">Feel free to Contact Us</h2>
    <div class="col-sm-6">
        <form action="../php/contactus.php" method="Post" name = "InputForm" onSubmit = "return validateform();"
>
            <input name="name" type="text" class="form-control" placeholder="Your Name" required="required">
            <input name="email" type="Email" class="form-control" placeholder="Your Email" required="required">
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone Number" required="required">
            <textarea name="comment" style="height: 100px" class="form-control" placeholder="Your Message"></textarea>
            <div>
                <input type="submit" name="submit" value="Send" class="btn btn-primary">
                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                <button type="reset" class="btn btn-primary">Clear</button>
            </div>
        </form>
    </div>
    <div class="col-sm-6">
        <form>
            <div>
            <mark>
                <strong>TravelSL</strong> <br>
                University of Colombo School of Computing <br>
                Colombo 7 <br>
                Tel : 071-1985678 <br>
                Email : travelslucsc@gmail.com
            </mark>
            </div>
        </form>
    </div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</div>
</body>

</html>
