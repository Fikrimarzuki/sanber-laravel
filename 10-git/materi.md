Hari 3 – Command Line dan Git
Apa itu command line interface?
Command line interface atau yang biasa kita kenal cmd atau command prompt atau terminal adalah software atau antar muka untuk memberikan perintah-perintah dasar pada komputer kita. Biasanya kita mengoperasikan komputer seperti browsing media, mencari file, membuat file atau folder, dan lain-lain dengan GUI (Graphical User Interface) yang sudah disediakan pengembang Sistem Operasi seperti Windows, Linux, atau OSX. Namun pada dasarnya kita juga bisa melakukan operasi-operasi tersebut dalam suatu perintah yang kita kirimkan melalui cmd/terminal. Berikut ini beberapa contohnya:

Catatan: Contoh perintah ditulis dengan awalan $ (tapi tidak usah ditulis tanda $ pada terminal/command prompt nya) . Tanda // berarti menandakan baris tersebut adalah komentar atau keterangan, tidak perlu ditulis di perintah terminal.

Menuju folder/direktori tertentu
Untuk menuju folder atau direktori tertentu bisa gunakan perintah cd atau kepanjangan dari change directory.

// Menuju Desktop
$ cd Desktop
// Menuju ke direktori parent (sebelumnya)
$ cd ..
Mengetahui alamat dari direktori yang sedang dibuka
Terkadang kita butuh tahu sedang dimana posisi terminal kita berjalan. Perintah untuk fungsi ini yaitu pwd atau kependekan dari path of working directory

$ pwd
/home/users
// sedang berada di folder 
home/users
Mengetahui list isi dari sebuah direktori/folder
Kamu bisa gunakan perintah ls atau dir . contohnya sebagai berikut

$ ls 
Document Desktop Image index.html
$ dir
Document Desktop Image index.html 
Membuat folder baru
Perintahnya adalah mkdir atau kependekan dari make directory. contohnya sebagai berikut

// membuat folder baru bernama new-folder
$ mkdir new-folder
// mengecek apakah sudah berhasil buat folder baru
$ ls 
new-folder ... ...
Membuat file baru
Gunakan perintah touch untuk membuat file baru

// membuat file index.html
$ touch index.html
// mengecek apakah sudah berhasil buat file baru
$ ls index.html ... ... 
Software terminal/command line yang recommended
Untuk OS Windows, terminal bawaannya adalah command prompt atau cmd yang relatif kurang nyaman untuk dipakai dalam tahap development. Oleh karena itu saya rekomendasikan untuk install terminal di bawah ini agar lebih optimal dalam mengerjakan project.

Cmder, link download: cmder (Terdapat dua pilihan versi : mini dan full. Mini adalah versi yang minimum dan yang full adalah versi mini ditambah Git dari windows)
Git bash, Git bash biasanya terinstall jika kita menginstall git di pc/laptop kita.
Apa itu Git ?
Git adalah sebuah Version Control System yaitu sistem yang mengelola perubahan dari sebuah dokumen, program komputer, website dan kumpulan informasi lain.

Selain itu, Git memungkinkan para pengembang perangkat lunak dari berbagai belahan dunia mengerjakan banyak projek bersama-sama tanpa mengharuskan bertatap muka.

Meng-install Git
Untuk menginstall git ke dalam windows, download terlebih dahulu file instalasi nya dari halaman download git. Jika menggunakan OS selain windows bisa menyesuaikan installasi dengan dokumentasi yang sudah tersedia

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-36-1024x767.png

halaman download git dari git scm
jika sudah terdownload, klik file instalasi lalu ikuti instruksi instalasi (klik next saja sampai selesai).

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-37.png

instalasi git, klik next sampai instalasi selesai
setelah instalasi selesai, kita dapat mengecek apakah Git sudah terinstall dengan cara membuka cmd atau command prompt lalu ketikkan perintah git --version.

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-38.png

memastikan git sudah terpasang dengan mengecek versi git yang sudah terinstall
Perintah Dasar Git
git init
git init adalah perintah untuk memasangkan git pada sebuah direktori atau folder yang sedang terbuka di command prompt atau terminal.

https://blog.sanbercode.com/wp-content/uploads/2020/06/image-39.png

memasangkan git pada folder git-demo
pada contoh di atas, setelah memberikan perintah git init akan muncul keterangan “Initialized empty Git repository in . . . ” yang berarti folder git-demo yang sedang dibuka di cmd sudah dapat menggunakan Git di dalamnya.

Jika diberikan perintah di cmd dir /ah maka akan ditampilkan bahwa pada direktori sudah terdapat folder yang hidden dengan nama folder .git . Di dalam folder .git itu lah terdapat sistem Git sehingga kita dapat menggunakan perintah-perintah git untuk mengatur project di dalam direktori .

git add 
git add yaitu perintah git untuk menambahkan perubahan-perubahan pada direktori project sebelum menyimpan perubahan tersebut. Misalkan di folder project kita terdapat file index.html yang ingin kita simpan perubahannya.

$ git add index.html
git commit 
setelah memberikan git add untuk menambahkan file-file yang ingin disimpan sebagai perubahan(update), selanjutnya kita berikan perintah git commit. git commit berfungsi untuk memberikan catatan atau pesan yang menandai perubahan yang sudah dibuat. contohnya seperti berikut

$ git commit -m "sudah menambahkan HTML dan CSS"
Contoh di atas menunjukkan bahwa kita memberikan pesan yaitu “sudah menambahkan HTML dan CSS” pada perubahan yang kita buat di project kita.

Membuat Repositori Git dan Mengelolanya
Pastikan sudah install git di komputer anda. Jika belum terinstall silakan ikuti langkah-langkahnya di sini: https://www.digitalocean.com/community/tutorials/how-to-contribute-to-open-source-getting-started-with-git‌

Membuat Repository Baru
Pada materi ini akan diberikan contoh membuat repositori Git dan mengelola menggunakan layanan Gitlab.

Repository atau repo di Gitlab biasa disebut dengan project. Berikut langkah-langkah untuk membuat repository baru: ‌

Setelah login anda akan menuju halaman Projects yang berisi semua repository yang anda miliki. Jika Anda user baru maka belum ada repository yang tersedia. Di halaman tersebut anda akan melihat tombol New Project di sebelah kanan atas. Klik tombol tersebut.

https://gblobscdn.gitbook.com/assets%2F-LiR2ZMOIaxmhLlPQhLa%2F-LnzIj-ESVuwgemxLh7w%2F-LnzJs6KDyobltG6gu6U%2Fgitlab%20project%20page.png?alt=media&token=4a8f55e0-79ee-47d5-b8a8-c487b4e74194

Enter a caption for this image (optional)
‌
Pada halaman membuat project baru, isi kolom project-name dengan nama yang Anda inginkan, misalkan: my first repo.
Pada kolom visibility level Anda akan melihat tiga pilihan yaitu Private, Internal, dan Public. Private artinya repo yang akan kita buat bersifat rahasia, hanya Anda dan orang yang Anda beri akses saja yang bisa membukanya. Sedangkan pilihan Internal berarti repo Anda akan dapat dilihat oleh semua user Gitlab. Pilihan “Public” berarti repo Anda akan terlihat oleh orang dari mana saja walaupun dia tidak memiliki akun gitlab. Pilih yang sesuai kebutuhan misalkan : Public.
Di bagian bawahnya terdapat pilihan checkbox “Initialize repository with a README”. Centang saja jika anda ingin langsung clone repository nya setelah dibuat.

https://gblobscdn.gitbook.com/assets%2F-LiR2ZMOIaxmhLlPQhLa%2F-LnzIj-ESVuwgemxLh7w%2F-LnzK-rPjJ4_xHHhcQhJ%2Fgitlab%20new%20project.png?alt=media&token=ab56e29b-bea8-48c0-8de9-e8209c2e49a8

Enter a caption for this image (optional)
‌
Jika berhasil maka Anda akan diarahkan menuju halaman project atau repo yang telah dibuat. Jika sebelumnya kita centang “Initialize repository with a README” maka repository kita akan berisi file README.md.
Pada Bagian kanan atas terdapat tombol clone. Ketika diklik maka akan keluar dua pilihan “Clone with SSH” dan “Clone with HTTPS”. Jika ingin clone dengan SSH maka anda harus setting dulu akun anda agar terhubung dengan komputer Anda. Atau pilih saja clone dengan HTTPS. Klik tombol salin/copy supaya langsung otomatis tercopy pada clipboard.

https://gblobscdn.gitbook.com/assets%2F-LiR2ZMOIaxmhLlPQhLa%2F-LnzIj-ESVuwgemxLh7w%2F-LnzKUmXpRtA_7x6ulpB%2Fgit%20clone%20gitlab.png?alt=media&token=48138cbf-a094-4c6f-88e7-52120b69ccd7

Enter a caption for this image (optional)


Setelah itu menuju ke terminal atau cmd. Arahkan menuju folder dimana anda ingin menyimpan repository yang sudah Anda buat. Berikan perintah git clone <link_anda_yang_barusan_dicopy> (tanda <> hanyalah sebagai penanda template tidak usah ditulis di perintah cmd)
git clone <your_repository_link_url> 
‌

Jika sudah berhasil diclone maka akan ditemukan folder dengan nama repository di Gitlab. Cara mengeceknya dengan perintah “ls” atau “dir”.
$ ls my-first-repo  
‌

Mengupload perubahan project dengan git push
‌

Ketika kita sudah berhasil clone repository kita di Gitlab maka tentu kita ingin melakukan update atau penambahan code pada project kita. Agar perbaruan yang kita simpan di local (komputer) kita dapat kita perbaharui juga di repository Gitlab maka kita bisa lakukan dengan git push. Berikut langkah-langkahnya: ‌

Ketika kita sudah memberikan perubahan terhadap suatu file atau membuat folder-folder baru pada folder project kita maka cara mengecek status perbaruan adalah dengan git status
$ git statusOn branch masterYour branch is up to date with 'origin/master'.
Changes not staged for commit:  (use "git add <file>..." to update what will be committed)  (use "git checkout -- <file>..." to discard changes in working directory)
	modified:   README.md
no changes added to commit (use "git add" and/or "git commit -a")
‌

Setelah git status maka akan ditampilkan list file yang “modified” atau “untracked”. “modified” artinya adalah kita mengubah file yang sebelumnya ada sedangkan “untracked” artinya file tersebut sama sekali baru di repository. Dalam contoh di atas terdapat perubahan pada file “README.md”.
Untuk menaikkan perubahan (stage) yang kita buat maka berikan perintah git add
$ git add README.md
// Jika ada terdapat banyak file dan kita ingin naikkan semuanya maka perintahnya: 
$ git add . 
‌

Sekarang perubahan tadi sudah pada tahap “staged”. jika kita cek status nya lagi maka akan didapati berbeda:
$ git status 
On branch master
Your branch is up to date with 'origin/master'.
Changes to be committed:  (use "git reset HEAD <file>..." to unstage)
modified:   README.md
‌

Selanjutnya adalah memberikan laporan atau commit terhadap perubahan yang kita buat dengan git commit.
$ git commit -m "Pesan saya: Mengubah README.md"
‌

tanda “-m” pada perintah commit artinya kita ingin memberikan pesan atau laporan terhadap perubahan yang sudah dibuat. Dalam hal ini laporannya adalah “Pesan saya: mengubah README.md”
Selanjutnya adalah push untuk mengirim /upload perubahan yang ada di local computer kita menuju repository yang ada di Gitlab. Jika kita berada di branch bernama master maka perintahnya adalah:
$ git push origin master 
‌

Jika branch yang sedang kita miliki di local adalah branch lain selain master maka cara push nya adalah exit: Ctrl+↩

$ git push origin <nama_branch>
Jika langkah tersebut sudah maka kita sudah berhasil mengupload perubahan yang kita buat di repository kita. 🥂

Tutorial Video 
Untuk selanjutnya materi dapat dicoba melalui video kelas di link berikut:
Intro Terminal & Git: https://www.youtube.com/watch?v=RwDjePJgnaw

Updated on Oktober 7, 2020