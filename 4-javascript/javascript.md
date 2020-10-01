Hari 4 – Javascript Dasar
Apa itu Javascript (JS)
Jika HTML bisa dianalogikan sebagai kerangka/pondasi web, lalu CSS berfungsi untuk mempercantik, maka javascript (js) membuat web lebih interaktif. Agar lebih mudah kita analogikan website sebagai manusia. Kerangka = HTML, daging sampai dengan pakaian = CSS, kemampuan gerak = javascript (js).

Cara Memasukkan Javascript di HTML
Ada dua cara memasukkan kode javascript ke dalam HTML , dengan langsung membuat javascript langsung di kode HTML dan bisa juga dengan menambahkan file javascript secara terpisah

1.Membuat javascript langsung kedalam kode HTML.
Membuat javascript langsung ke kode HTML dilakukan dengan cara menambahkan kode JavaScript di HTML kedalam tag <script>”kode javacript”</script> . Kode JavaScript yang ditambahkan bisa diletakkan didalam tag <head> atau tag <body>. Cara pertama ini cocok dipakai untuk penggunaan javascript untuk satu halaman

2.Menambahkan kode JavaScript ke file terpisah.
Cara kedua ini cocok dipakai kalau kita memerlukan penggunaan JavaScript di berbagai halaman.File JavaScript ditulis dengan ektensi namefile.js . File ini di-reference dari dalam dokumen HTML, sama seperti mereferensikan dokumen CSS.

Tipe Data

var kalimat = “Hello World”; //string
var angka = 25; //integer
var is_true = true; //boolean
var decimal = 1,2; //double
var motor = [“Yamaha”, “Honda”, “Suzuki”]; //array
var biodata = {first_name:”rezky”, last_name:”putra”, age:24} ; //object

String Method

substring
berfungsi menampilkan string dari karakter awal pada parameter pertama ke berapa sampai ke karakter akhir pada parameter kedua kaberapa contoh:

<script>
var str = “Hello world”;
var res = str.subtring(6,11);
//outputnya world
</script>

substr
berfungsi manampilkan string dari karakter awal pada parameter pertama dan panjang karakter pada parameter kedua

<script>
var kalimat = “Selamat Datang”;
var output = kalimat.substr(8,6);
//output Datang
</script>

replace
berfungsi mengganti string yang diganti dari parameter pertama dan pada parameter kedua string yang menganti contoh:

<script>
var kalimat = “Selamat Datang”;
var output = kalimat.replace(“Datang”,”Pagi”);
//output Selamat Pagi
</script>

toUpperCase
berfungsi mengubah string menjadi huruf kapital(Hrruf besar) contoh:

<script>
var kalimat = “Selamat Datang”;
var output = kalimat.toUpperCase();
//output SELAMAT DATANG
</script>

toLowerCase
berfungsi mengubah string menjadi huruf kecil contoh:

<script>
var kalimat = “Selamat Datang”;
var output = kalimat.toLowerCase();
//output selamatdatang
</script>

lenght
berfungsi menapilkan jumlah karakter pada string

<script>
var abjad = “ABCDEFGHIJKLMNOPQRSTUVWXYZ”;
var jumlah = text.length
//output 26
</script>

Function

contoh:

<html>
<body>

<p id=”demo”> </p>

<script>
function penjumlahan(angka1, angka2) {
return angka1 + angka2;
}
document.getElementById(“demo”),innerHTML = penjumlahan(4, 4);

//output 8
</script>

contoh lain :

<html>
<body>

<p id=”demo”> </p>

<script>
function penjumlahan(nama, umur) {
return “Nama Saya ” + nama + “Umur saya ” + umur;
}
document.getElementById(“demo”),innerHTML = penjumlahan(“Rezky Putra”, 24);

//output Nama Saya Rezky Putra Umur saya 24
</script>

Operator Pembanding

==	sama dengan
===	sama dangan (dengan tipe data sama)
!=	tidak sama dengan
>	lebih besar
<	lebih kecil
>=	lebih besar sama dengan
<=	lebih kecil sama dengan
Operator Aritmatika

+	penjumlahan
–	pengurangan
*	perkalian
/	pembagian
%	modulus(sisa hasil bagi)
++	increment
—	decrement
Operator Logika

operator and

Logika and	Nilai
true && true	true
true && false	false
false && true	false
false && false	false
operator or

Logika Or	Nilai
true || true	true
true || false	true
false || true	true
false || false	false
Condition

if statement
cara penulisan

if(condition){
//output
}

contoh:

var age=9;
if (age<10)
{
   "sudah memasuki usia balita"; 
}

//output
sudah mamasuki usia balita
If else statement
cara penulisan

if(condition)
{
//output
}else{
//output
}

contoh:

age=17;
if (age<10)
{
   "masih balita"; 
}else{
   "sudah bukan balita";
}

//output
sudah bukan balita
if..else if.. else
cara penulisan
if(condition){
//ouput
} else if(condition){
//output
}else{
//output
}

contoh:

contoh:

var nilai=66;

if (nilai>90)
{
   "Sangat baik"; 
}else if(nilai<90 && nilai>=75){
   "Baik";
}else if(nilai<75 && nilai>=65){
   "Cukup";
}else if(nilai<65 && nilai>=55){
   "Kurang";
}else{
   "Error";
}

//output
Cukup
Looping/perulangan

for loop
cara penulisan
for (statement1, statement2, statement3){
output
}

contoh

var output = "";
for(i=1; i<10; i++){
   output += i + "- urutan 1 sampai 10 <br>"
}

//output
1 - urutan 1 sampai 10
2 - urutan 1 sampai 10
3 - urutan 1 sampai 10
4 - urutan 1 sampai 10
5 - urutan 1 sampai 10
6 - urutan 1 sampai 10
7 - urutan 1 sampai 10
8 - urutan 1 sampai 10
9 - urutan 1 sampai 10
10 - urutan 1 sampai 10
while loop
cara penulisan
while (condition){
//output
}

contoh:
var i=1;
var loop="";
while(i<10){
  loop+=[i] + "urutan ke- " + [i] + "<br>"
}

//output
1 uratan ke- 1
2 urutan ke- 2
3 urutan ke- 3
4 urutan ke- 4
5 urutan ke- 5
6 urutan ke- 6
7 urutan ke- 7
8 urutan ke- 8
9 urutan ke- 9
10 urutan ke- 10
Agar lebih paham mengenai JS maka video kali ini lebih banyak dari biasanya dikarenakan banyak dasar-dasar yang harus dikenalkan di JS. Silakan tonton video yang telah kami pilihkan di link berikut:

https://www.sekolahkoding.com/kelas/belajar-javascript-untuk-pemula
Updated on Oktober 1, 2020
Doc navigation

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-1-materi/hari-4-javascript-dasar/