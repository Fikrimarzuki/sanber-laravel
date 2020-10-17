Hari 5 – Berlatih CRUD di Laravel
1. Siapkan Database Dengan Migration
Melanjutkan project laravel kemarin, pastikan database sudah siap dengan melakukan migration untuk tabel-tabel yang diperlukan.
Untuk saat ini, tabel yang diperlukan hanya tabel pertanyaan saja.

2. Proses CRUD
Setelah table dan model tersedia, maka kita dapat mulai membuat proses CRUD. Buatlah CRUD untuk fitur pertanyaan. Berikut ini gambaran Route dan Controller yang diinginkan

url	Methods	handler	Keterangan
/pertanyaan	GET	PertanyaanController@index	menampilkan list data pertanyaan-pertanyaan (boleh menggunakan table html atau bootstrap card)
/pertanyaan/create	GET	PertanyaanController@create	menampilkan form untuk membuat pertanyaan baru
/pertanyaan	POST	PertanyaanController@store	menyimpan data baru ke tabel pertanyaan
/pertanyaan/{pertanyaan_id}	GET	PertanyaanController@show	menampilkan detail pertanyaan dengan id tertentu
/pertanyaan/{pertanyaan_id}/edit	GET	PertanyaanController@edit	menampilkan form untuk edit pertanyaan dengan id tertentu
/pertanyaan/{pertanyaan_id}	PUT	PertanyaanController@update	menyimpan perubahan data pertanyaan (update) untuk id tertentu
/pertanyaan/{pertanyaan_id}	DELETE	PertanyaanController@destroy	menghapus pertanyaand dengan id tertentu

Updated on Oktober 16, 2020
https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-3-tugas-harian/hari-5-berlatih-crud-di-laravel/