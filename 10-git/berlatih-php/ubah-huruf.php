<?php
function ubah_huruf($string){
  //kode di sini
  $word = "";
  $str = str_split($string);
  foreach($str as $value) {
    $word .= ++$value;
  }
  return $word;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>