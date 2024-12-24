<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

        protected $fillable = [
            'item_name',
            'category',
            'quantity',
            'price_per_hour',
        ];
        
}
