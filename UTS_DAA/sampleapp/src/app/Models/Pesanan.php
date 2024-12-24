<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penyimpanan',
        'peminjam_name',
        'no_kk',
        'category',
        'start_date',
        'end_date',
        'status_pembayaran',
        'status_pinjaman_barang',
        'harga',
        'approve_status',
    ];

    public function penyimpanan()
    {
        return $this->belongsTo(Penyimpanan::class, 'id_penyimpanan');
    }
}
