<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_penjualan',
        'id_barang',
        'jumlah',
        'qty',
        'harga',
        'total_harga',
        'nominal_bayar',
        'kembalian',
    ];

    //relasi dengan model penjualan
    public function penjualan() {
        return $this->belongsTo(Penjualan::class, 'id_penjualan', 'id');
    }

    public function barang() {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
}
