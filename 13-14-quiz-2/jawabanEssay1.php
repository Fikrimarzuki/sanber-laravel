<?php 

function hitung($str) {
  $str = preg_split("/\\b/", $str);
  $operator = $str[2];
  $num1 = $str[1];
  $num2 = $str[3];
  if ($operator === "*") {
    return $num1 * $num2;
  } else if($operator === ":" || $operator === "/") {
    return $num1 / $num2;
  } else if($operator === "+") {
    return $num1 + $num2;
  } else if ($operator === "-") {
    return $num1 - $num2;
  } else if ($operator === "%") {
    return $num1 % $num2;
  }
}

?>