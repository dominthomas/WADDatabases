<?php
  class Booking{
    private $id;
    private $Booking_Date;
    private $Company_ID;
    private $Flight_No;
    private $Seats_Booked;
    private $Customer_ID;
    private $Cost;
    private $Aircraft_ID;


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
