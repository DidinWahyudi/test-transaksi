<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'barang_id', 'tanggal_transaksi', 'jumlah'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
