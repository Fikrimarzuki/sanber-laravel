Hari 5 – Laravel CRUD dengan Query Builder
Koneksikan project laravel dengan database dengan mengatur .env
Buat controller nya
php artisan make:controller nama_controllernya
Web Route
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
Create Data

PostController.php

 public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'body' => 'required',
        ]);
        $query = DB::table('post')->insert([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);
        return redirect('/posts');
    }
public function create berfungsi menreturn link menuju resources/views/post/create.blade.php
public function store(Request $request) berfungsi mengambil request inputan element name pada resources/views/post/create.blade.php
$request->validate([
‘title’ => ‘required|unique:post’,
‘body’ => ‘required’,
]);

berfungsi melakukan validasi jika title kosong atau title tidak boleh sama dengan data yang telah terinput maka akan menampilkan error dan jika body inputan kosong maka akan menampilkan error

$query = DB::table(‘post’)->insert([
“title” => $request[“title”],
“body” => $request[“body”]
]);
return redirect(‘/posts’);

berfungsi melakukan insert data pada kolom title dan body berdasarkan request inputan element name ‘title’ dan ‘body’ seperti pada sintax sql INSERT INTO post (title, body)
VALUES ($request[‘title’], $request[‘body’]);
setelah proses insert berhasil maka akan menuju ke URL /post

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
@error(‘body’)
<div class=”alert alert-danger”>
{{ $message }}
</div>
@enderror

berfungsi menapilkan error validasinya pada inputan element name body

Tampil Data

PostController.php

  public function index()
    {
        $post = DB::table('post')->get();
        return view('post.index', compact('post'));
    }
$post = DB::table(‘post’)->get();
berfungsi mengambil semua ada pada table post fungsi seperti pada sintax sql “SELECT * FROM post”
return view(‘post.index’, compact(‘post’));
berfungsi menreturn menuju resources/views/post/index.blade.php beserta melempar variabel post

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
@forelse adalah fungsi pada blade yang berfungsi melakukan loop foreach dan jika data nya kosong maka akan mereturn @empty

Tampil data berdasarakan id

PostController.php

public function show($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('post.show', compact('post'));
    }
$post = DB::table(‘post’)->where(‘id’, $id)->first();
Berfungsi memanpilkan data berdasarkan $id yang terdapat pada parameter public funtion show($id) sintax sqlnya
SELECT * FROM post WHERE id = $id

<h2>Show Post {{$post->id}}</h2>
<h4>{{$post->title}}</h4>
<p>{{$post->body}}</p>
Update Data

PostController.php

public function edit($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('post.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'body' => 'required',
        ]);

        $query = DB::table('post')
            ->where('id', $id)
            ->update([
                'title' => $request["title"],
                'body' => $request["body"]
            ]);
        return redirect('/posts');
    }
$post = DB::table(‘post’)->where(‘id’, $id)->first();
return view(‘post.edit’, compact(‘post’));
$post berfungsi membuat variabel yang menampung fungsi mengambil semua data berdasarkan paramenter variabel di pada public function edit($id) sintax sqlnya SELECT * FROM post WHERE id = $id
dan menreturn menuju resources/views/post/edit.blade.php beserta melempar variabel post

$query = DB::table(‘post’)
->where(‘id’, $id)
->update([
‘title’ => $request[“title”],
‘body’ => $request[“body”]
]);
return redirect(‘/posts’);
berfungsi melakukan update pada inputan element name title dan body berdasarkan id pada kolom database sintax sql
UPDATE post
SET title = $request[‘title], body= $request[‘body’]
WHERE id = $id

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

 public function destroy($id)
    {
        $query = DB::table('post')->where('id', $id)->delete();
        return redirect('/posts');
    }
$query = DB::table(‘post’)->where(‘id’, $id)->delete();
berfungsi menghapus data pada table post berdasarkan $id
sintax sqlnya
DELETE FROM post WHERE id = $id

video lengkapnya: https://www.youtube.com/playlist?list=PL8YCzrSDCR7g4IqBTi6zEbJZxyHaYZ9SL

Updated on Oktober 16, 2020

https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/pekan-3-materi/hari-5-laravel-crud-create-read-update-delete/