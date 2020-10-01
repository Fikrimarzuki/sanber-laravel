Hari 4 – Berlatih Javascript
Challenge Javascript bagian pertama mencakup materi tipe data string, function, dan array. ‌

Soal-soal di bawah ini ditulis dalam bentuk komentar di script pada HTML. Buatlah file-file HTML dengan nama file sesuai dengan soalnya lalu copy + paste ke code nya ke dalam HTML tersebut.‌

1. Soal String 
Download file string.html dari link berikut: https://drive.google.com/file/d/164XX4YX3L_n4ajw3d2XejnrJIk3wHaQT/view?usp=sharing

Soal terdapat dalam sintaks komentar pada tag script. jangan ubah baris code yang dilarang.

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>String Exercises</title>
        <style>
            li {
                margin-bottom: 30px;
            }

            label {
                font-weight: bold;
            }

        
        </style>
    </head>
    <body>
        <h1>Latihan String</h1>
        <ol>
            
            <li  style="margin-bottom: 10px;">
                <label for="formSentence"> Form Sentence</label>
                <p id="formSentence"></p>
            </li>
            <li>
                <label for="breakSentence" >Break Sentence</label>
                <p id="firstWord"></p> 
                <p id="secondWord"></p> 
                <p id="thirdWord"></p> 
                <p id="fourthWord"></p> 
                <p id="fifthWord"></p> 
            </li>
            <li id="breakWord">
                <label for="breakWord" >Break Word</label>
                <p id="firstWord3"></p> 
                <p id="secondWord3"></p> 
                <p id="thirdWord3"></p> 
                <p id="fourthWord3"></p> 
                <p id="fifthWord3"></p> 
            </li>
            <li id="breakWordWithLength">
                <label for="breakWordWithLength">Break Word with Length</label>
                <p id="firstWord4"></p> 
                <p id="secondWord4"></p> 
                <p id="thirdWord4"></p> 
                <p id="fourthWord4"></p> 
                <p id="fifthWord4"></p>  
            </li>
        </ol>

        <script>
            // Soal No. 1 Menggabungkan string
            var word = 'JavaScript';
            var second = 'is';
            var third = 'awesome';
            var fourth = 'and';
            var fifth = 'I';
            var sixth = 'love';
            var seventh = 'it!';

            // Buatlah agar kata-kata di atas menjadi kalimat dalam variabel string dengan nama sentence
            var sentence = '' //Edit variabel ini sehingga outputnya "Javascript is awesome and I love it!"

            // dari sini code jangan diganggu
            document.getElementById("formSentence").innerHTML = sentence
            // sampai sini code jangan diganggu

            // Soal No. 2 Memecah string dengan mengakses karakter berdasarkan indexnya
            var kalimat = 'wow JavaScript is so cool';
            var contohKataPertama = kalimat[0] + kalimat[1] + kalimat[2]; // ini contohnya
            var kataKedua // = Tambahkan sendiri di sini!
            var kataKetiga // = Tambahkan sendiri di sini!
            var kataKeempat // = Tambahkan sendiri di sini!
            var kataKelima // = Tambahkan sendiri di sini!

            // -- Dari sini code jangan diganggu!
            document.getElementById("firstWord").innerHTML = "First Word: " + contohKataPertama 
            document.getElementById("secondWord").innerHTML = "Second Word: " + kataKedua
            document.getElementById("thirdWord").innerHTML = "Third Word: " + kataKetiga
            document.getElementById("fourthWord").innerHTML = "Fourth Word: " + kataKeempat
            document.getElementById("fifthWord").innerHTML = "Fifth Word: " + kataKelima
            // -- sampai sini code jangan diganggu

            // Soal No. 3  Mengambil sebagian dari string dengan metode substring
            var kalimat3 = 'wow JavaScript is so cool';
            var contohKataPertama3 = kalimat3.substring(0, 3);
            var kataKedua3 // = Tambahkan sendiri di sini!
            var kataKetiga3 // = Tambahkan sendiri di sini!
            var kataKeempat3 // = Tambahkan sendiri di sini!
            var kataKelima3 // = Tambahkan sendiri di sini!

            // -- Dari sini jangan diganggu!
            document.getElementById("firstWord3").innerHTML = "First Word : " + contohKataPertama3 
            document.getElementById("secondWord3").innerHTML = "Second Word : " + kataKedua3
            document.getElementById("thirdWord3").innerHTML = "Third Word : " + kataKetiga3
            document.getElementById("fourthWord3").innerHTML = "Fourth Word : " + kataKeempat3
            document.getElementById("fifthWord3").innerHTML = "Fifth Word : " + kataKelima3
            // -- sampai sini jangan diganggu

            // Soal No. 4
            var kalimat4 = 'wow JavaScript is so cool';
            var contohKataPertama4 = kalimat4.substring(0, 3);
            var kataKedua4 // = Tambahkan sendiri di sini!
            var kataKetiga4 // = Tambahkan sendiri di sini!
            var kataKeempat4 // = Tambahkan sendiri di sini!
            var kataKelima4 // = Tambahkan sendiri di sini!

            var panjangKataPertama4 = contohKataPertama4.length; // output nya panjang string "wow" adalah 3
            // Buat variabel baru di sini untuk mendapatkan panjang dari kata selanjutnya : panjangKataKedua4, panjangKataKetiga4, panjangKataKeempat4, panjangKataKelima4

            document.getElementById("firstWord4").innerHTML = "First Word : " + contohKataPertama4 + ', with length: ' + panjangKataPertama4;
            document.getElementById("secondWord4").innerHTML = "Second Word : " + kataKedua4 + ', with length: ' // lengkapi sesuai dengan variabel yang kamu buat
            document.getElementById("thirdWord4").innerHTML = "Third Word : " + kataKetiga4 + ', with length: ' // lengkapi sesuai dengan variabel yang kamu buat
            document.getElementById("fourthWord4").innerHTML = "Fourth Word : " + kataKeempat4 + ', with length: ' // lengkapi sesuai dengan variabel yang kamu buat
            document.getElementById("fifthWord4").innerHTML = "Fifth Word : " + kataKelima4 + ', with length: ' // lengkapi sesuai dengan variabel yang kamu buat
            
            
        </script>
    </body>
</html>
2. Soal Function
Download file function.html dari link berikut: https://drive.google.com/file/d/1VwFlO_saa6WKINpeBP7pnlJlBfDbLxPJ/view?usp=sharing. 

Soal ditulis dalam sintaks komentar pada tag script . Baca instruksi dengan benar, tempatkan kode kalian di tempat yang tepat.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Fungsi</h1>

    <h3>Contoh Soal</h3>
    <div id="contohJawaban">

    </div>

    <h3>Soal No.1</h3>
    <div id="jawaban1">

    </div>

    <h3>Soal No.2</h3>
    <div id="jawaban2">

    </div>

    <h3>Soal No.3</h3>
    <div id="jawaban3">

    </div>

    <script>

        // CONTOH
        // Kamu diminta untuk membuat fungsi bernama tampilkan() untuk menampilkan "Aku Tampil" pada halaman html. 

        // Jawaban CONTOH
        function tampilkan() {
            document.getElementById("contohJawaban").innerHTML = "Aku Tampil"
        }

        //Jalankan function 
        tampilkan()

        // Soal No. 1 Fungsi Teriak
        /* 
            Buatlah sebuah fungsi bernama teriak(), yang mengembalikan nilai berupa "Halo Function!", yang kemudian akan ditampilkan di halaman html.
            Tampilkan dengan cara document.getElementById("jawaban1").innerHTML seperti di CONTOH.
        */

        
        function teriak() {
            // Tulis Code mulai di sini

            // Tampilkan dengan cara document.getElementById("jawaban1").innerHTML seperti di CONTOH.
        }
        
        // Jalankan function teriak
        teriak()

        // Soal No. 2 Fungsi Kalikan
        /* 
            Buatlah sebuah fungsi bernama kalikan(), yang mengembalikan nilai berupa hasil kali dari dua parameter yang dikirim.
            CONTOH OUTPUT: 
            kalikan(5, 4) akan memberikan output 20
            Tampilkan jawaban dengan cara document.getElementById("jawaban2").innerHTML seperti di CONTOH
        */

        
        function kalikan(num1, num2) {
            // Code kamu mulai dari sini



            // Tampilkan jawaban dengan cara document.getElementById("jawaban2").innerHTML seperti di CONTOH
        }
        


        // Jalankan function kalikan
        kalikan(5, 4)

        // Soal No. 3 Fungsi buatKalimat
        /* 
            Buatlah sebuah fungsi bernama buatKalimat(), yang akan memproses seluruh parameter yang diinput menjadi satu kalimat berikut: "Nama saya [Name], umur saya [Age] tahun, alamat saya di [Address], dan saya punya hobby yaitu [hobby]!"

            CONTOH: 
            var name = "Agus";
            var age = 30;
            var address = "Jln. Malioboro, Yogjakarta";
            var hobby = "gaming";

            var kalimatBaru = buatKalimat(name,age,address,hobby);
            Akan menampilkan : 
            "Nama saya Agus, umur saya 30 tahun, alamat saya di Jln. Malioboro, Yogjakarta, dan saya punya hobby yaitu gaming!"
            Tampilkan dengan cara document.getElementById("jawaban3").innerHTML seperti di CONTOH
        */
    
        function buatKalimat(nama, umur, alamat, hobi) {
            // Code kamu mulai dari sini

            // Tampilkan dengan cara document.getElementById("jawaban3").innerHTML seperti di CONTOH.
        }


        // Jalankan function buatKalimat
        var name = "John Doe";
        var age = 30;
        var address = "Jln. Malioboro, Yogjakarta";
        var hobby = "gaming";
        buatKalimat(name, age, address, hobby);
    </script>
</body>


</html>
3. Soal Kondisional
‌Download file soal conditional.html dari link berikut: https://drive.google.com/file/d/1HpdU2V0MyDrN-ASrwg61VawPYn7g6CYO/view?usp=sharing

Soal ditulis dalam sintaks komentar, baca terlebih dahulu instruksi soal lalu mulai menulis kode.

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional HTML</title>
</head>
<body>
    <h1>Berlatih Kondisional</h1>
    
    <h3>Masukkan nama dan peranmu!</h3>
    <form action="#" id="formConditional">
        <input type="text" id="name" placeholder="Isi nama di sini">
        <input type="text" id="role" placeholder="Isi peran di sini">
        <input type="submit" value="Mulai Permainan">
    </form>

    <h3>Jawaban dari console game: </h3>
    <div id="jawaban">

    </div>
</body>

<script>

    var form = document.getElementById("formConditional")
    var jawaban = document.getElementById("jawaban")

    form.addEventListener("submit", function(e) {
        e.preventDefault()

        /* 
            ATURAN PERMAINAN 
            // Output untuk Input nama = '' dan peran = ''
            // => "Nama harus diisi!"
    
            //Output untuk Input nama = 'Mikael' dan peran = ''
            // => "Halo Mikael, Pilih peranmu untuk memulai game!"
    
            //Output untuk Input nama = 'Nina' dan peran 'Penyihir'
            // => "Selamat datang di Dunia Werewolf, Nina"
            // => "Halo Penyihir Nina, kamu dapat melihat siapa yang menjadi Werewolf!"
    
            //Output untuk Input nama = 'Danu' dan peran 'Werewolf'
            // => "Selamat datang di Dunia Werewolf, Danu"
            // "Halo Werewolf Danu, kamu dapat memilih siapa yang akan kamu makan malam ini!"
    
            //Output untuk Input nama = 'Zero' dan peran 'Rakjel'
            // => "Selamat datang di Dunia Werewolf, Zero"
            // => "Halo Rakjel Zero, Kamu menjadi rakyat jelata "
    
            PETUNJUK MENGERJAKAN
            1. Buat Kondisional agar output dari konsol sesuai yang diharapkan
            2. masukkan lah jawaban dari kondisi yang diberikan oleh User ke dalam variabel jawabanKonsol
        */

        // Tuliskan Code kamu di sini
        var name = document.getElementById("name").value
        var role = document.getElementById("role").value       
        // buatlah kondisional berdasarkan dua variabel di atas yaitu name dan role, ketentuannya dapat dibaca di atas



        var jawabanKonsol // = jawaban dari kondisional di-assign di sini
        // Code Sampai sini

        jawaban.innerHTML = jawabanKonsol
    })
        

</script>
</html> 
4. Soal Looping
Download file soal looping.html dari link berikut: https://drive.google.com/file/d/1VOjCS9haf4roO6D9srIZWbuvrAd5Jz8o/view?usp=sharing

soal ditulis dalam sintaks komentar, baca terlebih dahulu instruksi soal.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>

</head>
<body>
    <h1>Berlatih Looping</h1>
    <h3>Contoh Hasil Looping</h3>
    <div id="example">

    </div>
    <h3>Soal No. 1</h3>
    <div id="jawaban1">

    </div>
    <h3>Soal No. 2</h3>
    <div id="jawaban2"></div>


    <script>
        // Contoh untuk melakukan looping dengan for
        var jawabanContoh = ""
        for (var i = 0; i < 5; i++) {
            jawabanContoh += "ini adalah angka ke: " + [i] + "<br>"
            
        }
        
        // Driver Code
        document.getElementById("example").innerHTML = jawabanContoh
    
    
        // Soal No. 1 Looping menggunakan While
        /* 
            Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript dengan menggunakan syntax while. Untuk membuat tantangan ini lebih menarik, kamu juga diminta untuk membuat suatu looping yang menghitung maju dan menghitung mundur. Jangan lupa tampilkan di console juga judul 'LOOPING PERTAMA' dan 'LOOPING KEDUA'." 
    
            OUTPUT :
    
            LOOPING PERTAMA
            2 - I love coding
            4 - I love coding
            6 - I love coding
            8 - I love coding
            10 - I love coding
            12 - I love coding
            14 - I love coding
            16 - I love coding
            18 - I love coding
            20 - I love coding
            LOOPING KEDUA
            20 - I will become web developer
            18 - I will become web developer                                                                              
            16 - I will become web developer
            14 - I will become web developer
            12 - I will become web developer
            10 - I will become web developer
            8 - I will become web developer
            6 - I will become web developer
            4 - I will become web developer
            2 - I will become web developer
        */
        var jawaban1 = ""
        // Code kamu di sini, lakukan looping dengan while
    
    
        // Driver Code, Jangan diganggu !
        document.getElementById("jawaban1").innerHTML = jawaban1
    
        // Soal No. 2
        /* 
            Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript dengan menggunakan syntax for. Untuk membuat tantangan ini lebih menarik, kamu juga diminta untuk memenuhi syarat tertentu yaitu: 
    
            SYARAT: 
            A. Jika angka ganjil maka tampilkan Santai
            B. Jika angka genap maka tampilkan Berkualitas
            C. Jika angka yang sedang ditampilkan adalah kelipatan 3 DAN angka ganjil maka tampilkan I Love Coding. 
    
            OUTPUT 
            1 - Santai
            2 - Berkualitas
            3 - I Love Coding 
            4 - Berkualitas
            5 - Santai
            6 - Berkualitas
            7 - Santai
            8 - Berkualitas
            9 - I Love Coding
            10 - Berkualitas
            11 - Santai
            12 - Berkualitas
            13 - Santai
            14 - Berkualitas
            15 - I Love Coding
            16 - Berkualitas
            17 - Santai
            18 - Berkualitas
            19 - Santai
            20 - Berkualitas
        */      
    
        var jawaban2 = ""
        // Code kamu di sini, lakukan looping dengan syntax for
        
    
        document.getElementById("jawaban2").innerHTML = jawaban2
    
    </script>
</body>

</html>
5. Soal Array
Download soal array.html dari link berikut: https://drive.google.com/file/d/1ugknhdXJcCsSbGHFKXeNxp8muloJjCl-/view?usp=sharing

Soal ditulis dalam sintaks komentar, baca terlebih dahulu instruksi soal lalu mulai menulis jawaban

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>

    <h1>Berlatih Array</h1>

    <h3>Membalikkan Kalimat</h3>
    <form action="#" id="balikString">
        <input type="text" id="word" placeholder="masukkan kalimat">
        <input type="submit" value="Balik Kalimat">
    </form>
    <div id="jawaban1" style="margin-top: 10px"></div>
    
    <h3>Looping Array</h3>
    <div id="jawaban2"></div>


    <script>
        /* 
            SOAL NO. 1 Balik Kalimat 
            Tipe data String dapat dilihat sebagai tipe data array. Kita dapat mengakses karakter-karakter pada sebuah string seperti mengakses elemen pada array.
            Buatlah sebuah fungsi dengan nama balikString(). Fungsi ini akan menerima argumen sebuah string dan mengembalikan kebalikannya.
            
            Catatan: TIDAK Boleh menggunakan reverse, wajib dengan looping!

            Contoh: 
            balikString("abduh coding") 
            akan memberikan output: "gnidoc hudba"

            Hint: Gunakan properti length dari string untuk mencari tahu panjang string
        */
        // Code Kamu di sini
 
        
        // Driver Code, jangan diganggu!
        var formBalikString = document.getElementById("balikString")
        formBalikString.addEventListener("submit", function(e) {
            e.preventDefault()
            var word = document.getElementById("word").value
            var reverseWord = balikString(word)

            document.getElementById("jawaban1").innerHTML = reverseWord
        })

        
        
        /* 
            SOAL NO. 2 LOOPING PADA ARRAY
            Buatlah sebuah fungsi dengan nama dataHandling() dengan sebuah parameter untuk menerima argumen. Argumen yang akan diterima adalah sebuah array yang berisi beberapa array sejumlah n. Contoh input dapat dilihat dibawah:

            var input = [
                ["0001", "Roman Alamsyah", "Bandar Lampung", "21/05/1989", "Membaca"],
                ["0002", "Dika Sembiring", "Medan", "10/10/1992", "Bermain Gitar"],
                ["0003", "Winona", "Ambon", "25/12/1965", "Memasak"],
                ["0004", "Bintang Senjaya", "Martapura", "6/4/1970", "Berkebun"]
            ]

            Tugas kamu adalah mengimplementasikan fungsi dataHandling agar dapat menampilkan data-data pada dari argumen seperti di bawah ini:

            Nomor ID:  0001
            Nama Lengkap:  Roman Alamsyah
            TTL:  Bandar Lampung 21/05/1989
            Hobi:  Membaca

            Nomor ID:  0002
            Nama Lengkap:  Dika Sembiring
            TTL:  Medan 10/10/1992
            Hobi:  Bermain Gitar

            Nomor ID:  0003
            Nama Lengkap:  Winona
            TTL:  Ambon 25/12/1965
            Hobi:  Memasak

            Nomor ID:  0004
            Nama Lengkap:  Bintang Senjaya
            TTL:  Martapura 6/4/1970
            Hobi:  Berkebun

        */

        var input = [
                ["0001", "Roman Alamsyah", "Bandar Lampung", "21/05/1989", "Membaca"],
                ["0002", "Dika Sembiring", "Medan", "10/10/1992", "Bermain Gitar"],
                ["0003", "Winona", "Ambon", "25/12/1965", "Memasak"],
                ["0004", "Bintang Senjaya", "Martapura", "6/4/1970", "Berkebun"]
            ]
        
        // Code kamu di sini, lakukan looping terhadap input di atas


        
        var jawaban2 // =  Isikan outputnya di sini

        document.getElementById("jawaban2").innerHTML = jawaban2  

    </script>
    
</body>
</html>
Updated on Oktober 1, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-1-tugas-harian/hari-4-javascript-dasar/