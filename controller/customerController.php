<?php
require_once "../model/Database_Access.php";
session_start();

if(!empty($_REQUEST['email']) && !empty($_REQUEST['password'])){
  $customer = new Customer();
  $customer->Email_Address = $_REQUEST['email'];
  $customer->Password = $_REQUEST['password'];
  if(!empty(Database_Access::getInstance()->customerLogin($customer))){
    $_SESSION['user'] = Database_Access::getInstance()->customerLogin($customer);
    echo "Login Successful";
  }
  else{
    echo "Login Failed";
  }
}

if(isset($_REQUEST['logout'])){
  unset($_SESSION['user']);
  echo "Logout Successful";
}
?>
