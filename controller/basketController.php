<?php
require_once "../model/Basket.php";
require_once "../model/Flight.php";

$basket = new Basket();

if(isset($_REQUEST['addBasket'])){
  $basket->addFlight($_REQUEST['addBasket']);
}
elseif(isset($_REQUEST['removeBasket'])){
  $basket->removeFlight($_REQUEST['removeBasket']);
}
?>
