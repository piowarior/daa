<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pembayaran',
        'no_tagihan',
        'denda',
        'status',
        'jatuh_tempo',
    ];
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }
}
