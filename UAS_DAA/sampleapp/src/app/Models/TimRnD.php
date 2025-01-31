<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimRnD extends Model
{
    use HasFactory;

    protected $table = 'tim_rnd';  // Menyatakan nama tabel yang digunakan
    protected $primaryKey = 'id_tim';  // Menentukan primary key

    protected $fillable = [
        'nama_tim',
        'ketua_tim',
        'peneliti',
        'ahli_teknologi',
        'analis_data',
    ];

    public function penelitian()
    {
        return $this->hasMany(Penelitian::class, 'id_tim');
    }
}