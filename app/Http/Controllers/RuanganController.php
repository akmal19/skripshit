<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan = Ruangan::all();
        return view('ruangan.index', ['ruangan' => $ruangan]);
    }

    public function create()
    {
        return view('ruangan.create');
    }

    public function update($id) {
        $ruangan = Ruangan::find($id);
        return view('ruangan.edit', ['ruangan' => $ruangan]);
    }

    public function putUpdate(Request $request) {
        $input = $request->all();

        $ruangan = Ruangan::find($input['id']);
        $ruangan->update($input);

        if($ruangan) {
            return redirect()->route('ruangan')->with('message', 'Berhasil disimpan');
        } else {
            return redirect()->back()->with('message', 'Gagal disimpan');
        }
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        $input['semester'] = "";
        $input['pj'] = "";

        $ruangan = Ruangan::find($input['id']);
        if(!$ruangan) {
            $ruangan = Ruangan::create($input);
            if($ruangan) {
                return redirect()->route('ruangan')->with('message', 'Berhasil disimpan');
            } else {
                return redirect()->back()->with('message', 'Gagal disimpan');
            }
        } else {
            return redirect()->back()->with('error', 'Kode ruangan sudah di pakai');
        }
    }

    public function destroy($id)
    {
        $ruangan = Ruangan::destroy($id);
        return redirect()->back()->with('message', 'Berhasil dihapus');
    }
}
