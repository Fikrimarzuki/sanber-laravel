@extends('layouts.master');

@section('content')

<div style="display: flex; flex-direction: column; align-items: center;">
    <a href="/buku/create" class="btn btn-primary" style="margin-bottom: 20px">Tambah</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Total Page</th>
                <th scope="col">Release Year</th>
                <th scope="col">Genre</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->judul}}</td>
                    <td>{{$value->jumlah_halaman}}</td>
                    <td>{{$value->tahun_terbit}}</td>
                    <td>{{$value->genre}}</td>
                    <td style="display: flex; align-items: center">
                        <div>
                            <a href="/buku/{{$value->id}}" class="btn btn-info">Show</a>
                        </div>
                        <div>
                            <a href="/buku/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        </div>
                        <form action="/buku/{{$value->id}}" method="POST">
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
</div>

@endsection

@push('scripts')
<script type="text/javascript">
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush