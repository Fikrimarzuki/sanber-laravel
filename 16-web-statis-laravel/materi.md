Hari 2 – Intro Laravel (Instalasi dan Membuat Web Statis)
Materi pembahasan kali ini kita akan berkenalan dengan Laravel. Laravel adalah sebuah framework berbasis PHP untuk membangun web. Sebelum kita mulai mencoba Laravel kita harus menginstall terlebih dahulu composer .

Install Composer
Composer adalah dependency manager PHP atau software untuk mengatur project-project yang menggunakan PHP. Untuk menginstall composer di Windows, download terlebih dahulu dari halaman download composer: https://getcomposer.org/download/ . Selanjutnya install dengan mengikuti petunjuk install dari composer-setup.exe.

Bagi pengguna Mac atau Linux silakan ikuti petunjuk penginstallan menggunakan command-line

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-24.png
petunjuk penginstallan Composer di Linux atau Mac

Mengecek Composer
Untuk memastikan jika composer sudah terpasang atau belum silakan buka terminal/command prompt lalu ketikkan perintah composer -v jika tidak ada error maka terminal akan memberikan jawaban seperti berikut

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-26.png
mengecek versi composer (versi composer anda mungkin berbeda)

Membuat Project Laravel 
Petunjuk pembuatan project web Laravel dapat dibaca selengkapnya di halaman dokumentasi resmi Laravel (Laravel Versi 6 yang akan kita gunakan)

Setelah menginstall composer, kita dapat langsung membuat project Laravel baru di dalam folder htdocs atau di tempat lain di komputer kita. Untuk membuat project Laravel dengan nama project “blog” kita gunakan perintah composer seperti berikut:

$ composer create-project --prefer-dist laravel/laravel blog "6.*"

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-27.png

jika kita ingin memberikan nama yang lain untuk project yang ingin dibuat maka kita sesuaikan untuk mengganti namanya pada bagian “blog”.
lalu tekan enter untuk mengeksekusi perintahnya.

Composer akan mendownload semua file dan folder yang dibutuhkan untuk project Laravel.

setelah selesai mendownload maka sudah terdapat folder baru dengan nama “blog” atau nama yang sesuai dengan yang kita berikan di perintah composer create-project .

Jika kita masuk ke dalam folder “blog” tersebut dapat kita lihat bahwa di dalam foldernya sudah terdapat banyak file dan folder.

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-28-768x94.png

Menjalankan Laravel
Pada folder “blog”, kita dapat jalankan perintah berikut pada terminal :

$ php artisan serve
maka terminal akan memberikan pesan seperti berikut:

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-29.png

Dalam pesan tersebut kita diberitahu bahwa kita sudah memiliki server development lokal yaitu di alamat http://127.0.0.1:8000 atau nama lainnya adalah http://localhost:8000. Buka browser dengan mengetikkan alamat tersebut maka akan tampil halaman awal Laravel seperti berikut:

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-30-1024x459.png
halaman awal Laravel di alamat http://localhost:8000

Route Laravel
Route adalah tempat menyimpan alamat-alamat url pada website yang sedang kita kembangkan. Sesuai dengan namanya, route berarti juga rute atau jalur yang tersedia untuk menjelajahi website kita.

Untuk mencari tahu route di project Laravel kita, buka project “blog” yang sudah dibuat di text editor. pada folder routes terdapat file dengan nama web.php. Di dalam file tersebut sudah tersedia satu route yaitu route dengan url '/'.

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-31-1024x613.png

route '/' yang sudah tersedia di web.php merupakan route yang dapat dilihat di browser dengan alamat url localhost:8000/
Route '/' tersebut adalah route yang mewakili alamat url localhost:8000/ yang berarti alamat url route pada browser adalah kombinasi alamat localhost:8000 ditambah url '/'. Untuk selanjutnya kita dapat mendefinisikan route baru dengan pola yang serupa.

Membuat Route 
Untuk mendefinisikan route baru, rumusnya seperti berikut:

Route::<http-method>('<url>', <function callback>)

bagian yang ditandai dengan '<>' adalah template yang dapat kita isi sesuai keinginan kita.
http-method adalah metode HTTP:https://developer.mozilla.org/id/docs/Web/HTTP/Methods#:~:text=HTTP%20mendefinisikan%20seperangkat%20metode%20permintaan,dilakukan%20untuk%20sumber%20daya%20tertentu.&text=Permintaan%20menggunakan%20GET%20seharusnya%20hanya,GET%20%2C%20namun%20tanpa%20respon%20body . yang kita definisikan untuk route tersebut. Berbeda metode maka berbeda juga tujuan atau peruntukkan dari route tersebut.

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-32-1024x428.png

url atau $uri adalah alamat dari route yang ditulis dalam string. kita dapat definisikan url yang sesuai untuk mencoba membuat route baru.

$callback atau function callback adalah sebuah function yang akan dijalankan ketika suatu route dipanggil, function tersebut dapat berupa Closure atau metode pada Controller (akan dibahas di bagian selanjutnya).

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-34.png

mendefinisikan route baru dengan url '/hello-laravel'
di dalam function callback kita dapat menulis sintaks apa saja dalam PHP seperti echo atau deklarasi variabel dan lain-lain. Di akhir function selalu kita berikan kembalian dengan menuliskan return. Jika kita arahkan browser menuju route '/hello-laravel' maka akan menghasilkan tampilan seperti berikut ini

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-35.png

Membuat Controller
Membuat Controller didalam laravel dengan terminal/cmd


untuk default penyimpanan file controller biasanya berada pada file app/controller

Cara menggunakan Controller di route web

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-39.png

home berfungsi sebagai url
pegawaiController adalah nama controller yang telah dibuat
index merupakan method yang terdapat di pegawaiContoller
Updated on Oktober 13, 2020