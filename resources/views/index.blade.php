@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>DATA BUKU</title>
</head>

<body>
    <div class="container">
        <a class="btn btn-warning mb-3" href="{{route('buku.create')}}"><i class="fas fa-plus"></i>Tambah Buku</a>
        <table class="table border">
            
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
                @if (count ($bukus)<1)
                <h5>Belum ada data!</h5>
                @else
                    @foreach($bukus as $index=> $b)
                

                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $b->judul }}</td>
                        <td>{{ $b->penulis }}</td>
                        <td>{{ $b->tahun }}</td>
                        <td>{{ $b->created_at }}</td>
                        <td>{{ $b->updated_at }}</td>
                        

                        <td>
                            <a class="btn btn-success" href="{{route('buku.edit',['buku'=>$b->id])}}"><i class="fas fa-edit"></i> Edit</a>

                            <form action="{{route('buku.destroy',['buku'=>$b->id])}}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" id="" value="DELETE">
                                <button type="submit" class="btn btn-danger">HAPUS</button>
                            </form>
                        </td>

                        
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>

</body>

</html>
@endsection