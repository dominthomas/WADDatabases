<?php
  final class Basket{
    private $basket;
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
