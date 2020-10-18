@extends('layouts.master')

@section('content')

<div style="display: flex; flex-direction: column; align-items: center">
  <h1>{{ $data->judul }}</h1>
  <h2>Genre: {{ $data->genre }}</h2>
  <h2>Jumlah Halaman:{{ $data->jumlah_halaman }}</h2>
  <h2>Tahun Terbit: {{ $data->tahun_terbit }}</h2>
</div>

@endsection