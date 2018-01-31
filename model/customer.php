<?php
  class Customer{
    private $id;
    private $givenName;
    private $surname;

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
