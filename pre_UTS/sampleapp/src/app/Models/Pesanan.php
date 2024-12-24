<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'inventaris_id',
        'peminjam_name',
        'no_kk',
        'email',
        'inventaris_id',
        'category',
        'start_date',
        'end_date',
        'status_pembayaran',
        'status_pinjaman_barang',
        'harga',
    ];

}
