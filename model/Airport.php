<?php
  class Airport implements JsonSerializable{
    private $IATA_Code;
    private $Airport_Location;
    private $Airport_Information;

    function __construct(){
    }

    function __get($name){
      return $this->$name;
    }

    function __set($name,$value){
      $this->$name = $value;
    }

    public function jsonSerialize(){
      return get_object_vars($this);
    }
  }
?>
