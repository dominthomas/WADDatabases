<?php
require_once "../model/Database_Access.php";
require_once "../model/Airport.php";


if(isset($_REQUEST["iata_code"])){

  $iata_code = $_REQUEST["iata_code"];
  $airport_location = $_REQUEST["airport_location"];
  $airport_information = $_REQUEST["airport_information"];

  $airport = new Airport();
  $airport->IATA_Code = htmlentities($iata_code);
  $airport->Airport_Location = htmlentities($airport_location);
  $airport->Airport_Information = htmlentities($airport_information);


  Database_Access::getInstance()->addAirport($airport);
  /*echo "$iata_code has been added.";*/

header('Location: ../view/admin2.php');
}



if(isset($_REQUEST['current_iata'])){

  $current_iata = $_REQUEST["current_iata"];
  $new_iata = $_REQUEST["new_iata"];
  $new_airport_location = $_REQUEST["new_airport_location"];
  $new_airport_information = $_REQUEST["new_airport_information"];

  $airport = new Airport();
  $airport->IATA_Code = htmlentities($new_iata);
  $airport->Airport_Location = htmlentities($new_airport_location);
  $airport->Airport_Information = htmlentities($new_airport_information);

  Database_Access::getInstance()->updateAirport($airport,$current_iata);

  header('Location: ../view/admin2.php');

}

if(isset($_REQUEST['delete_iata'])){

  $delete_iata = htmlentities($_REQUEST["delete_iata"]);

  Database_Access::getInstance()->deleteAirport($delete_iata);
  header('Location: ../view/admin2.php');

}
?>
