Hari 5 – Belajar SQL
Apa Itu SQL?

SQL atau Structured Query Language) adalah sebuah bahasa yang digunakan untuk mengakses data dalam basis rasional. sumber wikipedia

DATABASE

Pangkalan data (disebut juga basis data; bahasa Inggris: database) adalah kumpulan data yang terorganisir, yang umumnya disimpan dan diakses secara elektronik dari suatu sistem komputer. Pada saat pangkalan data menjadi semakin kompleks, maka pangkalan data dikembangkan menggunakan teknik perancangan dan pemodelan secara formal. sumber wikipedia

Membuat database di sql

create database nama_databasenya;

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-17.png

Menampilkan semua database

show databases;

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-19.png

Memanggil database

use nama_databasenya;

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-18.png

Membuat table

CREATE TABLE nama_tabel (
    kolom1 tipedata,
    kolom2 tipedata,
    kolom3 tipedata,
   ….
);

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-20.png

Melihat deskripsi tabel

DESCRIBE nama_tabel;

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-21.png

Insert data pada table

INSERT INTO table_name (kolom1, kolom2, kolom3, …)
VALUES (value1, value2, value3, …);

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-22.png

Menampilkan semua data pada table

SELECT * FROM nama_tabel;

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-23.png

Memanpilkan data pada table berdasarkan kolomnya

SELECT kolom1, kolom2, …
FROM table_name;

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-28.png

Mempilkan data dengan kondisi

SELECT *
FROM nama_tabel
WHERE condition;

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-25.png

Update data pada table

UPDATE nama_table
SET kolom1 = value1, kolom2 = value2, …
WHERE condition;


Hapus data pada table

DELETE FROM nama_table WHERE condition;

https://blog.sanbercode.com/wp-content/uploads/2020/09/image-27.png

Updated on Oktober 9, 2020
Doc navigation

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-2-materi/hari-5-belajar-sql/