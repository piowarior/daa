<?php

namespace Database\Seeders;

use App\Models\Penyimpanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyimpananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyimpanans = [
            [
                'item_name' => 'PlayStation 4',
                'category' => 'PS4',
                'quantity' => 2,
                'price_per_hour' => 50.00,
            ],
        ];

        foreach ($penyimpanans as $penyimpanan) {
            Penyimpanan::create($penyimpanan);
        }
    }
}
