@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>
    <div class="container">
        <a class="btn btn-warning mb-3" href="{{route('buku.create')}}"><i class="fas fa-plus"></i>Tambah Buku</a>
        <table class="table border">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif
            <h1 class="text-center mb-3">DATA BUKU</h1>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">PENULIS</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col">DIBUAT</th>
                    <th scope="col">DIEDIT</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bukus as $b)
                @php $i = 1; @endphp

                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->penulis }}</td>
                    <td>{{ $b->tahun }}</td>
                    <td>{{ $b->created_at }}</td>
                    <td>{{ $b->updated_at }}</td>

                    <td>
                        <a class="btn btn-success" href="/buku/edit/{{ $b->id }}"><i class="fas fa-edit"></i> Edit</a>

                        <a class="btn btn-danger" href="/buku/hapus/{{ $b->id }}"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
@endsection