<?php
require_once "../model/Flight.php";
require_once "../controller/flightList.php";


  session_start();
  if (!isset($_SESSION["addedFlights"])){

    $_SESSION["addedFlights"] = [];
  }

  $flights= "";
  if (isset($_POST["addFlight"])){

    $flights = $_POST["addFlight"];
    $_SESSION["addedFlights"][] = $flights;
    echo "<span>".$_POST["addFlight"]." added to your basket.</span>";
    echo "<script> myFunction(); </script>";

  }

  if (isset($_POST["deleteFlight"])){

    if (($key = array_search($_POST["deleteFlight"], $_SESSION["addedFlights"])) !== false) {
    unset($_SESSION["addedFlights"][$key]);
    echo "<span>".$_POST["deleteFlight"]." removed from your basket.</span>";
    echo "<script> myFunction(); </script>";
  }

  }

  $addedFlights = $_SESSION["addedFlights"];

?>
