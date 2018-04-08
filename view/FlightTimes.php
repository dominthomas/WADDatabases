<!DOCTYPE html>
<html lang="en">
<head>
  <title>Flight Times</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.css">
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
  <link rel="icon" href="TabIcon.jpg">
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
           <li class="active"><a href="#">Book</a></li>
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
      <button class="btn btn-primary navbar-btn" type="button">Basket<span class="glyphicon glyphicon-shopping-cart"></span>
</button>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="UserLogin.php"><strong>Sign in</Strong> </a></li>
    </ul>
  </div>
</li>
         </ul>
       </div>
     </div>
  </nav>

<div class="static">
  <div class ="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <ul class="nav nav-pills nav-justified" role="tablist">
        <li><a href="index.php">Booking</a></li>
        <li class="active"><a href="FlightTimes.php">Flight Times</a></li>
        <li><a href="#">My Trips</a></li>
      </ul>
      </div>
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">

    <!-- Form begins -->
    <form action="information.php" method="post">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date"><br/>Flight Code</label>
        <input class="form-control" id="date" name="code" placeholder="ABC123" type="text"/>
      </div>
      <div class="form-group"> <!-- Submit button -->
        <button class="btn btn-primary " name="submit" type="submit">Submit</button>
      </div>
     </form>
     <!-- Form ends -->

    </div>
  </div>
 </div>
</div>

  </div>
  </div>
</div>
  </div>
  </body>
</html>
