<?php
  class Flight{
    private $Flight_Number;
    private $Aircraft_ID;
    private $Departure_IATA_Code;
    private $Departure_Date;
    private $Arrival_IATA_Code;
    private $Arrival_Date;
    private $Cost;
    private $Seats_Booked;
    private $Departure_Time;
    private $Arrival_Time;

    function __construct(){
    }

    function __get($name){
      return $this->$name;
    }

    function __set($name,$value){
      $this->$name = $value;
    }

    function journey(){
      $start = explode(":", $this->Departure_Time);
      $end = explode(":", $this->Arrival_Time);
      $journey = $start[0].":".$start[1]."-".$end[0].":".$end[1];
      return $journey;
    }
  }
?>
