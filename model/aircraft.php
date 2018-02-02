<?php
  class Aircraft{
    private $id;
    private $Company_ID;
    private $Model_ID;
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
