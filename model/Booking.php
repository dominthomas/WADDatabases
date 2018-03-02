<?php
  class Booking{
    private $Booking_ID;
    private $Booking_Date;
    private $Flight_Number;
    private $Seats_Booked;
    private $Customer_ID;
    private $Cost;
    private $Total_Cost;


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
