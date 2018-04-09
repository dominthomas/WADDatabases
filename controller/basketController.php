<?php
require_once "../model/Flight.php";
require_once "../model/Booking.php";
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
    echo "<script> snackBar(); </script>";

  }

  if (isset($_POST["deleteFlight"])){

    if (($key = array_search($_POST["deleteFlight"], $_SESSION["addedFlights"])) !== false) {
    unset($_SESSION["addedFlights"][$key]);
    echo "<span>".$_POST["deleteFlight"]." removed from your basket.</span>";
    echo "<script> snackBar(); </script>";
  }

  }

  $addedFlights = $_SESSION["addedFlights"];
  if(!empty($_REQUEST['fname']) && !empty($_REQUEST['lname']) && !empty($_REQUEST['email']) &&  !empty($_REQUEST['emailConfirm']) && $_REQUEST['email'] == $_REQUEST['emailConfirm']){
    foreach($_SESSION["addedFlights"] as $flightNum){

        foreach($flightList as $flight){
          if($flight->Flight_Number == $flightNum){
            $booking = new Booking();
            $booking->Booking_Date = date("Y-m-d");
            $booking->Flight_Number = $flight->Flight_Number;
            $booking->Customer_First_Name =  $_REQUEST['fname'];
            $booking->Customer_Last_Name = $_REQUEST['lname'];
            $booking->Email = $_REQUEST['email'];
            $booking->Cost = $flight->Cost;
            Database_Access::getInstance()->addBooking($booking);
          }
        }

    }
    session_unset($_SESSION["addedFlights"]);
    header("Location: ../view/index.php");
    //
  }

?>
