<?php
  class Aircraft_Model{
    private $Aircraft_Model_ID;
    private $Aircraft_Model;
    private $No_Of_Aircrafts;
    private $Aircraft_Description;

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
