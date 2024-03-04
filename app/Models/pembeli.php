<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembelis';

    protected $fillable = [
        'id',
        'nama',
        'no_telepon',
        'alamat'
    ];

    public function pembelians()
    {
        return $this->hasMany(Pembelian::class, 'id_pembeli');
    }
}
