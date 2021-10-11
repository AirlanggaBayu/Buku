<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

use function PHPUnit\Framework\returnSelf;

class BukuController extends Controller
{
    public function index()
    {
        // mengambil data dari table db_crud
        $bukus = Buku::orderBy('id', 'DESC')->get();

        // mengirim data db_crud ke view index
        return view('index', compact('bukus'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('buku.index')->with("success", 'Berhasil Menambahkan Data Baru');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $bukus = Buku::where('id', $id)->first();
        return view('edit', compact('bukus'));
    }

    public function update(Request $request, $id)
    {
        Buku::where('id', $id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun
        ]);
        return redirect()->route('buku.index')->with("success", 'Berhasil upadae Data ');
    }

    public function destroy($id)
    {
        Buku::where('id', $id)->delete();
        return redirect()->route('buku.index')->with("success", 'Berhasil hapus Data ');
    }
}
