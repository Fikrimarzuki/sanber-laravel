<?php

function perolehan_medali($array) {
  if (count($array) === 0) {
    return "no data";
  } else {
    $result = [];
    $nation = array();
    foreach ($array as $value) {
      if (!array_key_exists($value[0],$nation)) {
        $nation[$value[0]] = [
          "emas" => 0,
          "perak" => 0,
          "perunggu" => 0
        ];
        $nation[$value[0]][$value[1]]++;
      } else {
        $nation[$value[0]][$value[1]]++;     
      }
    }
    foreach ($nation as $key => $value) {
      array_push($result, array_merge(
        array("negara" => $key),
        $value
      ));
    };
    return $result;
  }
}

?>