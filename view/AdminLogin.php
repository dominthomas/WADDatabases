<?php session_start();?>
<!DOCTYPE html>
<?php require_once '../controller/adminLogin.php'; ?>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
  <link rel="icon" href="TabIcon.jpg">
  <style type="text/css">

  .panel-login {
  	border-color: #ccc;
  	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  }
  .panel-login>.panel-heading {
  	color: #00415d;
  	background-color: #fff;
  	border-color: #fff;
  	text-align:center;
  }
  .panel-login>.panel-heading a{
  	text-decoration: none;
  	color: #666;
  	font-weight: bold;
  	font-size: 15px;
  	-webkit-transition: all 0.1s linear;
  	-moz-transition: all 0.1s linear;
  	transition: all 0.1s linear;
  }
  .panel-login>.panel-heading a.active{
  	color: #006dcc;
  	font-size: 18px;
  }
  .panel-login>.panel-heading hr{
  	margin-top: 10px;
  	margin-bottom: 0px;
  	clear: both;
  	border: 0;
  	height: 1px;
  	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
  	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  }
  .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
  	height: 45px;
  	border: 1px solid #ddd;
  	font-size: 16px;
  	-webkit-transition: all 0.1s linear;
  	-moz-transition: all 0.1s linear;
  	transition: all 0.1s linear;
  }
  .panel-login input:hover,
  .panel-login input:focus {
  	outline:none;
  	-webkit-box-shadow: none;
  	-moz-box-shadow: none;
  	box-shadow: none;
  	border-color: #ccc;
  }
  .btn-login {
  	background-color: #006dcc;
  	outline: none;
  	color: #fff;
  	font-size: 14px;
  	height: auto;
  	font-weight: normal;
  	padding: 14px 0;
  	text-transform: uppercase;
  	border-color: #0044cc #0044cc #002a80;
  }
  .btn-login:hover,
  .btn-login:focus {
  	color: #fff;
  	background-color: #0044cc;
  	border-color: #0044cc;
  }
  .forgot-password {
  	text-decoration: underline;
  	color: #888;
  }
  .forgot-password:hover,
  .forgot-password:focus {
  	text-decoration: underline;
  	color: #666;
  }

  .btn-register {
  	background-color: #006dcc;
  	outline: none;
  	color: #fff;
  	font-size: 14px;
  	height: auto;
  	font-weight: normal;
  	padding: 14px 0;
  	text-transform: uppercase;
  	border-color: #0044cc #0044cc #002a80;
  }
  .btn-register:hover,
  .btn-register:focus {
  	color: #fff;
  	background-color: #0044cc;
  	border-color: #0044cc #0044cc #002a80;
  }
  </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
        data-target="#myNavBar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="index.php">Fly Guys</a>
       </div>
       <div class="collapse navbar-collapse" id="myNavBar">
         <ul class="nav navbar-nav navbar-right ">
           <li><a href="index.php">Book</a></li>
           <li><a href="FlightStatus.php">Status</a></li>


           <li>
             <div class="btn-toolbar">
               <a href="admin2.php">
                   <button class="btn btn-primary navbar-btn" type="button">Admin
                     <span class="glyphicon glyphicon-user"></span>
                   </button>
                 </a>
            <button class="btn btn-primary navbar-btn dropdown-toggle" type="button"
             data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="basketview.php">Basket</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="UserLogin.php"><strong>Sign in</Strong> </a></li>
            </ul>
            </div>
          </li>
         </ul>
       </div>
     </div>
  </nav>
  <div class="container">
      	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<div class="panel panel-login">
  					<div class="panel-heading">
  						<div class="row">
  							<div class="col-xs-6">
  								<a href="#" class="active" id="login-form-link">Admin Login</a>
  							</div>
  							<div class="col-xs-6">
  								<a href="#" id="register-form-link">Admin Register</a>
  							</div>
  						</div>
  						<hr>
  					</div>
  					<div class="panel-body">
  						<div class="row">
  							<div class="col-lg-12">
  								<form id="login-form" action="../controller/adminLogin.php" method="post" role="form" style="display: block;">
  									<div class="form-group">
  										<input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
  									</div>
  									<div class="form-group">
  										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
  									</div>
  									<div class="form-group">
  										<div class="row">
  											<div class="col-sm-6 col-sm-offset-3">
  												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
  											</div>
  										</div>
  									</div>
  										</div>
  									</div>
  								</form>
  								<form id="register-form" action="../controller/adminLogin.php" method="post" role="form" style="display: none;">
  									<div class="form-group">
  										<input type="text" name="emailSignUp" id="username" tabindex="1" class="form-control" placeholder="Enter Email" value="">
  									</div>
  									<div class="form-group">
  										<input type="password" name="passwordSignUp" id="password" tabindex="2" class="form-control" placeholder="Password">
  									</div>
  									<div class="form-group">
  										<input type="password" name="confirmPasswordSignUp" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
  									</div>
                    <div class="form-group">
                      <input type="password" name="adminkey" id="password" tabindex="2" class="form-control" placeholder="Enter Admin Key">
                    </div>
  									<div class="form-group">
  										<div class="row">
  											<div class="col-sm-6 col-sm-offset-3">
  												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Admin">
  											</div>
  										</div>
  									</div>
  								</form>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
</body>
</html>

  <script>
  $(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

  </script>
