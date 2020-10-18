@extends('layouts.master')

@section('content')

<div>
  <h2>Edit Post {{$data->id}}</h2>
  <form action="/buku/{{$data->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" value="{{$data->judul}}" id="title" placeholder="Masukkan Title">
          @error('title')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="form-group">
          <label for="total-page">total-page</label>
          <input type="number" class="form-control" name="total-page"  value="{{$data->jumlah_halaman}}"  id="total-page" placeholder="Masukkan total-page">
          @error('total-page')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="form-group">
          <label for="release">Tahun Terbit</label>
          <input type="text" class="form-control" name="release" value="{{$data->tahun_terbit}}" id="release" placeholder="Tahun Terbit">
          @error('release')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="form-group">
          <label for="genre">Genre</label>
          <input type="text" class="form-control" name="genre" value="{{$data->genre}}" id="genre" placeholder="Masukkan Genre">
          @error('genre')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</div>

@endsection