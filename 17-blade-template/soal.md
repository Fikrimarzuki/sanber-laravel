Hari 3 – Memasangkan Template dengan Laravel Blade
Challenge kali ini kalian ditantang untuk memasangkan template Admin LTE ke project Laravel kalian.

Pasang Template Admin LTE
Pasangkan template adminLTE pada project Laravel tugas. Lakukan seperti pada video tutorial mulai dari membuat master template, copy paste asset ke folder public dan terakhir merapikan.

link adminLTE : https://github.com/ColorlibHQ/AdminLTE/releases

Extend Template 
Buat Route
Pada project kali ini buatlah dua route : '/' dan '/data-tables.

Route '/'
Route '/' berisi halaman yang menampilkan tabel berikut:

<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Task</th>
      <th>Progress</th>
      <th style="width: 40px">Label</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>Update software</td>
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
        </div>
      </td>
      <td><span class="badge bg-danger">55%</span></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Clean database</td>
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar bg-warning" style="width: 70%"></div>
        </div>
      </td>
      <td><span class="badge bg-warning">70%</span></td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Cron job running</td>
      <td>
        <div class="progress progress-xs progress-striped active">
          <div class="progress-bar bg-primary" style="width: 30%"></div>
        </div>
      </td>
      <td><span class="badge bg-primary">30%</span></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Fix and squish bugs</td>
      <td>
        <div class="progress progress-xs progress-striped active">
          <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
      </td>
      <td><span class="badge bg-success">90%</span></td>
    </tr>
  </tbody>
</table>
Route '/data-tables'
Halaman ini menampilkan table dengan code seperti berikut:

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.0
            </td>
            <td>Win 95+</td>
            <td>5</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.5
            </td>
            <td>Win 95+</td>
            <td>5.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 6
            </td>
            <td>Win 98+</td>
            <td>6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td>7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td>6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td>Win 2k+ / OSX.3+</td>
            <td>1.9</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Camino 1.0</td>
            <td>OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Camino 1.5</td>
            <td>OSX.3+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape Browser 8</td>
            <td>Win 98SE+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.1</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.2</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.2</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.3</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.3</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.4</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.4</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.5</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.6</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.7</td>
            <td>Win 98+ / OSX.1+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.8</td>
            <td>Win 98+ / OSX.1+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Epiphany 2.20</td>
            <td>Gnome</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>Safari 1.2</td>
            <td>OSX.3</td>
            <td>125.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>Safari 1.3</td>
            <td>OSX.3</td>
            <td>312.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>Safari 2.0</td>
            <td>OSX.4+</td>
            <td>419.3</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>Safari 3.0</td>
            <td>OSX.4+</td>
            <td>522.1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>
            <td>OSX.4+</td>
            <td>420</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>iPod Touch / iPhone</td>
            <td>iPod</td>
            <td>420.1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>S60</td>
            <td>S60</td>
            <td>413</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 7.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 7.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 8.0</td>
            <td>Win 95+ / OSX.2+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 8.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 9.0</td>
            <td>Win 95+ / OSX.3+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 9.2</td>
            <td>Win 88+ / OSX.3+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 9.5</td>
            <td>Win 88+ / OSX.3+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera for Wii</td>
            <td>Wii</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Nokia N800</td>
            <td>N800</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Nintendo DS browser</td>
            <td>Nintendo DS</td>
            <td>8.5</td>
            <td>C/A<sup>1</sup></td>
          </tr>
          <tr>
            <td>KHTML</td>
            <td>Konqureror 3.1</td>
            <td>KDE 3.1</td>
            <td>3.1</td>
            <td>C</td>
          </tr>
          <tr>
            <td>KHTML</td>
            <td>Konqureror 3.3</td>
            <td>KDE 3.3</td>
            <td>3.3</td>
            <td>A</td>
          </tr>
          <tr>
            <td>KHTML</td>
            <td>Konqureror 3.5</td>
            <td>KDE 3.5</td>
            <td>3.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Tasman</td>
            <td>Internet Explorer 4.5</td>
            <td>Mac OS 8-9</td>
            <td>-</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Tasman</td>
            <td>Internet Explorer 5.1</td>
            <td>Mac OS 7.6-9</td>
            <td>1</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Tasman</td>
            <td>Internet Explorer 5.2</td>
            <td>Mac OS 8-X</td>
            <td>1</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>NetFront 3.1</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>NetFront 3.4</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Links</td>
            <td>Text only</td>
            <td>-</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Lynx</td>
            <td>Text only</td>
            <td>-</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>IE Mobile</td>
            <td>Windows Mobile 6</td>
            <td>-</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>PSP browser</td>
            <td>PSP</td>
            <td>-</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Other browsers</td>
            <td>All others</td>
            <td>-</td>
            <td>-</td>
            <td>U</td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
Pada halaman data-tables kita membutuhkan asset CSS dan JS dari plugin data-tables. asset Javascript di antaranya datatables dan datatables-bs4 berikut ini script yang dibutuhkan (sesuaikan alamat asset dengan alamat yang ada di dalam project public).


<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
Script dari datatables hanya dibutuhkan di view yang menampilkan route '/data-tables' dan tidak dibutuhkan di route '/' . gunakan directive @stack dan @push dari Blade untuk membuat kondisi tersebut terpenuhi.

Updated on Oktober 14, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-3-tugas-harian/hari-3-memasangkan-template-dengan-laravel-blade/