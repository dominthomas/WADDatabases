<!DOCTYPE html>
<html lang="en">
<?php require_once "../controller/basketController.php" ?>
<?php require_once "../controller/flightList.php" ?>

<head>
  <title>Checkout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.css">
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
  <script src="js/ajax.js"></script>
</head>
<body>
  <?php require 'nav.php'; ?>
<div class="container">

  <div class="panel panel-default">
    <div class="panel-body">
      <form action="#">
        <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" id="fname">
        </div>

        <div class="form-group">
          <label for="fname">Last Name:</label>
          <input type="text" class="form-control" id="lname">
        </div>

        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" id="email">
        </div>

        <div class="form-group">
          <label for="email">Confirm Email address:</label>
          <input type="email" class="form-control" id="email">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
</div>

  <div id="snackbar"><div class="form-message"></div></div>
</body>
</html>
