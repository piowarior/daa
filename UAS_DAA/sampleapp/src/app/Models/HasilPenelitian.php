<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPenelitian extends Model
{
    use HasFactory;

    protected $table = 'hasil_penelitians'; // Nama tabel yang digunakan
    protected $primaryKey = 'id_hasil'; // Menentukan primary key

    protected $fillable = [
        'id_penelitian',
        'deskripsi',
        'tanggal_selesai',
    ];

    // Relasi dengan Penelitian
    public function penelitian()
    {
        return $this->belongsTo(Penelitian::class, 'id_penelitian');
    }
}
