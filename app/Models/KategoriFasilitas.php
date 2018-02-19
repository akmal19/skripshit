<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriFasilitas extends Model
{
    protected $table = 'kategori_fasilitas';

    protected $fillable = [
        'kategori',
    ];

    protected function getKategoriPenilaian ()
    {
        $kategoris = self::all();

        $kategori = [];
        foreach($kategoris as $k => $v) {
            $kategori[$v->kategori] = $v->kategori;
        }
        return $kategori;
    }
}
