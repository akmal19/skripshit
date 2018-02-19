<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriFasilitas;
use App\Models\Peminjaman;

class ManagePeminjamanController extends Controller
{
    public function index ()
    {
        $peminjaman1 = Peminjaman::where('kategori', 'Ruangan dan Lab')->get();
        $peminjaman2 = Peminjaman::where('kategori', 'Komputer dan Alat Bengkel')->get();
        return view('peminjaman.index', ['peminjaman1' => $peminjaman1, 'peminjaman2' => $peminjaman2]);
    }

    public function post (Request $request)
    {
        $input = $request->all();
        $approval = Pengajuan::find($input['id']);
        $approval->status = $input['approval'];
        $approval->save();
        return redirect()->back();
    }
}
