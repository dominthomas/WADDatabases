<?php
require_once "../model/Flight.php";
require_once "../model/Database_Access.php";
session_start();

if (!isset($_REQUEST['search'])){
  $flightList = getAllFlights();
}
else{
    $search = $_REQUEST['search'];
    $flightList = getFlightsByDate($search);
}
?>
