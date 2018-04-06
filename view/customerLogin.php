<?php
require_once "../controller/customerController.php";
if(isset($_SESSION['user'])){
  $customer = $_SESSION['user'];
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Customer login</title>
  </head>
  <body>
    <?php if(isset($customer)):?>
      <p>Hello <?=$customer->First_Name?> <?=$customer->Last_Name?></p>
    <?php endif ?>
    <form action="../controller/customerController.php" method="post">
      <input type="text" name="email"/>
      <input type="password" name="password"/>
      <input type="submit" value="login"/>
    </form>
  <form action="../controller/customerController.php" method="post"/>
    <input type="hidden" name="logout" value="hidden"/>
    <input type="submit" value="logout"/>
  </form>
  </body>
</html>
