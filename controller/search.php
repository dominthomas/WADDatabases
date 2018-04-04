<?php
session_start();
require_once ("../model/Flight.php");
require_once ("../model/Database_Access.php");

if (isset($_REQUEST['indexDate'])){
  $search=htmlentities($_REQUEST['indexDate']);
  $flightList=Database_Access::getInstance()->getFlightsByDate($search);

}

header("Location: ../view/searchResults.php");


?>
