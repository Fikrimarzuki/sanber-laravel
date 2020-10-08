<?php
  require("Animal.php");
  require("Frog.php");
  require("Ape.php");

  $sheep = new Animal("shaun");

  echo $sheep->name; // "shaun"
  echo "<br>";
  echo $sheep->legs; // 2
  echo "<br>";
  echo $sheep->get_cold_blooded(); // false
  echo "<br>";

  $sungokong = new Ape("kera sakti");
  $sungokong->yell(); // "Auooo"
  echo "<br>";

  $kodok = new Frog("buduk");
  $kodok->jump() ; // "hop hop"
?>
