<?php
  class AircraftModel{
    private $Model_ID;
    private $Aircraft_Description;
    private $Seats_No;

    function __construct(){
    }

    function __get($name){
      return this->$name;
    }

    function __set($name,$value){
      this->$name = $value;
    }
  }
?>
