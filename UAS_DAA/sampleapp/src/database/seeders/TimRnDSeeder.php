<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TimRnD;

class TimRnDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tim_rnds = [
            [
                'nama_tim' => 'Tim Penelitian A',
                'ketua_tim' => 'John Doe',
                'peneliti' => 'Jane Smith',
                'ahli_teknologi' => 'Alice Brown',
                'analis_data' => 'Bob White',
            ],
            [
                'nama_tim' => 'Tim Penelitian B',
                'ketua_tim' => 'Mike Taylor',
                'peneliti' => 'Sarah Johnson',
                'ahli_teknologi' => 'Tom Clark',
                'analis_data' => 'Lisa Green',
            ],
            [
                'nama_tim' => 'Tim Penelitian C',
                'ketua_tim' => 'David Wilson',
                'peneliti' => 'Emily Roberts',
                'ahli_teknologi' => 'Peter Parker',
                'analis_data' => 'Nina Adams',
            ],
        ];

        foreach ($tim_rnds as $tim_rnd) {
            TimRnD::create($tim_rnd);
        }
    }
}
