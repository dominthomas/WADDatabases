<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../controller/airportList.php" ?>
<?php require_once "../controller/adminController.php"?>
<?php require_once "../controller/getFlightList.php"?>
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
               <a href="admin2.php">
                   <button class="btn btn-primary navbar-btn" type="button">Admin
                     <span class="glyphicon glyphicon-user"></span>
                   </button>
                 </a>
            <button class="btn btn-primary navbar-btn dropdown-toggle" type="button"
             data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Empty Basket</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="UserLogin.php"><strong>Admin</Strong> </a></li>
            </ul>
            </div>
          </li>
         </ul>
       </div>
     </div>
  </nav>
<div class="static">
    <div class="panel panel-default">
      <div class="panel-heading">
        <ul class="nav nav-pills nav-justified" role="tablist">
        <li class="active"><a href="#">Booking</a></li>
        <li><a href="FlightTimes.php">Flight Times</a></li>
        <li><a href="#">My Trips</a></li>
      </ul>
      </div>

      <div class="panel-body">


<form action = "../controller/flightList.php" method="post">
        <div class="form-group">
          <label for="sel1">From</label>
           <select class="form-control" id="sel1" name="option">
      <?php foreach ($airportList as $airport): ?>
<option><?= $airport->Airport_Location ?> (<strong><?= $airport->IATA_Code ?></strong>)</option>
<?php endforeach ?>
</select>
  </div>

    <div class="form-group">
      <label for="sel2">To</label>
       <select class="form-control" id="sel2" name ="search">
  <?php foreach ($airportList as $airport): ?>
<option><?= $airport->Airport_Location ?> (<strong><?= $airport->IATA_Code ?></strong>)</option>
<?php endforeach ?>
</select>
</div>

				<div class="form-group">
					<label class="control-label" for="date"><br/>Departure Date</label>
					<input class="form-control" name="departure_date"  placeholder="YYYY-MM-DD" type="date"/>
				</div>

        <div class="form-group"> <!-- Submit button -->
   <button class="btn btn-primary " name="submit" type="submit">Search</button>
 </div>
      </form>


  </div>
  </div>

  <div class="panel panel-default">
  <div class="tab-pane">
  		<h3>Flights</h3>
  		<table class="table table-bordered">
  			<thead>
  				<th>Flight Number</th>
  			<th>Aircraft ID</th>
  			<th>Departure IATA Code</th>
  			<th>Departure Date</th>
  			<th>Arrival IATA Code</th>
  			<th>Cost</th>
  			<th>Departure Time</th>
  			<th>Flight Duration</th>
  			</thead>
  		 <?php foreach ($getFlightList as $flight): ?>
  			<tr>
  				<td><?=$flight->Flight_Number?></td>
  				<td><?=$flight->Aircraft_ID?></td>
  				<td><?=$flight->Departure_IATA_Code?></td>
  				<td><?=$flight->Departure_Date?></td>
  				<td><?=$flight->Arrival_IATA_Code?></td>
  				<td><?=$flight->Cost?></td>
  				<td><?=$flight->Departure_Time?></td>
  				<td><?=$flight->Flight_Duration?></td>
  			</tr>
  			<?php endforeach ?>
  	</table>
  </div>

  </div>
  </div>
  </div>

</body>
</html>
