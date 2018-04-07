<?php
//require_once "../controller/airportList.php";
require_once "../controller/getFlightList.php";


if (isset($_POST['addAirport'])) {
  $iata_code = $_POST['iata_code'];
  $airport_location = $_POST['airport_location'];
  $airport_information = $_POST['airport_information'];

  $airport = new Airport();
  $airport->IATA_Code = htmlentities($iata_code);
  $airport->Airport_Location = htmlentities($airport_location);
  $airport->Airport_Information = htmlentities($airport_information);


  Database_Access::getInstance()->addAirport($airport);

$airportList = Database_Access::getInstance()->getAllAirports();
  foreach ($airportList as $airport){

   echo "<tr><td>".$airport->IATA_Code."</td>";
   echo "<td>".$airport->IATA_Code."</td>";
   echo "<td>".$airport->Airport_Location."</td>";
   echo "<td>".$airport->Airport_Information."</td>";
   echo "</td>";
 }
}
?>
