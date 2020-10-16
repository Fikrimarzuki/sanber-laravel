Hari 4 – Database & Migration di Laravel
Pengetian Migration di laravel

migrate adalah fitur pada laravel yang berfungsi mengelolah database

mengkonesikan laravel dengan database

cara mengkoneksikan laravel dan database adalah dengan cara mengatur file .env

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-47.png

Membuat migration

cara membuat migration dapat dibuat di terminal/cmd

php artisan make:migration create_users_table
jika selesai maka filenya akan berbentuk 2020_10_09_0930_create_users_table yang biasa terletak pada folder database/migrations
nb: 2020_10_0930 merupakan tanggal dan waktu pembuatan migration

Migration

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-48.png

Screma::create(‘users’,……….); berfungsi membuat table dengan nama users
$table->bigIncrement(‘id’); berfungsi membuat kolom dengan nama ‘id’ dan bertipe data int dan ter auto increment
$table->string(’email’)->unique(); berfungsi membuat kolom dengan nama ’email’ yang pertipe data string dan ditable akan bertipe data varchar
$table->timestamps(); berfungsi membuat kolom created_at yang bertipe data timestaps yang berfungsi mencatat waktu dan tanggal saat pembuatan data dan updated_at berfungsi mencatat waktu dan tanggal saat data di update

Membuat foreign key di migrate

$table->unsignedBigInteger('role_id');
$table->foreign('role_id')->references('id')->on('users');
$table->unsignedBigInteger(‘role_id’) berfungsi membuat kolom dengan nama role_id dengan type data int
$table->foreign(‘role_id’)->references(‘id’)->on(‘users’); berfungsi membuat kolom role_id menjadi foreign key yang berefences ke id pada tabel users

NB: sebelum membuat references ke table yang dituju sebaiknya buat dulu tabel yang dituju

Cara menjalankan migrate

cara menjalankan migrate dapat dijalankan di cmd/terminal

php artisan migrate
Updated on Oktober 15, 2020
https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-3-materi/hari-4-database-migration-di-laravel/