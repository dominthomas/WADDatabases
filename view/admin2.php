<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php require_once "../controller/airportList.php" ?>
<?php require_once "../controller/adminController.php"?>
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




	<div class="cont">
	<div class="panel panel-default">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#addAirports">Add Airports</a></li>
    <li><a data-toggle="tab" href="#updateAirports">Update Airports</a></li>
    <li><a data-toggle="tab" href="#addFlights">Add Flights</a></li>
    <li><a data-toggle="tab" href="#updateFlights">Update Flights</a></li>
  </ul>

  <div class="tab-content panel-body">
    <div id="addAirports" class="tab-pane fade in active">
      <h3>Add Airports</h3>
			<form action="../controller/adminController.php" method="post">
				<div class="form-group"> <!-- Date input -->
					<label class="control-label" for="date"><br/>IATA Code</label>
					<input class="form-control" id="date" name="iata_code" placeholder="IATA_Code" type="text"/>
				</div>

				<div class="form-group"> <!-- Date input -->
					<label class="control-label" for="date"><br/>Airport Location</label>
					<input class="form-control" id="date" name="airport_location" placeholder="Airport Location" type="text"/>
				</div>

				<div class="form-group"> <!-- Date input -->
					<label class="control-label" for="date"><br/>Airport Information</label>
					<input class="form-control" id="date" name="airport_information" placeholder="Airport Information e.g: travel time" type="text"/>
				</div>

			</table>
				<div class="form-group"> <!-- Submit button -->
					<button class="btn btn-primary " name="addAirport" type="submit">Add Airport</button>
				</div>
			 </form>
    </div>



    <div id="updateAirports" class="tab-pane fade">
      <h3>Update Airports</h3>
			<form action="../controller/adminController.php" method="post">
				<div class="form-group">
					<label class="control-label" for="date"><br/>Current IATA Code</label>
					<input class="form-control" id="date" name="current_iata" placeholder="IATA that needs to be changed" type="text"/>
				</div>

				<div class="form-group">
					<label class="control-label" for="date"><br/>New IATA Code</label>
					<input class="form-control" id="date" name="new_iata" placeholder="New IATA" type="text"/>
				</div>

				<div class="form-group">
					<label class="control-label" for="date"><br/>Airport Location</label>
					<input class="form-control" id="date" name="new_airport_location" placeholder="Airport Location" type="text"/>
				</div>

				<div class="form-group">
					<label class="control-label" for="date"><br/>Airport Information</label>
					<input class="form-control" id="date" name="new_airport_information" placeholder="Airport Information" type="text"/>
				</div>

				<div class="form-group">
					<button class="btn btn-primary " name="addAirport" type="submit">Update Airport</button>
				</div>
			 </form>

			 <form action ="adminUpdateAirport.php" method="post">
				 <div class="form-group">
					 <label class="control-label" for="date"><br/>Delete IATA Code</label>
					 <input class="form-control" id="date" name="delete_iata" placeholder="Delete IATA Code" type="text"/>
				 </div>

			 <div class="form-group">
				 <button class="btn btn-primary " name="deleteAirport" type="submit">Delete Airport</button>
			 </div>
		 </form>
    </div>
    <div id="addFlights" class="tab-pane fade">
      <h3>Add Flights</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="updateFlights" class="tab-pane fade">
      <h3>Update Flights</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>


<div class="panel panel-default">
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#home2">Airports</a></li>
	<li><a data-toggle="tab" href="#menu6">Flights</a></li>
</ul>

<div class="tab-content panel-body">
	<div id="home2" class="tab-pane fade in active">
		<h3>HOME</h3>
		<table class="table table-bordered">
			<thead>
				<th>IATA Code</th>
				<th>Airport</th>
				<th>Flight Information</th>
			</thead>
		 <?php foreach ($airportList as $airport): ?>
			<tr>
				<td><?=$airport->IATA_Code?></td>
				<td><?=$airport->Airport_Location?></td>
				<td><?=$airport->Airport_Information?></td>
			</tr>
			<?php endforeach ?>
	</table>
	</div>
	<div id="menu1" class="tab-pane fade">
		<h3>Menu 1</h3>
		<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
</div>
</div>
</div>



</body>
</html>
