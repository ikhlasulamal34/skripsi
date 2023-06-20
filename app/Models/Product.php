<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    protected $table = 'produks';
    protected $fillable = [
        'nama_produk',
        'harga',
        'ketersediaan',
        'gambar1',
        'gambar2',
        'gambar3',
        'deskripsi',
    ];
}
