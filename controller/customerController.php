<?php
require_once "../model/Database_Access.php"
require_once "../model/Customer.php"

/*Pass customer object*/
if(isset($_REQUEST['email'])){
  $customer = new Customer();
  $customer->Email_Address = $_REQUEST['email'];
  $customer->Password = $_REQUEST['password'];
  if(Database_Access::checkLogin($customer)){
    $customer = Database_Access::checkLogin($customer];
    $_SESSION['user'] = $customer;
    echo "You have logged in successfully";
  }
  else{
    echo "Your password or email is incorrect";
  }
}
?>
