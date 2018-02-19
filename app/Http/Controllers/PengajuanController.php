<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriFasilitas;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function index ()
    {
        $pengajuan_pending = Pengajuan::where('status', 'PENDING')->orWhere('status', 'REJECTED')->get();
        $pengajuan_approved = Pengajuan::where('status', 'APPROVED')->get();
        return view('pengajuan.index', ['pengajuan_pending'=>$pengajuan_pending, 'pengajuan_approved'=>$pengajuan_approved]);
    }

    public function create ()
    {
        $kategori = KategoriFasilitas::all();
        return view('pengajuan.create', ['kategori' => $kategori]);
    }

    public function postCreate (Request $request)
    {
        $input = $request->all();
        $input['status'] = "PENDING";
        $pengajuan = Pengajuan::create($input);

        return redirect()->route('pengajuan')->with('message', 'Berhasil disimpan');
    }

    public function edit ($id)
    {
        $kategori = KategoriFasilitas::getKategoriPenilaian();
        $pengajuan = Pengajuan::find($id);

        return view('pengajuan.edit', ['pengajuan' => $pengajuan, 'kategori' => $kategori]);
    }

    public function putEdit ($id, Request $request)
    {
        $input = $request->all();
        $pengajuan = Pengajuan::find($id);
        $pengajuan->update($input);

        return redirect()->back()->with('message', 'Berhasil disimpan');
    }

    public function ajukan (Request $request)
    {
        $input = $request->all();
        $pengajuan = Pengajuan::find($input['id']);
        $pengajuan->status = $input['approval'];
        $pengajuan->save();

        return redirect()->back()->with('message', 'Berhasil disimpan');
    }
}
