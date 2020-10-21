Hari 2 – Eloquent Relationships
One to one

erd one to one

https://blog.sanbercode.com/wp-content/uploads/2020/10/image-7.png

model
app/User.php

class User extends model
{
  public function profile(){
    return $this->hasOne('App\Profile');
  }
}
berfungsi membuat fungsi yang bernama profile yang memiliki method hasOne yang berfungsi membuat relasi user memiliki setiap satu user memiliki satu profile

app/Profile.php

class profile extends model
{
  public function user(){
    return $this->belongsTo('App\User');
  }
}
berfungsi membuat fungsi yang bernama user yang memiliki method belongsTo yang berfungsi membuat relasi profile dimiliki oleh user

Route

routes/web.php

Route::get('user','UserController@index');
Controller

App/controller/UserController.php

....
use App\User;

class UserController extends Controller
{
  public function index(){
    $user=User::all();
    return view('user', compact('user'));
  }
}
View

resource/views/user.blade.php

...
<h3>One to one</h3>
<table>
  <thead>
   <tr>
    <th>username</th>
    <th>email</th>
    <th>nama</th>
   </tr>
  <tbody>
   @foreach($user as $value)
   <tr>
    <td>{{$value->username}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->profile->name}}</td>
   </tr>
   @endforeach
  <tbody>
  </thead>
</table>
...
<td>{{$value->profile->name}}
berfungsi menampilkan data name dari table profile berdasarkan method profile pada model App/user/php

Relasi One to Many

erd one to many

https://blog.sanbercode.com/wp-content/uploads/2020/10/image-8.png

model

app/Kategori.php

class Kategori extends Model{
  public function buku()
  {
   return $this->hasMany('App\Buku');
  }  
}
berfungsi membuat fungsi yang bernama buku yang memiliki method hasMany yang berfungsi membuat relasi kategori memiliki banyak buku

app/Buku.php

class Buku extends Model{
  public function kategori()
  {
    return $this->belongsTo('App\Kategori');
  }
}
Route

routes/web.php

Route::get('kategori','KategoriController@index');
controller

app/controller/KategoriController.php

...
use App\Kategori;
class KategoriController extends Controller{
  public function index()
  {
   $kategori=Kategori::all();
   return view('kategori',compact('kategori'));
  }
}
View

resource/views/kategori.blade.php

...
<h3>One to Many</h3>
<table>
  <thead>
   <tr>
    <th>kategori</th>
    <th>title</th>
   </tr>
  <tbody>
   @foreach($kategori as $value)
   <tr>
    <td>{{$value->name}}</td>
    <td>
       @foreach($value->buku as $b)
       {{$b->title}}
       @endforeach
    </td>
   </tr>
   @endforeach
  <tbody>
  </thead>
</table>
...
Many to Many

https://blog.sanbercode.com/wp-content/uploads/2020/10/image-9.png

Model

App/Transaksi.php

class Transaksi extends Model{
  public function pelanggan()
  {
   return $this->belongsToMany('App\Pelanggan');
  }  
  public function barang()
  {
   return $this->belongsToMany('App\Barang');
  }
}
public function pelanggan()
{
return $this->belongsToMany(‘App\Pelanggan’);
}

berfungsi membuat fungsi yang bernama pelanggan yang memiliki method belongsToMany yang berfungsi membuat relasi Transaksi dimiliki oleh banyak Pelanggan

Link video :
laravel Eloquent Relationships : https://www.youtube.com/playlist?list=PL8YCzrSDCR7iRsk3GKZfwk5XHBHmf0bDT
Laravel Auth : https://www.youtube.com/playlist?list=PL8YCzrSDCR7g59FZKT2OKY99HRfHo9NK9

Updated on Oktober 20, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-4-materi/hari-2-eloquent-relationships/