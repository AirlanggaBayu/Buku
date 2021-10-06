@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA BARU</title>
</head>

<body>
    <h1>TAMBAH DATA BUKU</h1>
    <div class="container">
        <form action="{{route('buku.store')}}" method="POST">
            @csrf
            <div class="row g-3 align-items-center">

                <div class="col-auto">
                    <label for="judul" class="col-form-label">JUDUL BUKU</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="judul" id="judul" class="form-control">
                </div>
                <div class="col-auto">
                    <label for="judul" class="col-form-label">PENULIS</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="penulis" id="judul" class="form-control">
                </div>
                <div class="col-auto">
                    <label for="judul" class="col-form-label">TAHUN</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="judul" name="tahun" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>
@endsection