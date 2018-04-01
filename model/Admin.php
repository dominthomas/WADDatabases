<?php
class Admin{
  private $Admin_ID;
  private $Email_Address;
  private $Password;
  
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
