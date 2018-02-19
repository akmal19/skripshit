<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriFasilitas;
use App\Models\Pengajuan;

class ManagePengajuanController extends Controller
{
    public function index ()
    {
        $pengajuan_pending = Pengajuan::where('status', 'PENDING')->get();
        $pengajuan_approved = Pengajuan::where('status', 'APPROVED')->get();
        return view('pengajuan.manage', ['pengajuan_pending'=>$pengajuan_pending, 'pengajuan_approved'=>$pengajuan_approved]);
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
