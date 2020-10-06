Hari 1 – PHP Dasar 1 (String dan Array)
Apa itu PHP?
Sebuah web yang kita telusuri sehari-hari di internet dapat kita lihat sebagai penggabungan dua sisi yaitu sisi klien dan sisi server. Sisi klien adalah yang terlihat secara langsung oleh pengguna sehingga kaitannya erat dengan tampilan semisal HTML, CSS danJavascript. Sisi server merupakan bagian website yang tidak tampil ke pengguna, namun bagian ini lah yang mengolah logika bisnis dan data yang ditampilkan sehingga membuat website tersebut lebih dinamis.

PHP merupakan bahasa pemrograman yang berjalan di sisi server. Saat ini PHP masih populer dalam dunia pengembangan website karena komunitasnya yang sangat banyak di penjuru dunia. Penggunaan PHP dalam pengembangan web juga tergolong mudah karena sudah banyak tersedia hosting yang terjangkau dengan pengaturan yang familiar.

Mempersiapkan PHP
Sebelum mulai untuk menggunakan PHP kita persiapkan terlebih dahulu environment yang dibutuhkan di antaranya: Apache, MySql, PHP, dan Perl.

Apache adalah web server agar seolah-olah PC/laptop kita menjadi server lokal. Mysql akan digunakan sebagai database, sedangkan PHP adalah bahasa pemrograman yang akan dipakai untuk membangun web, terakhir Perl membantu agar server dapat menjalankan PHP.

Untuk menginstall semuanya tidak perlu diinstall terpisah satu per satu, kita dapat menginstall aplikasi yang all-in-one seperti XAMPP, WAMPP, LAMPP atau MAMP.

Pilihlah aplikasi yang sesuai dengan Sistem Operasi yang kita pakai:

Windows : XAMPP: https://www.apachefriends.org/download.html atau WAMP: https://www.wampserver.com/en/#download-wrapper
Mac OS : MAMP: https://www.mamp.info/en/downloads/ atau XAMPP: https://www.apachefriends.org/download.html
Linux : LAMPP: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04
Ikuti perintah instalasi sampai selesai, jika ada kendala pada saat instalasi kita dapat mencari solusi lewat Google.

Nyalakan XAMPP
Ketika sudah selesai menginstall XAMPP, buka aplikasi Xampp lalu akan tampil panel seperti berikut

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-24.png

tampilan XAMPP
nyalakan module Apache dan Mysql dengan cara menge-klik tombol start pada panel. Jika tidak terdapat error, maka kita dapat mengecek ke browser lalu buka alamat url localhost . Tampilan localhost pertama kali akan menunjukkan seperti berikut

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-25-1024x556.png

ketika diketikkan url localhost maka akan langsung diarahkan ke localhost/dashboard yaitu halaman dasbor xampp localhost

Folder htdocs
Pada folder instalasi XAMPP , WAMP atau MAMP terdapat folder htdocs. Lokasi nya biasanya dapat kita akses ke C:/xampp/htdocs .

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-26-1024x332.png

folder htdocs
Di dalam folder htdocs ini adalah tempat kita dapat membuat direktori folder yang berisi project-project PHP.

Misalkan kita buat satu folder di dalam htdocs dengan nama berlatih-php.

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-27-1024x464.png

Di dalam folder berlatih-php, buatlah satu file index.php lalu tulislah code seperti berikut

https://blog.sanbercode.com/wp-content/uploads/2020/06/helloPHP-1024x563.png

index.php
maka dengan begitu kita mempunyai halaman baru di localhost yang dapat kita akses dengan menempatkan alamat url : localhost/berlatih-html

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-30-1024x496.png

halaman berlatih-php yang menampilkan index.php
Mulai Menulis PHP
Sintaks 
Sintaks PHP ditulis di dalam tag php seperti berikut:

https://blog.sanbercode.com/wp-content/uploads/2020/06/sintaksPHP.png

tag php untuk mulai menulis code PHP
Tag Komentar
Tag Komentar dipakai untuk menandai judul atau bagian dari kode yang sedang ditulis, hal ini membantu penulis kode agar mudah mencari kembali bagian-bagian kode tertentu. Cara menulis komentar yaitu dengan membubuhkan // untuk komentar satu baris, dan /* */ untuk komentar lebih dari satu baris.

https://blog.sanbercode.com/wp-content/uploads/2020/06/komentar-PHP-1024x682.png

tag komentar PHP
Variabel dan titik koma ;
Untuk menulis satu variabel di dalam PHP digunakan tanda $ . Aturannya adalah

tidak boleh menggunakan angka di depan nama variabel tapi boleh menggunakan angka di tempat lain.
tidak boleh memuat spesial karakter (~!@#$%. dan lain lain)
Setiap baris kode wajib menggunakan semikolon atau titik koma di akhir baris kode.

https://blog.sanbercode.com/wp-content/uploads/2020/06/variabelPHP-1024x533.png

Output Standar
Kita akan sering menampilkan output dari kode yang kita buat ke halaman browser. Terdapat beberapa pilihan sintaks untuk menampilkan output yaitu echo, print, print_r, dan var_dump.

<?php
  $hello ="Hello World!";
  // echo
  echo $hello;
  
  // print
  print $hello;
  
  // print_r
  print_r($hello);

  // var_dump
  var_dump($hello);

?>
untuk menampilkan output berupa tipe data string biasanya digunakan echo atau print . Sedangkan print_r dapat juga digunakan untuk menampilkan tipe data array. var_dump akan menampilkan output berupa nilai dari yang ingin ditampilkan dilengkapi dengan informasi berupa tipe data dan panjang data.

Tipe Data String 
Tipe data String yaitu tipe data yang berisi karakter-karakter dan biasa ditandai dengan pasangan tanda petik ganda (” “) atau tanda petik tunggal (‘ ‘).

<?php
  $sapa = "Halo Guys!"
  $hello = 'Hello World!'
?>
pada tipe data string terdapat metode yang melekat padanya. kita akan membahas beberapa di antara metode string.

strlen 
metode strlen dipakai untuk mengetahui panjang dari sebuah string :

<?php
  $jargon = "Tetap Santai dan Berkualitas";
  // akan menampilkan panjang variabel $jargon yaitu 28 karakter
  echo strlen($jargon); 
  
  // akan menampilkan panjang string 11
  echo strlen("Halo semua!")
?>
strcmp
metode strcmp digunakan untuk membandingkan kesamaan di antara dua variabel string. output dari metode ini yaitu berupa tipe data logika boolean (true atau false).

<?php
$passwordasli = "b3laj@rpHP";
$passwordinput = "belajarPHP";
$cocok = strcmp($passwordasli, $password);
if ($cocok != 1)
  {
    echo "Password anda salah!";
  }
else
  {
    echo "Password anda benar.";
  }
?>
boolean di PHP

booelan di PHP yaitu true dan false bisa juga ditulis dengan integer 1 untuk true, integer 0 untuk false

strtoupper
metode strtoupper digunakan untuk membuat sebuah string menjadi ditulis ke dalam karakter kapital.

<?php
  $statement = "ini gak marah, cuman caps";
  
  // menampilkan INI GAK MARAH, CUMAN CAPS
  echo strtoupper($statement);
strtolower
metode strtolwer kebalikan dari strtoupper yaitu membuat suatu string ditulis menjadi karakter-karakter non-kapital.

<?php
  $marah = "INI MARAH";
  
  // menampilkan ini marah
  echo strtolower($marah);
strpos
metode strpos untuk mengakses suatu karakter atau kumpulan karakter tertentu pada string.

<?php
  $kalimat = "Saya sedang belajar PHP";
  $katayangdicari = "PHP";
  $posisi = strpos($kalimat, $katayangdicari);
  echo $posisi;
?>
substr
metode substr untuk mengambil beberapa karakter pada string. menerima 3 parameter (<string yang ingin dipotong>, <indeks mulai potong>, <panjang yang ingin dipotong>).

indeks mulai potong dapat bernilai minus yang berarti mulai indeks dari karakter paling belakang.

<?php
$string = "Saya suka PHP";

// akan menampilkan suka PHP
echo substr($string, 6, 4);

// akan menampilkan PH
echo substr($string, -3, 2); 
?>
Tipe Data Array
tipe data array adalah tipe data yang mampu menampung lebih dari satu data. Elemen dari array ditandai dengan indeks agar dapat diakses. indeks array selalu diawali dengan indeks 0.

Deklarasi Array
membuat array baru dengan cara seperti berikut:

<?php
  
  $siswa = array("regi", "bobby", "ahmad");
  print_r($siswa);

  $trainer = ["abduh", "aghnat", "yoga"];
  print_r($trainer];

?>
ingat! untuk menampilkan array ke output gunakan sintaks print_r.

Mengakses Elemen Array
untuk mengakses elemen pada array kita dapat arahkan dengan menunjuk indeks elemen yang kita inginkan:

<?php
$nilai = [12, 14, 19];
// akan menampilkan 12 yang merupakan elemen array indeks ke 0
echo $nilai[0];
?>
Menambahkan elemen baru pada array
terkadang kita ingin menambahkan isi dari array dengan suatu data. caranya adalah dengan $array[] = <data yang ingin ditambahkan>

<?php
  $siswa = array("regi", "bobby", "ahmad");
  // siswa awal sebelum ditambah
  print_r($siswa);
  $siswa[] = "putri";
  // menampilkan siswa setelah ditambah data baru "putri"
  print_r($siswa);
?>
jika data yang ingin ditambahkan lebih dari satu data, kita bisa gunakan metode array_push(). berikut ini

<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>
count() untuk menghitung panjang array
metode count digunakan untuk menghitung panjang dari sebuah array.

<?php
$keranjang = ["pisang", "apel", "mangga"];
// menampilkan panjang array $keranjang
echo count($keranjang);
Array Asosiatif
Array Asosiatif adalah tipe array yang dapat menyimpan banyak data sebagai pasangan key dan value. Berbeda dengan array biasa yang menggunakan angka untuk menandai indeks, array asosiatif menggunakan key sebagai indeks yang dapat kita set sendiri.

penulisan array asosiatif yaitu dengan memasangkan key dan value dengan pemisah tanda panah => .

Contohnya sebagai berikut

<?php

$siswa1 = [ "nama" => "abduh"
            "kelas" => "laravel"
            "nilai" => 70
          ];
print_r($siswa1);

// menambahkan key value baru ke array $siswa1
$siswa1["email"] = "abduh@mail.com";

print_r($siswa1);
Video Tutorial PHP
beberapa tutorial yang dapat kita ikuti bersama untuk belajar PHP:

Playlist Sekolah Koding (Intro PHP, string dan Array) : link video
Playlist WPU Belajar PHP untuk Pemula: link video
Dokumentasi PHP resmi
Metode string : https://www.php.net/manual/en/ref.strings.php
Metode array : https://www.php.net/manual/en/ref.array.php
Updated on Oktober 5, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-2-materi/day-1-php-dasar-1-string-dan-array/