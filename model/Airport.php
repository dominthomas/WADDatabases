<?php
  class Airport{
    private $IATA_Code;
    private $Airport_Location;
    private $Airport_Information;

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
