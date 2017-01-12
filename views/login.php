<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="icon" href="logo.ico" type="image/x-icon" />

	<title>Forum Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    //show and hide signin and signup forms
    	$(document).ready(function(){
    		$("#signup").click(function(){
    				$("#login").hide();
    				$("#signup_form").show();
    		});
    	});

    	$(document).ready(function(){
    		$("#signin").click(function(){
    			$("#login").show();
    			$("#signup_form").hide();
    		});
    	});
    </script>
	<script type="text/javascript">
	//validating signup form
		function testform(){
			if(document.signup.FName.value==''){
				alert("Please enter your First Name");
				return false;
			}
			if(document.signup.LName.value==''){
				alert("Please enter your last Name");
				return false;
			}
			if(document.signup.email.value==''){
				alert("Please enter your email address");
				return false;
			}
			if(document.signup.pass.value==''){
				alert("Please enter your password");
				return false;
			}
			if(document.signup.confirm_pass.value==''){
				alert("Please enter your confirm password");
				return false;
			}
			if(document.signup.pass.value!=document.signup.confirm_pass.value){
				alert("Your confirm password and password doesn't match");
				return false;
			}
			return confirm("Do you want to register as a new user");
		}
//validating signin form
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
//validating fields in sigup form
		function validateFName(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style green
	        document.getElementById(x).style.background ='#ccffcc';
	        // Hide error prompt
	        document.getElementById('FnameError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('FnameError').style.display = "block";
	        return false; 
	      }
	    }

	    function validateLName(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style green
	        document.getElementById(x).style.background ='#ccffcc';
	        // Hide error prompt
	        document.getElementById('LnameError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('LnameError').style.display = "block";
	        return false; 
	      }
	    }

		// Validate email
	    function validateEmail(email2){ 
	      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	      if(re.test(email2)){
	        document.getElementById('email2').style.background ='#ccffcc';
	        document.getElementById('emailError').style.display = "none";
	        return true;
	      }else{
	        document.getElementById('email2').style.background ='#e35152';
	        document.getElementById('emailError').style.display = "block";
	        return false;
	      }
	    }

	    //validate password
	    function validatePass(pass){
	    	var re = /^(?=.*\d)(?=.*[a-z]).{6,}$/;
	    	if(re.test(pass)){
	    		document.getElementById('pass').style.background ='#ccffcc';
	    		document.getElementById('passError').style.display = "none";
	    		return true;
	    	}else{
	    		document.getElementById('pass').style.background = '#e35152';
	    		document.getElementById('passError').style.display = "block";
	    		return false;
	    	}
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
            </div>
            </nav>
	<br>
<br>
<br><br>
<div class="container">
<div class="row">
<!-- Signup and Login area -->

    <!-- Login area -->
    <div class="forum">
	    <div class="login" id="login">
	    <h3 style="color:#17202A;">Login to TravelSL</h3>
	    <hr/>
	        <form name=login class="login-inner" id="login_form" method="post" action="../php/login.php" onSubmit="return testlogin()">
	            <input type="email" class="form-control email" placeholder="Email" name="email" id="email" onblur="validateEmail(value)">
	            <input type="password" class="form-control password" placeholder="Password" name="pass" id="pass1">
	            <input class="btn btn-block btn-md btn-primary submit" type="submit" name="submit" value="Sign-In" >
	        </form><br>
	        <label style="color:#17202A;">Register as a new user</label>
	        <button class="btn btn-block btn-sm btn-primary register" id="signup">SignUp</button>
	    </div>
    <!-- Signup area -->
	     <div id="signup_form" style="display:none;" class="login">
	        <form name="signup" method="post" action="../php/signup.php" onsubmit="return testform()">
	            <h3 style="color: #17202A;">Register as a new user</h3>
	            <hr/>
	            <fieldset>
	            <input type="text" class="form-control name" placeholder="First Name" name="FName" id="FName" onblur="validateFName(name)">
	            <span id="FnameError" style="display:none;">Your name must only contain alphebatical letters</span>
	            </fieldset>
	            <fieldset>
	            	<input type="text" class="form-control name" placeholder="Last Name" name="LName" id="LName" onblur="validateLName(name)">
	            	<span id="LnameError" style="display:none;">Your name must only contain alphebatical letters</span>
	            </fieldset>
	            <fieldset>
	            	<input type="email" class="form-control email" placeholder="Email Address" name="email" id="email2"  onblur="validateEmail(value)">
	            	<span id="emailError" style="display:none;">Your email address in invalid. Please check again</span>
	            </fieldset>
	            <fieldset>
	            	<input type="password" class="form-control password " placeholder="Password" name="pass" id="pass" onblur="validatePass(value)">
	            	<span id="passError" style="display:none;">Your password must contain at least a number and a lowercase letter</span>	
	            </fieldset>
	            <fieldset>
	            	<input type="password" class="form-control password" placeholder="Confirm your Password" name="confirm_pass" id="confirm_pass">	
	            	
	            </fieldset>
	            <input class="btn btn-block btn-md btn-primary submit" type="submit" name="submit" value="SignUp" >
	        </form><br>
	        <label style="color:#17202A;">Already a member?</label>
	        <button class="btn btn-block btn-sm btn-primary register" id="signin">Sign-In</button>
	    </div>
    </div>


</div>
</div>
<!-- End of Signup and Login area -->

</body>
</html>

