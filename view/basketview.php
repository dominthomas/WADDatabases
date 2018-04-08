<!DOCTYPE html>
<html lang="en">
<?php require_once "../controller/basketController.php" ?>
<?php require_once "../controller/flightList.php" ?>

<head>
  <title>Basket</title>
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

  <div class="panel panel-default">
    <div class="panel-body">
      <?php require '../controller/basketStuff.php'; ?>
      <a href="checkout.php"><button class="btn btn-primary" value="Checkout" name="checkoutButton">Checkout</button></a>
    </div>

  </div>
  <div id="snackbar"><div class="form-message"></div></div>
</body>
</html>
