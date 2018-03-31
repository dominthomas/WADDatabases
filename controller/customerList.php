<?php
require_once "../model/Customer.php";
require_once "../model/Database_Access.php";

$customerList = Database_Access::getInstance()->getAllCustomers();
?>
