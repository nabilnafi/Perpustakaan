<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'judul',
        'category_id',
        'penerbit_id',
        'isbn',
        'pengarang',
        'jumlah_halaman',
        'stok',
        'tahun_terbit',
        'sinopsis',
        'foto',
    ];
}
