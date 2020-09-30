Hari 3 – Lebih Rapi dengan CSS Bootstrap
Apa itu Bootstrap?
‌Bootstrap adalah sebuah framework untuk membangun website di sisi front-end . framework yang disediakan oleh Bootstrap yaitu framework CSS dan Javascript. Untuk saat ini kita hanya akan pakai CSS nya saja. Keunggulan penggunaan Bootstrap di antaranya :

sistem grid yang responsive yang berarti menyesuaikan lebar layar atau viewport sehingga jika website kita dibuka dengan berbagai macam device seperti laptop, tablet dan handphone tampilannya dinamis dapat menyesuaikan agar tetap nyaman dilihat.
mempunyai banyak elemen UI (User Interface) seperti pop-up modal, tombol buttons, card dan lain-lain yang dapat dimanfaatkan untuk mempercantik tampilan web.
class yang reusable atau dapat kita pakai berulang kali yang artinya kita tidak usah repot membuat style di berbagai halaman, cukup panggil classyang diinginkan untuk dapat memberikan styling pada element atau tag.
kompatibel dengan berbagai macam browser
‌

Menginstall Bootstrap
Dalam dokumentasi ini akan digunakan Bootstrap 4 sebagai contoh kasus. Bootstrap 4 memiliki halaman dokumentasi tersendiri yang dipakai sebagai pedoman pemakaian di link berikut.

Terdapat beberapa cara untuk memasangkan Bootstrap pada halaman web atau html:

memasangkan file CDN
mendownload source file Bootstrap
memasangkan file CDN
File CDN yaitu  segala file yang dibutuhkan untuk menggunakan Bootstrap yang bersumber dari suatu pranala atau link tertentu. Keuntungannya adalah cara ini merupakan cara termudah untuk memasangkan Bootstrap pada project web kita dan tidak usah mendownload apapun. Kekurangannya adalah dalam pengembangan project web kita harus selalu terhubung dengan internet karena file CDN tersebut diperoleh dari website luar.

Di halaman dokumentasi bootstrap kita dapat copy bagian CSS:

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-17-768x183.png

copy baris code link stylesheet lalu paste di halaman html

setelah copy lalu paste di halaman html yang sudah kita buatkan misalkan index.html. (pastikan paste di bagian element <head>)

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-18-768x190.png

setelah itu di bagian body kita dapat mulai menuliskan element-element HTML. contohnya berikan saja sebuah heading untuk melihat perubahan style yang diberikan bootstrap:

<h1>Header ini ditulis dengan Bootstrap</h1>
download file Bootstrap
file Bootstrap dapat didownload di halaman berikut. Pada bagian “Compiled CSS and JS” terdapat tombol download.

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-19-768x223.png

setelah terdownload maka akan terdownload sebuah file .zip, ekstraksi file zip tersebut lalu kita akan dapati dua buah folder yaitu css dan js.

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-21.png

tempatkan index.html sejajar dengan folder css dan js
kita dapat tempatkan file css dan js di satu folder terpisah misalkan folder dengan nama public atau assets atau kita cukup saja tempatkan kedua folder tersebut sejajar dengan index.html kita.

Di dalam folder css terdapat file seperti berikut:

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-22.png

dari list file tersebut kita cukup ambil satu file saja untuk bisa dipasangkan di index.html, misalkan dipilih bootstrap.min.css . maka kita hubungkan index html kita dengan file css tersebut seperti berikut:

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-23-768x307.png

pastikan href yang kita berikan sesuai dengan tempat file css berada
setelah itu kita siap untuk mulai menulis elemen-elemen HTML di bagian body dengan Bootstrap. contohnya kita tulis sebuah heading maka akan tampil di browser sebuah heading yang sudah diberikan styling oleh Bootstrap

<h1>Heading ini ditulis dengan Bootstrap</h1>
Mulai Berkenalan dengan Komponen Bootstrap
Setelah pemasangan Bootstrap berhasil, kita dapat lanjutkan untuk mulai berkenalan dengan sistem grid dan komponen-komponen yang disediakan oleh Bootstrap. Hal ini berguna agar kita dapat berlatih membuat layout web dengan lebih mudah menggunakan bantuan CSS Bootstrap.

Berikut beberapa tutorial yang dapat diikuti:

Video Tutorial Channel Framework Indonesia berikut : 

https://youtu.be/tvVO6Lnk5J0?list=PLce3Eyp7oY9-o3JavSawkXcazJSYx7KAf

sumber: youtube channel Framework Indonesia
Tutorial Bootstrap 4 Net Ninja (berbahasa inggris) : https://www.youtube.com/playlist?list=PL4cUxeGkcC9jE_cGvLLC60C_PeF_24pvv
Updated on September 30, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-1-materi/hari-3-lebih-rapi-dengan-css-bootstrap/