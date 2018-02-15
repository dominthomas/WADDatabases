<?php
  class Customer{
    private $Customer_ID;
    private $First_Name;
    private $Last_Name;
    private $Address;
    private $Email_Address;
    private $Telephone_Number;
    private $Mobile_Number;

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
