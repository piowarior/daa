<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tagihan;

class TagihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tagihans = [
            [
                'id_pembayaran' => 1,
                'no_tagihan' => 'TG-001',
                'denda' => 0,
                'status' => 'sudah_bayar',
                'jatuh_tempo' => '2024-11-30',
            ],
            [
                'id_pembayaran' => 2,
                'no_tagihan' => 'TG-002',
                'denda' => 10.00,
                'status' => 'belum_bayar',
                'jatuh_tempo' => '2024-12-05',
            ],
        ];

        foreach ($tagihans as $tagihan) {
            Tagihan::create($tagihan);
        }
    }
}
