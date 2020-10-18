@extends('layouts.master')

@section('content')

<div>
  <h2>Tambah Data</h2>
  <form action="/buku" method="POST">
      @csrf
      <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Title">
          @error('title')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="form-group">
          <label for="total-page">Jumlah Halaman</label>
          <input type="number" class="form-control" name="total-page" id="total-page" placeholder="Jumlah Halaman">
          @error('total-page')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="form-group">
          <label for="release">Tahun Terbit</label>
          <input type="text" class="form-control" name="release" id="release" placeholder="Tahun Terbit">
          @error('release')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="form-group">
          <label for="genre">Genre</label>
          <input type="text" class="form-control" name="genre" id="genre" placeholder="Masukkan Genre">
          @error('genre')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <!-- <div class="form-group">
          <label for="kategori">Kategori</label>
          <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan kategori">
          @error('kategori')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan penerbit">
          @error('penerbit')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div> -->
      <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>

@endsection