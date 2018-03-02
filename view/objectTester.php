<?php
  require_once "../model/Customer.php";

  $joao = new Customer();
  $joao->First_Name = "John";
  $joao->Last_Name = "Shadow";
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Testing object customer</title>
  </head>
  <body>
    <?= $joao->First_Name?><br/>
    <?= $joao->Last_Name?>
  </body>
</html>
