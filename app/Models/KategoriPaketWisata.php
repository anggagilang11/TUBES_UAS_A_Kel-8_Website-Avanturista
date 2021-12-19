<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriPaketWisata extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tb_kategori_paket_wisata';
    protected $fillable = [
        'id',
        'nama',
        'slug',
    ];

    protected $casts = [
        'id' => 'integer'
    ];
}
