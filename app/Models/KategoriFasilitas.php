<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriFasilitas extends Model
{
    protected $table = 'kategori_fasilitas';

    protected $fillable = [
        'kategori',
    ];
}
