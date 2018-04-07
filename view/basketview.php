
<!DOCTYPE html>
<html lang="en">
<?php require_once "../controller/basketController.php" ?>
<?php require_once "../controller/flightList.php" ?>

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
              <li role="presentation"><a role="menuitem" tabindex="-1" href="UserLogin.php"><strong>Admin</Strong> </a></li>
            </ul>
            </div>
          </li>
         </ul>
       </div>
     </div>
  </nav>

  <div class="panel panel-default">
  <div class="tab-pane">
      <h3>Your Basket</h3>
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
        <th>Item Action</th>
        </thead>
         <form action="../controller/basketController.php" method="get">
           <?php if(count($addedFlights) != 0):
             foreach($addedFlights as $flightnum):?>

       <?php foreach ($flightList as $flight):
          if(strcasecmp($flightnum, $flight->Flight_Number) == 0): ?>
         <div class="form-group">
        <tr>
          <?php foreach ($airportList as $airport): ?>
             <?php if($airport->IATA_Code == $flight->Departure_IATA_Code){
             $airport1 = $airport->Airport_Location;}
             if($airport->IATA_Code == $flight->Arrival_IATA_Code){
             $airport2 = $airport->Airport_Location;}?>
               <?php endforeach ?>
          <td><?=$flight->Flight_Number?></td>
          <td><?=$flight->Aircraft_ID?></td>
          <td><?=$airport1?> (<?=$flight->Departure_IATA_Code?>)</td>
          <td><?=$flight->Departure_Date?></td>
          <td><?=$airport2?> (<?=$flight->Arrival_IATA_Code?>)</td>
          <td><?=$flight->Cost?></td>
          <td><?=$flight->Departure_Time?></td>
          <td><?=$flight->Flight_Duration?></td>
          <td><button class=" btn btn-primary" type="submit" name="deleteFlight" value=<?=$flight->Flight_Number ?> > Delete Flight </buton></td>
        </tr>
      </div>
  <?php endif ?>
<?php endforeach ?>
  <?php endforeach ?>
<?php endif ?>
    </table>
  </form>
  </div>
  </div>

</body>
</html>
