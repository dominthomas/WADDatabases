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

    function __construct(){
    }

    function __get($name){
      return $this->$name;
    }

    function __set($name,$value){
      $this->$name = $value;
    }
  }
?>
