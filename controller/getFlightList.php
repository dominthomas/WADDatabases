<?php
require_once "../model/Flight.php";
require_once "../model/Database_Access.php";

$getFlightList = Database_Access::getInstance()->getAllFlights();
