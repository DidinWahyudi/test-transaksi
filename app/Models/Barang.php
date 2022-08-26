<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_barang', 'stok', 'jenis_barang'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
