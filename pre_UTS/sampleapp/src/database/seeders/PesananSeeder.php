<?php

namespace Database\Seeders;

use App\Models\Pesanan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pesananData = [
            [
                'inventaris_id' => 1,
                'peminjam_name' => 'Peminjam Dua',
                'no_kk' => '3327090912670009',
                'email' => 'peminjam2@example.com',
                'category' => 'PS4',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(5),
                'status_pembayaran' => 'completed',
                'status_pinjaman_barang' => 'finished',
                'harga' => 100000, 
            ],
        ];

        foreach ($pesananData as $data) {
            Pesanan::create($data);
        }
    }
}
