<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\Pengajuan;
use App\Models\Peminjaman;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all()->count();
        $pengajuan = Pengajuan::all()->count();
        $peminjaman = Peminjaman::all()->count();
        return view('home', ['fasilitas' => $fasilitas, 'pengajuan' => $pengajuan, 'peminjaman' => $peminjaman]);
    }
}
