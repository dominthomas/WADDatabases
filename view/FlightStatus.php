<!DOCTYPE html>
<html lang="en">
<head>
  <title>Flight Status</title>
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
        <!--a class="navbar-brand" href="#">Fly Guys</a-->
      <a class="navbar-brand" href="index.php">Fly Guys</a>
       </div>
       <div class="collapse navbar-collapse" id="myNavBar">
         <ul class="nav navbar-nav navbar-right ">
           <li><a href="index.php">Book</a></li>
           <li class="active"><a href="FlightStatus.php">Status</a></li>



           <li>
             <div class="btn-toolbar">
               <a href="admin2.php">
                   <button class="btn btn-primary navbar-btn" type="button">Admin
                     <span class="glyphicon glyphicon-user"></span>
                   </button>
                   <a href="basketview.php">
<button class="btn btn-primary navbar-btn" type="button">Basket
<span class="glyphicon glyphicon-shopping-cart"></span>
</button>
</a>

                 </a>
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
        <li class="active"><a href="FlightStatus.php">Upcoming Flights</a></li>
      </ul>
      </div>
      <div class="panel-body">

<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">

    <!-- Form begins -->
    <form method="post">
      <div class="form-group">
        <label class="control-label" for="Search">Search Flight</label>
        <input class="form-control" id="text" name="Code" placeholder="Flight Code" type="text"/>
        </div>
      <div>


      </div>
      <div>
      <div class="form-group"> <!-- Submit button -->
      </div>
        <button class="btn btn-primary " name="submit" type="submit">Submit</button>
      </div>
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
