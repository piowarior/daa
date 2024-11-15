<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaksis = [
            [
                'id_tagihan' => 1,
                'jumlah_transaksi' => 2.00,
                'tanggal_transaksi' => '2024-11-15',
            ],
            [
                'id_tagihan' => 2,
                'jumlah_transaksi' => 1.00,
                'tanggal_transaksi' => '2024-11-20',
            ],
        ];

        foreach ($transaksis as $transaksi) {
            Transaksi::create($transaksi);
        }
    }
}
