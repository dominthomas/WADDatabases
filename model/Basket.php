<?php
require_once "Flight.php";
  class Basket{
    private $basket = [];
    function __construct(){
    }

    function __get($name){
      return $this->$name;
    }

    function __set($name,$value){
      $this->$name = $value;
    }

    function addFlight($flight){
      $this->basket = $flight;
    }
  }
?>
