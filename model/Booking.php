<?php
  class Booking{
    private $Booking_ID;
    private $Booking_Date;
    private $Flight_Number;
    private $Customer_First_Name;
    private $Customer_Last_Name;
    private $Email;
    private $Cost;


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
