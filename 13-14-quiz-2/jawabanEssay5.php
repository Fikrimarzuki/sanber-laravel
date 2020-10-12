<?php
function jawaban5() {
  echo '
  INSERT INTO customers (name, email, password)
  VALUES
  ("John Doe", "john@doe.com", "john123"),
  ("Jane Doe", "jane@doe.com", "jenita123");
  ';

  echo "<br>";

  echo '
  INSERT INTO orders(amount, customer_id)
  VALUES (500, 1), (200,2), (750, 2), (250, 1), (400, 2);
  ';
}

?>