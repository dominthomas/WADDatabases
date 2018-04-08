<?php
class Admin_Key{
  private $ID;
  private $Admin_Key;

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
