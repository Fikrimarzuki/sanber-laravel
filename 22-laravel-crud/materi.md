Hari 1 – Laravel CRUD (dengan Eloquent ORM)
Koneksikan project laravel dengan database dengan mengatur .env
Buat controller nya
php artisan make:controller PostController --resource
3.buat routes nya

Route::resource('post', 'PostController');
url	Methods	handler	Keterangan
/post	GET	PostController@index	menampilkan list data pertanyaan-pertanyaan (boleh menggunakan table html atau bootstrap card)
/post/create	GET	PostController@create	menampilkan form untuk membuat pertanyaan baru
/post	POST	PostController@store	menyimpan data baru ke tabel pertanyaan
/post/{post_id}	GET	PostController@show	menampilkan detail pertanyaan dengan id tertentu
/post/{post_id}/edit	GET	PostController@edit	menampilkan form untuk edit pertanyaan dengan id tertentu
/post/{post_id}	PUT	PostController@update	menyimpan perubahan data pertanyaan (update) untuk id tertentu
/post/{post_id}	DELETE	PostController@destroy	menghapus pertanyaand dengan id tertentu
4. buat databasenya
5. buat table menggunakan migration

Id	bigIncrements	pk auto_increment
Title	string	–
Body	text	–
6. buat modelnya

php artisan make:model Post
Post.php

class post extends model
{
    protected $table = "post";
    protected $fillable = ["title", "body"];
}
protect $table = “post”; berfungsi mengarahkan model ke table post di database
protect $fillable berfungsi memanipulasi kolom yang diisi

Create Data

PostController.php

<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Post;
 
class PostController extends Controller
{
    public function create()
    {
    	return view('post.create');
    }
 
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'body' => 'required'
    	]);
 
        Post::create([
    		'title' => $request->title,
    		'body' => $request->body
    	]);
 
    	return redirect('/post');
    }
......
use App\Post;
berfungsi import model yang berada si direktori folder app
Pegawai::create([
‘title’ => $request->nama,
‘body’ => $request->alamat
]);
berfungsi melakukan pengimputan data ke database fitur eloquent dengan method create()

resources/views/post/create.blade.php

 <h2>Tambah Data</h2>
        <form action="/posts" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">body</label>
                <input type="text" class="form-control" name="body" id="body" placeholder="Masukkan Body">
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
Tampil Data

PostController.php

...... 
 public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }
Post::all();
berfungsi mengambil semua data di database fitur eloquent dengan method all()

resources/views/post/index.blade.php

<a href="/posts/create" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col" style="display: inline">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($post as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->title}}</td>
                        <td>{{$value->body}}</td>
                        <td>
                            <a href="/posts/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/posts/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/posts/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
Tampil data berdasarakan id

PostController.php

.....
public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }
Post::find($id);
berfungsi mengambil semua data berdasarkan variabel id $id di database fitur eloquent dengan method find()

resources/views/post/show.blade.php

<h2>Show Post {{$post->id}}</h2>
<h4>{{$post->title}}</h4>
<p>{{$post->body}}</p>
Update Data

PostController.php

......
public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'body' => 'required',
        ]);

        $pegawai = post::find($id);
        $pegawai->title = $request->title;
        $pegawai->body = $request->body;
        $pegawai->update();
        return redirect('/post');
    }
$pegawai = post::find($id);
$pegawai->title = $request->title;
$pegawai->body = $request->body;
$pegawai->update();
berfungsi mengubah data bedasarkan method find($id) ke database fitur eloquent dengan method update()

resources/views/post/edit.blade.php

<div>
        <h2>Edit Post {{$post->id}}</h2>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}" id="title" placeholder="Masukkan Title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">body</label>
                <input type="text" class="form-control" name="body"  value="{{$post->body}}"  id="body" placeholder="Masukkan Body">
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
DELETE DATA

PostController.php

.......
 public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/post');
    }
$post = Post::find($id);
$post->delete();

berfungsi menghapus data bedasarkan method find($id) ke database fitur eloquent dengan method delete()

Updated on Oktober 19, 2020
https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-4-materi/hari-1-laravel-crud-dengan-eloquent-orm/