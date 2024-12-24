<?php

namespace Database\Seeders;

use App\Models\Inventaris;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'item_name' => 'PlayStation 5',
                'category' => 'PS5',
                'quantity' => 2,
                'price_per_hour' => 50.00,
            ],
        ];

        foreach ($data as $item) {
            Inventaris::create($item);
        }
    }
}
