<?php
  require_once "../model/Customer.php";
  require_once "../model/Aircraft_Model.php";
  require_once "../model/Aircraft.php";
  require_once "../model/Airport.php";
  require_once "../model/Booking.php";
  require_once "../model/Employee_Admin.php";
  require_once "../model/Flight.php";
  $joao = new Customer();
  $joao->First_Name = "John";
  $joao->Last_Name = "Shadow";

  $xico = new Aircraft_Model();
  $xico->Aircraft_Model_ID = 9000;
  $xico->Aircraft_Model = "Chikorita";

  $bunny = new Aircraft();
  $bunny->
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Testing object customer</title>
  </head>
  <body>
    <?= $joao->First_Name?><br/>
    <?= $joao->Last_Name?><br/>
    <?= $xico->Aircraft_Model_ID?><br/>
    <?= $xico->Aircraft_Model?>
  </body>
</html>
