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
  <link rel="stylesheet" href="css/adminLoginCSS.css" type ="text/css">
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
                  <?php if(isset($_SESSION['email'])):?>
                  <p>Hello <?=$_SESSION['email']?></p>
                  <?php endif; ?>
  								<form id="login-form" action="../controller/adminLogin.php" method="post" role="form" style="display: block;">
  									<div class="form-group">
  										<input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
                      <label><?= $email_login_err ?></label>
  									</div>
  									<div class="form-group">
  										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                      <label><?= $password_login_err ?></label>
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
                      <label><?= $email_err ?> </label>
  									</div>
  									<div class="form-group">
  										<input type="password" name="passwordSignUp" id="password" tabindex="2" class="form-control" placeholder="Password">
                      <label><?= $password_err ?> </label>
  									</div>
  									<div class="form-group">
  										<input type="password" name="confirmPasswordSignUp" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                      <label><?= $confirm_password_err ?> </label>
  									</div>
                    <div class="form-group">
                      <input type="password" name="adminkey" id="password" tabindex="2" class="form-control" placeholder="Enter Admin Key">
                      <label><?= $admin_key_err ?> </label>
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
