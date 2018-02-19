<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriFasilitas;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index ()
    {
        $peminjaman1 = Peminjaman::where('kategori', 'Ruangan dan Lab')->get();
        $peminjaman2 = Peminjaman::where('kategori', 'Komputer dan Alat Bengkel')->get();
        return view('peminjaman.index', ['peminjaman1' => $peminjaman1, 'peminjaman2' => $peminjaman2]);
    }

    public function create ()
    {
        $kategori = KategoriFasilitas::all();
        return view('peminjaman.create', ['kategori' => $kategori]);
    }

    public function postCreate (Request $request)
    {
        $input = $request->all();
        $peminjaman = Peminjaman::create($input);

        return redirect()->route('peminjaman')->with('message', 'Berhasil disimpan');
    }
}
