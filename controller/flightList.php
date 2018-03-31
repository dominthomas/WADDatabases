<?php
require_once "../model/Flight.php";
require_once "../model/Database_Access.php";

if (!isset($_REQUEST['search'])||$_REQUEST['search']==""){
  $flightList = Database_Access::getInstance()->getAllFlights();
}
else{
  if($_REQUEST['option']==1){
    $search = $_REQUEST['search'];
    $flightList = Database_Access::getInstance()->getFlightsByDate($search);
  }
  elseif($_REQUEST['option']==2){
    $search = $_REQUEST['search'];
    $flightList = Database_Access::getInstance()->getFlightsByDestination($search);
  }
  elseif($_REQUEST['option']==3){
    $search = $_REQUEST['search'];
    $flightList = Database_Access::getInstance()->getFlightsByDepartureAirport($search);
  }
  elseif($_REQUEST['option']==4){
    $search = $_REQUEST['search'];
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
?>
