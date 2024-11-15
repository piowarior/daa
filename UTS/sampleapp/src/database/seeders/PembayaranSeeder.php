<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembayarans = [
            [
                'no_pembayaran' => 'PMB-001',
                'jumlah' => 200000.00,
                'metode' => 'transfer_bank',
                'referensi' => 'TRX123456',
                'tanggal_bayar' => '2024-11-15',
                'status' => 'selesai',
            ],
            [
                'no_pembayaran' => 'PMB-002',
                'jumlah' => 150000.00,
                'metode' => 'e_wallet',
                'referensi' => 'EW456789',
                'tanggal_bayar' => '2024-11-16',
                'status' => 'menunggu',
            ],
        ];
        foreach ($pembayarans as $pembayaran) {
            Pembayaran::create($pembayaran);
        }
    }
}
