<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript">
		function testform(){
			if(document.signin.FName.value==''){
				alert("Please enter your First Name");
				return false;
			}
			if(document.signin.LName.value==''){
				alert("Please enter your last Name");
				return false;
			}
			if(document.signin.email.value==''){
				alert("Please enter your email address");
				return false;
			}
			if(document.signin.pass.value==''){
				alert("Please enter your password");
				return false;
			}
			if(document.signin.confirm_pass.value==''){
				alert("Please enter your confirm password");
				return false;
			}
			if(document.signin.pass.value!=document.signin.confirm_pass.value){
				alert("Your confirm password and password doesn't match");
				return false;
			}
			return confirm("Do you want to register as a new user");
		}

		function testlogin(){
			if(document.login.email.value==''){
				alert("Please enter your email address");
				return false;
			}
			if(document.login.pass.value==''){
				alert("Please enter your password");
				return false;
			}
			return confirm("Login as a user");
		}
	</script>

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
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Forum</a>
                    </li>
                    <li>
                        <a href="#">Contact US</a>
                    </li>
                
                </ul>
            </div>
            </div>
            </nav>
	<div class="container-fluid">
		<div class="col-md-6" style="padding:70px 60px 0 10px;">
			<h3 style="text-align:center;color:#0076a3;"><label>Log In</label></h3>
			<img src="images/user.png" style="width:100px;height:100px;">
			<form name="login" action="../php/login.php" method="post" onSubmit="return testlogin()">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email address" class="form-control">
				</div>
				<div class="form-group">
					<label for="pass">Password:</label>
					<input type="password" name="pass" id="pass" placeholder="Enter your password" class="form-control">
				</div>
				<div class="check-box">
					<label><input type="checkbox" name="checkbox">Remember me</label>
				</div>
				<input type="submit" name="submit" class="btn btn-info btn-block" value="Login">
			</div>
			</form>
		</div>

		<div class="col-md-6" style="padding:70px 60px 0 10px;">
			<h3 style="text-align:center;color:#0076a3;"><label>Sign Up Form</label></h3>
			<form name="signin" method="post" action="../php/signup.php" onSubmit="return testform()">
				<div class="form-horizontal">
					<div class="form-group">
						<label for="FName">First Name:</label>
						<input type="text" name="FName" value=""  placeholder="Enter your First name here" class="form-control">
					</div>
					<div class="form-group">
						<label for="LName">Last Name:</label>
						<input type="text" name="LName" value="" id="LName" placeholder="Enter your Last name here" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" value="" id="email" placeholder="Enter your Email address here" class="form-control">
					</div>
					<div class="form-group">
						<label for="pass">Password:</label>
						<input type="password" name="pass" value="" id="pass" placeholder="Enter your password here" class="form-control">
					</div>
					<div class="form-group">
						<label for="confirm_pass">Confirm Password:</label>
						<input type="password" name="confirm_pass" value="" id="confirm_pass" placeholder="Renter your password here" class="form-control">
					</div>
					<input type="submit" name="submit" class="btn btn-info btn-block" value="SignUp me as a new user">
				</div>
			</form>
		</div>
	</div>

</body>
</html>