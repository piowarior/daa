<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pembayaran',
        'jumlah_transaksi',
        'tanggal_transaksi',
    ];

    public function pembayaran()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
