Hari 2 – Berlatih CSS
layouting-html-css
Target
Membuat layout HTML dengan CSS
‌

Petunjuk Pengerjaan
Ikutilah langkah-langkah pengerjaan di bawah ini:‌

1. Membuat File HTML
‌

Buatlah sebuah file HTML bernama index.html. Gunakan code yang sudah disediakan di bawah ini

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  </head>
  <body>
    <header>
      <img id="logo" src="public/img/logo.png" width="200px" />
      <nav>
        <ul>
          <a href="#"><li>Home</li></a>
          <a href="#"><li>About</li></a>
          <a href="#"><li>Contact</li></a>
        </ul>
      </nav>
    </header>
    <section>
      <h1>Featured Posts</h1>
      <div id="article-list">
        <article>
          <a href=""><h3>Lorem Post 1</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
        <article>
          <a href=""><h3>Lorem Post 2</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
        <article>
          <a href=""><h3>Lorem Post 3</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
        <article>
          <a href=""><h3>Lorem Post 4</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
        <article>
          <a href=""><h3>Lorem Post 5</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
      </div>
    </section>
    <footer>
      <h5>copyright &copy; 2019 by Sanbercode</h5>
    </footer>
  </body>
</html>
‌

2. Buat File CSS
‌

Buatlah file CSS di dalam folder bernama ‘css’. folder ‘css’ tersebut berada di dalam folder public. kemudian hubungkan pada file index.html dengan cara menambahkannya di header.

<link href="public/css/style.css" rel="stylesheet" type="text/css">
‌

3. Menyiapkan Asset Gambar
‌

Buatlah folder di dalam folder public dengan nama img dimana kita akan meletakkan gambar kita di sana. Sehingga nantinya pengambilan alamat dari gambar di folder : public/img/logo.png . Aset gambar bisa kamu download dari file di bawah ini. Download logo dengan nama logo.png dan gambar pola sebagai pattern.png

https://gblobscdn.gitbook.com/assets%2F-LiR2ZMOIaxmhLlPQhLa%2F-LsKO0ePPOrb2KQEd7Gq%2F-LsKOmfnPPoDiqmDH44r%2Flogo.png?alt=media&token=b613bed4-5936-4f6b-aec4-aed6c214f630
logo.png

https://gblobscdn.gitbook.com/assets%2F-LiR2ZMOIaxmhLlPQhLa%2F-LsKO0ePPOrb2KQEd7Gq%2F-LsKOnZbYN8Zs5H89ODH%2Fpattern.jpg?alt=media&token=27a7b746-8252-45a5-8df2-b1b68fb8ceae
pattern.png
‌

keterangan: logo sanbercode untuk logo yang akan ditampilkan. sedangkan gambar pola yang di bawahnya adalah gambar yang dijadikan background. ‌

4. Membuat Layout HTML + CSS
Buatlah halaman web dengan layout seperti di bawah ini:

https://blog.sanbercode.com/wp-content/uploads/2020/06/ezgif.com-crop.gif

output yang diharapkan (tidak usah persis sama, layout nya diusahakan mirip)
Hints:

Untuk mengerjakan challenge di atas beberapa syntax CSS yang dipakai di antaranya:
* color
* font-size
* font-family
* background
* font-weight
* text-align
* text-decoration
* position

File-file gambar:

logo sanbercode : download: https://drive.google.com/file/d/1125xkTSNko19q8wbksvKbj4s7ybIwmHO/view?usp=sharing
background pattern: download: https://drive.google.com/file/d/1aMMIlxYxOcWUDW5JwoSp31fW0A73-Y5D/view?usp=sharing
simulasi output gif: download: https://drive.google.com/file/d/17Cl5vISGOwWqjcDsJmJqQBiHxGoJ_GWB/view?usp=sharing
Updated on September 29, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-1-tugas-harian/hari-2-berlatih-css/