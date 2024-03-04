<?php

namespace App\Models;

use App\Models\Pembelian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';

    protected $fillable = [
        'id',
        'nama_petugas',
        'no_telp',
        'alamat'
    ];

    // Relasi dengan tabel Tiket
    public function pembelians()
    {
        return $this->hasMany(Pembelian::class, 'id_petugas');
    }
}
