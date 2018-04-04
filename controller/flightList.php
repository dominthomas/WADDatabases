<?php
require_once "../model/Flight.php";
require_once "../model/Database_Access.php";
require_once "../model/Airport.php";



$airportList= Database_Access::getInstance()->getAllAirports();

  /*if (!empty($_POST['indexDeparture']) && !empty($_POST['indexDestination']) && !empty($_POST['indexDate'])){
     // all input fields are NOT empty... do stuff with this

   //$flightsearch = new Flight();
      $departure = htmlentities($_POST['indexDeparture']);
      $destination = htmlentities($_POST['indexDestination']);
      $date = htmlentities($_POST['indexDate']);

      $flightList = Database_Access::getInstance()->getFlightsByAll($departure, $destination, $date);
      header("Location: ../view/searchResults.php");
    }

*/

if (!isset($_REQUEST['search'])||$_REQUEST['search']==""){
  $flightList = Database_Access::getInstance()->getAllFlights();
}
else{
  if($_REQUEST['option']==1){
    $search = htmlentities($_REQUEST['search']);
    $flightList = Database_Access::getInstance()->getFlightsByDate($search);
  }
  elseif($_REQUEST['option']==2){

    $search = htmlentities($_REQUEST['search']);
    if(strlen($search) == 3 ) {
    $flightList = Database_Access::getInstance()->getFlightsByDestination($search);}
  else{
    foreach($airportList as $airport){
    if(strcasecmp($search, $airport->Airport_Location) == 0) {
    $search = strtolower($airport->IATA_Code);
    $flightList = Database_Access::getInstance()->getFlightsByDestination($search);}
  }
  }
  }


  elseif($_REQUEST['option']==3){
    $search = htmlentities($_REQUEST['search']);
    if(strlen($search) == 3 ) {
    $flightList = Database_Access::getInstance()->getFlightsByDepartureAirport($search);
  }
  else{
    foreach($airportList as $airport){
    if(strcasecmp($search, $airport->Airport_Location) == 0) {
    $search = strtolower($airport->IATA_Code);
    $flightList = Database_Access::getInstance()->getFlightsByDepartureAirport($search);}
  }
  }
}
  elseif($_REQUEST['option']==4){
    $search = htmlentities($_REQUEST['search']);
    if(!strcasecmp($search, "monday")){
      $search = 0;
    }
    elseif(!strcasecmp($search, "tuesday")){
      $search = 1;
    }
    elseif(!strcasecmp($search, "wednesday")){
      $search = 2;
    }
    elseif(!strcasecmp($search, "thursday")){
      $search = 3;
    }
    elseif(!strcasecmp($search, "friday")){
      $search = 4;
    }
    elseif(!strcasecmp($search, "saturday")){
      $search = 5;
    }
    else{
      $search = 6;
    }
    $flightList = Database_Access::getInstance()->getFlightsByDay($search);
  }
  else{
    $flightList = Database_Access::getInstance()->getAllFlights();
  }
}


/*
elseif(isset($_REQUEST['indexDeparture'])){
  $search = $_REQUEST['indexDeparture'];
  $flightList = Database_Access::getInstance()->getFlightsByDepartureAirport($search);
  header("Location: ../view/searchResults.php");

}

  elseif(isset($_REQUEST['indexDestination'])){
    $search = $_REQUEST['indexDestination'];
    $flightList = Database_Access::getInstance()->getFlightsByDestination($search);
    header("Location: ../view/searchResults.php");
  }

  elseif(isset($_REQUEST['indexDate'])){
    $search = $_REQUEST['indexDate'];
    $flightList = Database_Access::getInstance()->getFlightsByDate($search);
    header("Location: ../view/searchResults.php");

  }

*/

  /*
  elseif($_REQUEST['option']==4){
    $search = htmlentities($_REQUEST['search']);
    if(!strcasecmp($search, "monday")){
      $search = 0;
    }
    elseif(!strcasecmp($search, "tuesday")){
      $search = 1;
    }
    elseif(!strcasecmp($search, "wednesday")){
      $search = 2;
    }
    elseif(!strcasecmp($search, "thursday")){
      $search = 3;
    }
    elseif(!strcasecmp($search, "friday")){
      $search = 4;
    }
    elseif(!strcasecmp($search, "saturday")){
      $search = 5;
    }
    else{
      $search = 6;
    }
    $flightList = Database_Access::getInstance()->getFlightsByDay($search);
  }

  else{
    $flightList = Database_Access::getInstance()->getAllFlights();
    //header("Location: ../view/searchResults.php");
  }
  */

if(isset($_REQUEST['flight_number'])){
  $flight = new Flight();
  $flight->Flight_Number = htmlentities($_REQUEST['flight_number']);
  $flight->Aircraft_ID = htmlentities($_REQUEST['aircraft_id']);
  $flight->Departure_IATA_Code = htmlentities($_REQUEST['departure_iata_code']);
  $flight->Departure_Date = htmlentities($_REQUEST['departure_date']);
  $flight->Arrival_IATA_Code = htmlentities($_REQUEST['arrival_iata_code']);
  $flight->Cost = htmlentities($_REQUEST['cost']);
  $flight->Departure_Time = htmlentities($_REQUEST['departure_time']);
  $flight->Flight_Duration = htmlentities($_REQUEST['flight_duration']);

  Database_Access::getInstance()->addFlight($flight);
 header("Location: ../view/admin2.php");
}


elseif(isset($_REQUEST['current_flight_number'])){

  $flightNo = htmlentities($_REQUEST['current_flight_number']);

  $flight = new Flight();
  $flight->Flight_Number = htmlentities($_REQUEST['new_flight_number']);
  $flight->Aircraft_ID = htmlentities($_REQUEST['new_aircraft_id']);
  $flight->Departure_IATA_Code = htmlentities($_REQUEST['new_departure_iata_code']);
  $flight->Departure_Date = htmlentities($_REQUEST['new_departure_date']);
  $flight->Arrival_IATA_Code = htmlentities($_REQUEST['new_arrival_iata_code']);
  $flight->Cost = htmlentities($_REQUEST['new_cost']);
  $flight->Departure_Time = htmlentities($_REQUEST['new_departure_time']);
  $flight->Flight_Duration = htmlentities($_REQUEST['new_flight_duration']);

  Database_Access::getInstance()->updateFlight($flight,$flightNo);
header("Location: ../view/admin2.php");
}


elseif(isset($_REQUEST['delete_flight_number'])){
  Database_Access::getInstance()->deleteFlight(htmlentities($_REQUEST['delete_flight_number']));
  header("Location: ../view/admin2.php");
}
