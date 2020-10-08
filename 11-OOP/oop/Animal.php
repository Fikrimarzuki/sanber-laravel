<?php
  class Animal {
    public $name;
    public $legs = 4;
    public $cold_blooded = false;

    public function __construct($name) {
      $this->name = $name;
    }
    public function getName(){
      return $this->name;
    }
    public function setName($name){
      $this->name = $name;
    }
    public function get_cold_blooded(){
      return $this->cold_blooded ? "true" : "false";
    }
  }
?>