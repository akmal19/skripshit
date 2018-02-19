<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

    protected $fillable = [
        'kategori',
        'type',
        'barang',
        'brand',
        'kuantitas',
        'satuan_harga',
        'deskripsi',
        'status'
    ];
}
