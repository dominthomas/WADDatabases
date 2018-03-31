<?php
require_once "../model/Airport.php";
require_once "../model/Database_Access.php";

$airportList = Database_Access::getInstance()->getAllAirports();
?>
