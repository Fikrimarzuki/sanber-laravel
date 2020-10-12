<?php


function jawaban3() {
  echo "
  CREATE TABLE customers (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    email varchar(255),
    password varchar(255)
  )
  ";
  
  echo "<br>";

  echo "
  CREATE TABLE orders(
    id int AUTO_INCREMENT PRIMARY KEY,
      amount int,
      customer_id int,
      FOREIGN KEY (customer_id) REFERENCES customers(id)
  );
  ";
}

?>