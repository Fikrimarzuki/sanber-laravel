Hari 2 – Laravel Auth + Middleware
Tugas Hari ini melanjutkan project Laravel Web Forum di hari sebelumnya. tugas hari ini yaitu memasangkan Authentication Scaffolding ke dalam project Laravel.

Memasangkan Auth Scaffolding Laravel
Pada project Laravel Web Forum, tambahkanlah sistem autentikasi Laravel agar aplikasi web forum tersebut dapat memiliki pengamanan route dari Laravel Auth.

Route yang dipasangi Middleware
Terapkan pengamanan middleware auth pada route berikut:

pertanyaan.create
pertanyaan.store
pertanyaan.edit
pertanyaan.update
pertanyaan.delete
Updated on Oktober 20, 2020
Doc navigation

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-4-tugas-harian/hari-2-laravel-auth-dan-middleware/






Hari 2 – Eloquent Relationships
Pada tugas ini kalian diminta melanjutkan project web forum sebelumnya dengan menambahkan fitur eloquent relationships.

1. One To Many
Pada project web forum buatlah relasi one to many di antara Model Eloquent berikut :

User punya banyak Pertanyaan, 1 Pertanyaan kepunyaan 1 User.
1 Pertanyaan punya banyak Jawaban. 1 Jawaban kepunyaan 1 Pertanyaan
2. One To One
Setiap pertanyaan akan mempunyai 1 jawaban yang terpilih atau jawaban yang paling tepat. Buatlah relasi one to one antara model Pertanyaan dengan model Jawaban tersebut.

3 Many To Many
Setiap satu Pertanyaan dapat diberikan banyak Tag di dalamnya. dan setiap Tag dapat terhubung ke banyak Pertanyaan. Buatlah relasi many to many untuk model Pertanyaan dan Tag!

Updated on Oktober 20, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-4-tugas-harian/hari-2-eloquent-relationships/
