<?php

namespace Database\Seeders;

use App\Models\Pesanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pesanans = [
            [
                'id_penyimpanan' => 1,
                'peminjam_name' => 'Peminjam Dua',
                'no_kk' => '3327090912670009',
                'category' => 'PS4',
                'start_date' => '2024-11-01',
                'end_date' => '2024-11-10',
                'status_pembayaran' => 'completed',
                'status_pinjaman_barang' => 'finished',
                'harga' => 100000, 
                'approve_status' => 'approved',
            ],
        ];

        foreach ($pesanans as $pesanan) {
            Pesanan::create($pesanan);
        }
    }
}
