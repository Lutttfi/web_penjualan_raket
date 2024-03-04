<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelians';

    protected $fillable = [
        'nama_produk',
        'tanggal_pembelian',
        'biaya',
        'jumlah_pembelian',
        'id_pembeli',
        'id_petugas',
    ];

    public function pembeli()
    {
        return $this->belongsTo(pembeli::class, 'id_pembeli');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}