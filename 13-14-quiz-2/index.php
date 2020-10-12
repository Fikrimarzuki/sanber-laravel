<?php 
require("jawabanEssay1.php");
require("jawabanEssay2.php");
require("jawabanEssay3.php");
require("jawabanEssay4.php");
require("jawabanEssay5.php");

echo "SOAL A<br>";
echo hitung("102*2"); // 204
echo "<br>";
echo hitung("2+3"); // 5
echo "<br>";
echo hitung("100:25"); // 4
echo "<br>";
echo hitung("10%2"); // 0
echo "<br>";
echo hitung("99-2"); // 97

echo "<br><br>";
echo "SOAL B<br>";
print_r(perolehan_medali(
  array(
    array("Indonesia", "emas"),
    array("India", "perak"),
    array("Korea Selatan", "emas"),
    array("India", "perak"),
    array("India", "perak"),
    array("Indonesia", "perak"),
    array("Indonesia", "emas")
  )
));
echo "<br>";
print_r(perolehan_medali([]));

echo "<br><br>";
echo "SOAL C<br>";
jawaban3();

echo "<br><br>";
echo "SOAL D<br>";
jawaban5();

echo "<br><br>";
echo "SOAL E<br>";
jawaban4();
?>