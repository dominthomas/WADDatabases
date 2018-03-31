<?php
require_once "../model/Database_Access.php";
require_once("../model/Airport.php");


if(isset($_REQUEST["iata_code"])){

  $iata_code = $_REQUEST["iata_code"];
  $airport_location = $_REQUEST["airport_location"];
  $airport_information = $_REQUEST["airport_information"];

  $airport = new Airport();
  $airport->IATA_Code = htmlentities($iata_code);
  $airport->Airport_Location = htmlentities($airport_location);
  $airport->Airport_Information = htmlentities($airport_information);


  addAirport($airport);
  $status = "$iata_code has been added.";
  
}

?>
