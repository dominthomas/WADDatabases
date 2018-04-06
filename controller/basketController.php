<?php
require_once "../model/Basket.php";
require_once "../model/Flight.php";
require_once "../controller/flightList.php";

$basket = new Basket();
$flightList = Database_Access::getInstance()->getAllFlights();
$basketStatus = "";

  session_start();
  if (!isset($_SESSION["addedFlights"])){

    $_SESSION["addedFlights"] = [];
  }

  $flights= "";
  if (isset($_REQUEST["addFlight"])){

    $flights = $_REQUEST["addFlight"];
    $_SESSION["addedFlights"][] = $flights;

  header("Location: ../view/index.php");
  }

  if (isset($_REQUEST["deleteFlight"])){

    if (($key = array_search($_REQUEST["deleteFlight"], $_SESSION["addedFlights"])) !== false) {
    unset($_SESSION["addedFlights"][$key]);
  }
    header("Location:../view/basketview.php");
  }

  $addedFlights = $_SESSION["addedFlights"];

?>
