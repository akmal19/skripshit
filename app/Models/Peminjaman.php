<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'kategori',
        'kode',
        'nama',
        'id_guru',
        'barang',
        'kuantitas',
        'lama_pinjaman',
        'keperluan_pinjaman'
    ];
}
