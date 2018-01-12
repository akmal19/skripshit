<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\KategoriFasilitas;

class FasilitasController extends Controller
{
    public function index ()
    {
        $fasilitas1 = Fasilitas::where('kategori', 'Ruangan dan Lab')->get();
        $fasilitas2 = Fasilitas::where('kategori', 'Komputer dan Alat Bengkel')->get();
        return view('fasilitas.index', ['fasilitas1' => $fasilitas1, 'fasilitas2' => $fasilitas2]);
    }

    public function create ()
    {
        $kategori = KategoriFasilitas::all();
        return view('fasilitas.create', ['kategori' => $kategori]);
    }

    public function postCreate (Request $request)
    {
        $input = $request->all();

        $fasilitas = Fasilitas::create($input);
        return redirect()->back()->with('message', 'Berhasil disimpan');
    }
}
