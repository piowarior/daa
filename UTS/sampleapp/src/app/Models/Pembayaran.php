<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'no_pembayaran',
        'jumlah',
        'metode',
        'referensi',
        'tanggal_bayar',
        'status',
    ];

    // Tipe data yang dikonversi otomatis
    // protected $casts = [
    //     'tanggal_bayar' => 'date',
    //     'jumlah' => 'decimal:2',
    // ];

    public function transaksi()
    {
        return $this->hasOne(Tagihan::class);
    }

}
