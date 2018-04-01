<?php
require_once "../model/Basket.php";

$basket = new Basket();

if(isset($_REQUEST['addBasket'])){
  $basket->addFlight($_REQUEST['addBasket']);
}


?>
