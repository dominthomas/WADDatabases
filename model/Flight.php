<?php
  class Flight implements JsonSerializable{
    private $Flight_Number;
    private $Aircraft_ID;
    private $Departure_IATA_Code;
    private $Departure_Date;
    private $Arrival_IATA_Code;
    private $Cost;
    private $Departure_Time;
    private $Flight_Duration;

    function __construct(){
    }

    function __get($name){
      return $this->$name;
    }

    function __set($name,$value){
      $this->$name = $value;
    }

    public function jsonSerialize(){
      return get_object_vars($this);
    }
  }
?>
