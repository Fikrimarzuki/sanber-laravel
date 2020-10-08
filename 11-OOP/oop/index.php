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
$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->get_cold_blooded(); // false
echo "<br>";

class Ape extends Animal {
  public function yell() {
    echo "Auooo";
  }
}

class Frog extends Animal {
  public function jump() {
    echo "hop hop";
  }
}

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
?>
