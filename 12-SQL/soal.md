Hari 5 – Berlatih SQL
Tugaskali ini kamu diminta untuk menuliskan SQL Queries untuk membuat database, membuat table, mengisi data ke table, mengambil dan mengubah data ke table. Tulislah jawaban jawaban ke dalam sebuah file dengan nama jawaban.txt.

Soal 1 Membuat Database
Buatlah database dengan nama “myshop”. Tulislah di text jawaban pada nomor 1.

Soal 2 Membuat Table di Dalam Database
Buatlah tabel – tabel baru di dalam database myshop sesuai data-data berikut.

users
field	type
id	INTEGER AUTO INCREMENT PRIMARY KEY
name	varchar(255)
email	varchar(255)
password	varchar(255)
items
field	type
id	INTEGER AUTO INCREMENT PRIMARY KEY
name	varchar(255)
description	varchar(255)
price	integer
stock	integer
category_id	integer (foreign key references id on categories)
categories
field	type
id	INTEGER AUTO INCREMENT PRIMARY KEY
name	varchar(255)
tuliskan jawaban pada file text jawaban dengan nomor 2.

Soal 3 Memasukkan Data pada Table
Masukkanlah data data berikut dengan perintah SQL “INSERT INTO . . ” ke dalam table yang sudah dibuat pada soal sebelumnya.

users
name	email	password
John Doe	john@doe.com	john123
Jane Doe	jane@doe.com	jenita123
categories
name
gadget
cloth
men
women
branded
items
name	description	price	stock	category_id
Sumsang b50	hape keren dari merek sumsang	4000000	100	1
Uniklooh	baju keren dari brand ternama	500000	50	2
IMHO Watch	jam tangan anak yang jujur banget	2000000	10	1
Soal 4 Mengambil Data dari Database
a. Mengambil data users
Buatlah sebuah query untuk mendapatkan data seluruh user pada table users. Sajikan semua field pada table users KECUALI password nya.

b. Mengambil data items
Buatlah sebuah query untuk mendapatkan data item pada table items yang memiliki harga di atas 1000000 (satu juta).
Buat sebuah query untuk mengambil data item pada table items yang memiliki name serupa atau mirip (like) dengan kata kunci “uniklo”, “watch”, atau “sang” (pilih salah satu saja).
c. Menampilkan data items join dengan kategori
Buatlah sebuah query untuk menampilkan data items yang dilengkapi dengan data nama kategori di masing-masing items. Berikut contoh tampilan data yang ingin didapatkan

name	description	price	stock	category_id	kategori
Sumsang b50	hape keren dari merek sumsang	4000000	100	1	gadget
Uniklooh	baju keren dari brand ternama	500000	50	2	cloth
IMHO Watch	jam tangan anak yang jujur banget	2000000	10	1	gadget
Soal 5 Mengubah Data dari Database
Ubahlah data pada table items untuk item dengan nama sumsang harganya (price) menjadi 2500000. Masukkan query pada text jawaban di nomor ke 5.

Updated on Oktober 9, 2020