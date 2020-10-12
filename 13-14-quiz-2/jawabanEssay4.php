<?php

function jawaban4() {
  echo '
  SELECT customer.name AS "customer_name", SUM(orders.amount) as "total_amount" FROM customers customer INNER JOIN orders ON customer.id = orders.customer_id GROUP BY customer.name ORDER BY "ASC"
  ';
}


?>