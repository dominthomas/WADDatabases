<?php
require_once "../model/Database_Access.php"

/*Pass customer object*/
if(isset($_REQUEST['login'])){
  if(Database_Access::checkLogin($_REQUEST['login'])){
    $customer = Database_Access::checkLogin($_REQUEST['login'];
    $_SESSION['user'] = $customer;
  }
}
?>
