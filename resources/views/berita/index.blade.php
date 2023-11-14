@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')

<div class="container">
    <a href="/admin/beritas/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message }}</p>
    </div>
    @endif


    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($beritas as $berita)
                    <td>{{ $i++ }}</td>
                    <td>{{ $berita->title }}</td>
                    <td>{{ $berita->description }}</td>
                    <td>
                        <img src="/image/{{ $berita->image }}" alt="" class="img-fluid" width="100">
                    </td>
                    <td>
                        <a href="{{ route('beritas.edit', $berita->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('beritas.destroy', $berita->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table> 
    </div>
</div>

@endsection