<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $table = 'penelitians'; // Nama tabel yang digunakan
    protected $primaryKey = 'id_penelitian'; // Menentukan primary key

    protected $fillable = [
        'judul',
        'bidang',
        'id_tim',
    ];

    // Relasi dengan TimRnD
    public function timRnD()
    {
        return $this->belongsTo(TimRnD::class, 'id_tim');
    }

    // Relasi dengan HasilPenelitian
    public function hasilPenelitians()
    {
        return $this->hasMany(HasilPenelitian::class, 'id_penelitian');
    }
}
