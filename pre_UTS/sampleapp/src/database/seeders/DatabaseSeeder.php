<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->callSeeders();
       $this->seedUsers();
    }
        private function seedUsers(): void{
            if(!User::where('email','admin@admin.com')->exists()){
                $users = User::factory()->createmany([
                    [
                        'name' => 'Admin',
                        'email' =>  'admin@admin.com',
                        'password' => bcrypt('password'),
                    ],
                    [
                        'name' => 'Peminjam',
                        'email' =>  'peminjam@admin.com',
                        'password' => bcrypt('password'),
                    ],
            ]);
            foreach ($users as $user){
                if($user->email=='admin@admin.com'){
                    $user->assignRole('super_admin');
                } else
                {
                    $user->assignRole('peminjam');
                }
            }
            }
        }

        private function callSeeders(): void {
            $this->call([
                RoleSeeder::class,
                PesananSeeder::class,
                InventarisSeeder::class,
            ]);
        }
        
    
}
