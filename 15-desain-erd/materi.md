Hari 1 – Membuat desain ERD untuk Database
Database atau basis data merupakan kumpulan berbagai informasi yang disimpan secara sistematis pada komputer agar informasi tersebut dapat diolah kembali dengan mudah. Dalam pengembangan sebuah website, Database berperan penting sebagai penyimpanan dan penyedia informasi yang ditampilkan ke pengguna.

Semakin kompleks logika bisnis dan semakin banyak jumlah pengguna sebuah website maka akan membutuhkan database yang baik dalam menyimpan dan menyediakan data.

Kriteria database yang baik ditinjau dari beberapa faktor yakni:

kecepatan
performa
akurasi
availability
terhindar dari duplikasi dan inkonsistensi data
keamanan
Database ditinjau dari sifat relasional nya terbagi menjadi dua yaitu: relational database dan non-relational database. Pada artikel ini akan dipelajari relational database SQL menggunakan mysql.

Pada relational database, tabel-tabel berhubungan satu sama lain menggunakan Primary Key (PK). Primary Key adalah nilai yang dipakai untuk mengidentifikasi suatu baris data pada database. PK bersifat unik sehingga tidak dapat ditemukan dua data dengan PK yang sama.

PK juga digunakan sebagai patokan atau reference untuk menggabung data dari dua tabel menggunakan JOIN.

ERD
Entity Relationship Diagram (ERD), yaitu sebuah model untuk menyusun database agar dapat menggambarkan data yang mempunyai relasi dengan database yang akan didesain.(1)

Tujuan pembuatan ERD adalah memvisualisasikan keterhubungan (relasi) antar tabel dan membuat cetak biru dari database yang akan dibuat.

Sebelum membahas lebih jauh tentang ERD, ada beberapa istilah umum yang harus diketahui yaitu :

1. Entitas (Entity)
Entitas adalah sebuah objek yang merepresentasikan suatu baris data pada tabel. satu entitas akan memiliki karakteristik tersendiri berdasarkan atribut-atribut yang dimiliki. Contohnya pada sebuah database toko online terdapat entitas pelanggan, profil, barang, transaksi, dan kategori

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-5.png
contoh entitas di dalam database toko online

2. Atribut
Atribut adalah kolom-kolom data yang terdapat pada sebuah entitas dan berfungsi untuk mendeskripsikan karakteristik entitas tersebut. Di dalam sebuah entitas biasanya terdapat atribut kunci (primary key) yang merupakan pembeda antara satu entitas dengan entitas lainnya.

Contohnya pada entitas pelanggan terdapat atribut id_pelanggan, nama, dan email. Setiap atribut dapat kita definisikan tipe data nya.

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-6.png

3. Relasi
Relasi yaitu representasi dari hubungan antar entitas. terdapat tiga jenis relasi yaitu : one to one, one to many, many to many. Pada ERD biasanya relasi digambarkan dengan garis. Setiap satu jenis relasi memiliki jenis garis yang berbeda dengan jenis relasi lainnya.

One to One
relasi one to one berarti satu entitas memiliki hubungan dengan satu entitas lainnya. Relasi ini digambarkan dengan garis seperti berikut

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-8.png

Contohnya adalah seorang pelanggan akan memiliki satu profil saja. Begitu pula sebaliknya satu profile hanya dimiliki oleh seorang pelanggan saja.

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-9.png

Pada contoh di atas, terdapat foreign key yaitu suatu nilai pada suatu entitas yang berfungsi sebagai referensi dari entitas lain ketika data dari kedua entitas tersebut digabungkan (sql JOIN). Dalam hal ini entitas pelanggan mempunyai foreign key yaitu profil_id yang nilainya diperoleh dari primary key pada entitas profil.

One To Many
Relasi One To Many yaitu ketika satu entitas memiliki hubungan dengan banyak entitas lainnya. Contohnya dalam hal ini adalah di dalam satu kategori terdapat banyak barang yang terkait dengan kategori tersebut. Sebaliknya, untuk satu barang dapat kita klasifikasikan ke satu kategori saja.

Relasi ini biasanya digambarkan dengan simbol garis seperti berikut

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-12.png
simbol garis one to many

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-11.png
pada contoh di atas, entitas barang akan memiliki foreign key yang mereferensi ke primary key pada entitas kategori.

Many To Many
Relasi Many To Many adalah ketika banyak entitas terhubung dengan banyak entitas lainnya. Contohnya adalah seorang pelanggan dapat membeli banyak barang yang berbeda jenis. Sebaliknya satu jenis barang dapat dibeli oleh banyak pelanggan yang berbeda.

Untuk merepresentasikan hubungan antar dua entitas yang memiliki relasi ini maka dibutuhkan satu entitas tambahan yang biasa disebut dengan pivot. Dalam kaitannya dengan contoh antara entitas pelanggan dan barang maka entitas penghubungnya yaitu transaksi.

https://blog.sanbercode.com/wp-content/uploads/2020/08/image-14.png

Pada entitas transaksi terdapat dua foreign key yaitu pelanggan_id dan barang_id yang terhubung masing-masing ke primary key pada entitas pelanggan dan entitas barang.

Updated on Oktober 12, 2020
https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-3-materi/hari-1-membuat-desain-erd-untuk-database/