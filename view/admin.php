<!DOCTYPE html>
<html>
<?php require_once "../controller/airportList.php" ?>
<head>
	<title>Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.css">
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css">

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
       <a class="navbar-brand" href="#">Fly Guys</a>
       </div>
       <div class="collapse navbar-collapse" id="myNavBar">
         <ul class="nav navbar-nav navbar-right ">
           <li class="active"><a href="index.php">Book</a></li>
           <li><a href="FlightStatus.php">Status</a></li>


           <li>
             <div class="btn-toolbar">
                   <button class="btn btn-primary navbar-btn" type="button" action="admin.php">Admin
										 <span class="glyphicon glyphicon-user"></span>
                   </button>
            <button class="btn btn-primary navbar-btn dropdown-toggle" type="button"
             data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Empty Basket</a></li>
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
        <li class="active"><a href="#">Add Airports</a></li>
        <li><a href="#">Update Aiports</a></li>
        <li><a href="#">Add Flights</a></li>
        <li><a href="#">Update Flights</a></li>

      </ul>
      </div>

      <div class="panel-body">


    <!-- Form begins -->
    <form action="../controller/adminController.php" method="post">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date"><br/>IATA Code</label>
        <input class="form-control" id="date" name="iata_code" placeholder="Airport Name" type="text"/>
      </div>

      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date"><br/>Airport Location</label>
        <input class="form-control" id="date" name="airport_location" placeholder="Airport Name" type="text"/>
      </div>

      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date"><br/>Airport Information</label>
        <input class="form-control" id="date" name="airport_information" placeholder="Airport Name" type="text"/>
      </div>

      <div class="form-group"> <!-- Submit button -->
        <button class="btn btn-primary " name="addAirport" type="submit">Submit</button>
      </div>
     </form>
     <!-- Form ends -->

    </div>
  </div>
 </div>
</div>
</body>
</html>
