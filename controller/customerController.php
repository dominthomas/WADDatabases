<?php
require_once "../model/Database_Access.php"
require_once "../model/Customer.php"

/*Create customer object and pass it through the customer login*/
if(isset($_REQUEST['email'])){
  $customer = new Customer();
  $customer->Email_Address = $_REQUEST['email'];
  $customer->Password = $_REQUEST['password'];
  if(Database_Access::customerLogin($customer)){
    $customer = Database_Access::customerLogin($customer];
    $_SESSION['user'] = $customer;
    echo "You have logged in successfully";
  }
  else{
    echo "Your password or email is incorrect";
  }
}
?>
