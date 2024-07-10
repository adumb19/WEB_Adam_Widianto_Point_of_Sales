<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_barang',
        'id_kategori',
        'nama_barang',
        'satuan',
        'qty',
        'harga',
    ];

    public function kategori() {
        return $this->belongsTo(Kategori_barang::class, 'id_kategori', 'id');
    }
}
