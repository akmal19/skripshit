<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventaris';

    protected $fillable = [
        'kategori',
        'kode',
        'barang',
        'deskripsi',
        'type',
        'brand',
        'kuantitas',
        'layak',
        'perbaikan',
        'tidak_layak',
    ];
}
