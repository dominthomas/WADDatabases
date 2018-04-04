<?php session_start();?>
<!DOCTYPE HTML>
<html>
<?php
  require_once "../model/requireAllModels.php";
  require_once "../controller/customerController.php";
  $customer;
  if(isset($_REQUEST['user'])){
    $customer = $_REQUEST['user'];
  }
?>
  <head>
    <title>Customer login</title>
  </head>
  <body>
    <?php if(isset($customer)):?>
      <p>Hello <?=$customer->First_Name?> <?=$customer->Last_Name?></p>
    <?php endif ?>
    <form action="../view/customerLogin.php">
      <input type="text" name="email"/>
      <input type="password" name="password"/>
      <input type="submit" value="login"/>
    </form>
  </body>
</html>
