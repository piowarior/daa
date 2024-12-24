<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyimpanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name',
        'category',
        'quantity',
        'price_per_hour',
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, 'id_penyimpanan');
    }
}
