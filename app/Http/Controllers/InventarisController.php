<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;
use App\Models\KategoriFasilitas;

class InventarisController extends Controller
{
    public function index ()
    {
        $inventaris = Inventaris::all();
        return view('inventaris.index', ['inventaris' => $inventaris]);
    }

    public function create ()
    {
        $kategori = KategoriFasilitas::all();
        return view('inventaris.create', ['kategori' => $kategori]);
    }

    public function postCreate (Request $request)
    {
        $input = $request->all();

        $inventaris = Inventaris::create($input);
        return redirect()->route('inventaris')->with('message', 'Berhasil disimpan');
    }
}
