<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama_product' => 'Adidas',
                'harga_product' => 1000,
                'kategori_product' => 'sepatu',
            ],
            [
                'nama_product' => 'Nike',
                'harga_product' => 999,
                'kategori_product' => 'sepatu',
            ],
            [
                'nama_product' => 'Levis',
                'harga_product' => 500,
                'kategori_product' => 'celana',
            ],
            [
                'nama_product' => 'Uniqlo',
                'harga_product' => 100,
                'kategori_product' => 'baju',
            ],
        ];

        // Menambahkan data ke dalam tabel products
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
