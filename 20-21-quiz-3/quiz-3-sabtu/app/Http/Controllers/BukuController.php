<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BukuController extends Controller
{
    public function soal1()
    {
        return view('soal1');
    }

    public function index()
    {
        $data = DB::table('buku')->get();
        return view('buku.index', compact('data'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'total-page' => 'required',
            'release' => 'required',
            'genre' => 'required'
        ]);
        $query = DB::table('buku')->insert([
            'judul' => $request['title'],
            'jumlah_halaman' => $request['total-page'],
            'tahun_terbit' => $request['release'],
            'genre' => $request['genre'],
            'kategori_id' => 1,
            'penerbit_id' => 1
        ]);
        return redirect('/buku');
    }

    public function show($buku_id)
    {
        $data = DB::table('buku')->where('id', $buku_id)->first();
        return view('buku.show', compact('data'));
    }

    public function edit($buku_id)
    {
        $data = DB::table('buku')->where('id', $buku_id)->first();
        return view('buku.edit', compact('data'));
    }

    public function update($buku_id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'total-page' => 'required',
            'release' => 'required',
            'genre' => 'required'
        ]);
        $query = DB::table('buku')->insert([
            'judul' => $request['title'],
            'jumlah_halaman' => $request['total-page'],
            'tahun_terbit' => $request['release'],
            'genre' => $request['genre'],
            'kategori_id' => 1,
            'penerbit_id' => 1
        ]);
        return redirect('/buku');
    }

    public function destroy($buku_id)
    {
        $query = DB::table('buku')->where('id', $buku_id)->delete();
        return redirect('/buku');
    }
}
