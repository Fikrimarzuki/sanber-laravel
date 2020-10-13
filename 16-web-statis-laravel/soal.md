Hari 2 – Membuat Web Statis dengan Laravel
Target Pembelajaran
Berkenalan dengan struktur MVC (Bagian Controller)
Mengerti Routing Laravel
Mengerti Penggunaan Controller di Laravel
Handle Request dari URL dan form
Petunjuk Pengerjaan
Masih ingat dengan challenge hari pertama materi HTML? hari ini kita akan pakai halaman tersebut di project laravel. Kamu diminta untuk membuat sebuah project Laravel. Di dalam project tersebut terdapat 3 route yaitu: Home, Register, dan Welcome.

Langkah-langkahnya adalah:

Buatlah route terlebih dahulu untuk setiap halaman yang ingin dibuat.
Buat halaman blade untuk masing-masing route yang ingin dibuat. simpanlah di folder resources/views
Buat dua controller : HomeController dan AuthController.
Route Home diatur oleh HomeController, sedangkan route Register dan Welcome diatur oleh AuthController.
Alur program: dimulai dari halaman Home(route: '/') terdapat link menuju route register (route: '/register') . di halaman register terdapat form untuk mengisi nama depan, nama belakang, dan isian lainnya. Ketika disubmit di halaman register, form diarahkan ke halaman welcome ( route : '/welcome') dengan membawa data nama depan dan nama belakang yang akan ditampilkan di halaman welcome tersebut.
Jika sudah berhasil, berikut output yang diinginkan:

https://gblobscdn.gitbook.com/assets%2F-LiR2ZMOIaxmhLlPQhLa%2F-M0KuPzGggIONoBhRgLW%2F-M0L3F_vzbt4a7GHOiwv%2Flaravel-static.gif?alt=media&token=1bae4bc6-b5e0-4314-a2bf-fb4de04bfd7c

Updated on Oktober 13, 2020
https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-3-tugas-harian/hari-2-membuat-web-statis-dengan-laravel/