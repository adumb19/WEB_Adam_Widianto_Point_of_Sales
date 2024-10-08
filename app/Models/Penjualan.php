<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'kode_transaksi',
        'tanggal_transaksi',
    ];

    //relasi dengan model user
    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
