<?php
  class Aircraft{
    private $Aircraft_ID;
    private $Aircraft_Model_ID;
    private $Seats;

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
