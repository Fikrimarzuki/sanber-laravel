Hari 3 – Membuat Template dengan Blade Laravel

Mengapa Butuh Template ?
Sisi tampilan depan (frontend) pada web merupakan bagian yang penting dalam menyajikan informasi kepada pengguna. Website yang baik salah satunya adalah karena mengedepankan nilai estetika pada sisi tampilan depannya. Namun, bagi para pengembang tentunya sangat penting membuat tampilan depan yang mudah dikembangkan kembali dan desain yang konsisten.

Permasalahan pada pengembangan sisi frontend contoh kasusnya adalah jika kita menginginkan banyak halaman HTML yang memiliki layout yang serupa dan hanya unik pada bagian kontennya saja maka kita tidak usah menulis ulang bagian-bagian HTML yang layoutnya statis (tidak berubah).

Contohnya di bawah ini, terdapat tiga halaman yaitu index, create dan show yang semuanya memiliki layout yang sama yaitu dibuka dengan tag <html>, memiliki bagian <head> <navbar> dan <sidebar> yang layoutnya sama persis. Hal yang unik dari masing-masing halaman adalah konten yang ada di dalamnya yaitu bagian table di halaman index, bagian form di halaman create, dan bagian card untuk halaman show.

https://blog.sanbercode.com/wp-content/uploads/2020/08/Blade-Templating.jpg

ketiga halaman hanya berbeda di bagian konten masing-masing. Layout lainnya seperti navbar dan sidebar tetap sama.

Membuat Template Utama dengan Blade
Daripada menulis ulang kode untuk bagian yang sama seperti <head>, <navbar>, <sidebar>, lebih baik jika kita buat sebuah template utama yang di dalam nya terdapat layout yang dapat dipakai kembali oleh halaman-halaman lainnya sehingga meminimalisasi perulangan.

https://blog.sanbercode.com/wp-content/uploads/2020/08/master-template.jpg

Contoh di atas kita buat sebuah template utama atau parent template dengan nama master.blade.php dan kita akan buat halaman anak atau children dengan nama index.blade.php . Di dalam master.blade.php tersebut kita menulis kode HTML dari tag pembuka <html> sampai akhir, juga terdapat bagian navbar dan sidebar yang akan bisa dipakai di halaman lain.

Bagian penting dari parent template yaitu kita sediakan satu tempat atau slot untuk dapat diisi oleh halaman children. cara memberikan slot nya adalah dengan menggunakan directive atau sintaks di Blade Laravel dengan nama @yield di dalam function yield tersebut kita masukkan parameter berupa string yaitu nama dari slot yang akan dibuat. Kali ini kita namai slot tersebut dengan 'content' sehingga menjadi @yield('content').

Sama seperti pada materi OOP untuk membuat class child dari sebuah class lain yaitu menggunakan extends, maka pada halaman index.blade.php kita tinggal gunakan sintaks @extends('master') agar halaman index mendapatkan seluruh layout dari master template dan mendapatkan slot 'content' untuk bisa diisi.

Untuk mengisi slot 'content' pada halaman index.blade.php, kita gunakan sintaks @section('content') . Namun sintaks section memiliki sintaks penutupnya yaitu @endsection .
Di antara pembuka @section('content') dan penutup @endsection kita bisa sisipkan konten dari halaman index, misalkan kita isi dengan <table>.

Updated on Oktober 14, 2020
https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-3-materi/hari-3-membuat-template-dengan-blade-laravel/