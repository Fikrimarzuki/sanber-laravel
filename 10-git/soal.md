Hari 3 – Berlatih PHP Bagian 3 (Upload ke Git)
Di soal latihan kali ini akan diberikan persoalan-persoalan yang melibatkan logika. Kita ditantang untuk memecahkan persoalan tersebut dengan PHP.

Buatlah folder dengan nama php-3 di htdocs. Pasangkan Git terlebih dahulu di dalam folder php-3 lalu kerjakan soal-soal di bawah ini dengan membuat 1 file untuk masing-masing soal.

0. Memasangkan Git 
Buat Remote Repositori di Gitlab
Buatlah repositori di Gitlab kalian dengan nama repositori “berlatih-php”.

1 . Klik “New Project”

https://blog.sanbercode.com/wp-content/uploads/2020/09/01-1024x129.png

2 .Klik “Create blank project”

https://blog.sanbercode.com/wp-content/uploads/2020/09/02.png

3. Isi Project name dengan nama berlatih-php, checklist punlic pada Visibility Level Kemudian klik “Create Project”

https://blog.sanbercode.com/wp-content/uploads/2020/09/03-768x362.png

Hubungkan Lokal dengan Remote
Setelah klik Create Project, ikuti langkah-langkah yang diberikan pada halaman berikutnya. Lakukan semua langkah tersebut di dalam folder php-3 yang sudah kalian buat.

https://blog.sanbercode.com/wp-content/uploads/2020/09/04-1024x173.png

menghubungkan lokal repositori
Setelah itu folder php-3 kita sudah terhubung dengan remote repository di Gitlab. Kita dapat mengubah-ubah isi dari folder php-3 seperti menambahkan file baru, mengedit file yang sudah ada, lalu kita simpan perubahannya dengan cara git add . setelah add lakukan commit dengan cara git commit -m "pesan perubahannya" . Terakhir lakukan push git push origin master.

1. Tentukan Nilai
buatlah sebuah file dengan nama tentukan-nilai.php. Di dalam file tersebut buatlah function dengan nama tentukan_nilai yang menerima parameter berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”

<?php
function tentukan_nilai($number)
{
    //  kode disini
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>
2. Ubah Huruf
buatlah sebuah file dengan nama ubah-huruf.php. Di dalam file tersebut buatlah sebuah function dengan nama ubah_huruf yang menerima parameter berupa string. function akan mereturn string yang berisi karakter-karakter yang sudah diubah dengan karakter setelahnya dalam susunan abjad “abdcde …. xyz”. Contohnya karakter “a” akan diubah menjadi “b” karakter “x” akan berubah menjadi “y”, dst.

<?php
function ubah_huruf($string){
//kode di sini
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
3. Tukar Besar Kecil
buatlah sebuah file dengan nama tukar-besar-kecil.php. Di dalam file tersebut buatlah function dengan nama tukar_besar_kecil yang menerima parameter berupa string. function akan mengembalikan sebuah string yang sudah ditukar ukuran besar dan kecil per karakter yang ada di parameter. Contohnya jika parameter “pHp” maka akan mengembalikan “PhP”.

<?php
function tukar_besar_kecil($string){
//kode di sini
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
4. Git Push
Setelah soal dikerjakan, apabila kalian ingin mengumpulkan pekerjaan kalian maka jangan lupa untuk melakukan push ke remote repository dengan cara kita simpan perubahannya dengan cara git add . setelah add lakukan commit dengan cara git commit -m "pesan perubahannya" . Terakhir lakukan push git push origin master.

Salin link repository kalian di Gitlab lalu masukkan ke dasbor pengumpulan tugas di sanbercode.com.

Updated on Oktober 7, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-2-tugas-harian/hari-3-command-line-dan-git/
