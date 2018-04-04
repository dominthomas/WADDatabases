<?php
require_once "../model/Basket.php";
require_once "../model/Flight.php";
require_once "../controller/flightList.php";

$basket = new Basket();

if(isset($_REQUEST['addBasket'])){
  $basket->addFlight($_REQUEST['addBasket']);
}
elseif(isset($_REQUEST['removeBasket'])){
  $basket->removeFlight($_REQUEST['removeBasket']);
}
?>
