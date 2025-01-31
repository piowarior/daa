# **Implementasi Ke Program**

Pada tahap ini, kita akan membahas tentang bagaimana implementasi sistem ini dilakukan dalam program. Implementasi mencakup pengumpulan data yang diperlukan untuk membangun struktur sistem yang efektif dan efisien. Salah satu langkah penting adalah mendefinisikan dan merancang tabel yang akan digunakan dalam **Sistem Manajemen Penelitian dan Pengembangan (R&D)**.

### **Mengumpulkan Data yang Diperlukan**

Dalam membangun sistem manajemen ini, data yang perlu dikumpulkan sangat penting untuk memastikan bahwa semua informasi terkait tim, penelitian, dan hasil penelitian tercatat dengan baik. Data ini akan disimpan dalam tiga tabel utama, yaitu:

## **Tabel dalam Sistem Manajemen R&D**

| **Tabel**         | **Fungsi**                                                                                                                                           |
|-------------------|------------------------------------------------------------------------------------------------------------------------------------------------------|
| **Tim_RnD**       | Memberikan gambaran mengenai tim yang terlibat dalam proyek penelitian, termasuk peran setiap anggota tim dan pembagian tugas yang jelas.           |
| **Penelitian**    | Mencatat informasi penting terkait proyek penelitian yang sedang berlangsung, seperti judul penelitian, bidang, dan status penelitian, yang memudahkan pemantauan progres. |
| **Hasil_Penelitian** | Mendokumentasikan hasil akhir dari penelitian yang telah dilakukan, yang berguna untuk referensi di masa mendatang serta sebagai dasar untuk pengembangan lebih lanjut. |


## **Struktur Tabel**

### **Tabel Tim_RnD**
Tabel ini digunakan untuk mencatat informasi terkait tim yang terlibat dalam penelitian.

| **Kolom**       | **Tipe Data**     | **Deskripsi**                                                           |
|-----------------|-------------------|-------------------------------------------------------------------------|
| **id_tim**      | INT AUTO_INCREMENT | ID unik untuk setiap tim.                                               |
| **nama_tim**    | VARCHAR(255)       | Nama tim yang dibentuk untuk penelitian.                                |
| **ketua_tim**   | VARCHAR(255)       | Nama ketua tim yang memimpin proyek penelitian.                         |
| **peneliti**    | VARCHAR(255)       | Nama peneliti yang terlibat dalam penelitian.                           |
| **ahli_teknologi** | VARCHAR(255)     | Nama ahli teknologi yang mendukung tim.                                |
| **analis_data** | VARCHAR(255)       | Nama analis data yang menangani analisis data dalam penelitian.        |

### **Tabel Penelitian**
Tabel ini digunakan untuk mencatat informasi tentang setiap proyek penelitian yang sedang berlangsung.

| **Kolom**       | **Tipe Data**     | **Deskripsi**                                                           |
|-----------------|-------------------|-------------------------------------------------------------------------|
| **id_penelitian** | INT AUTO_INCREMENT | ID unik untuk setiap penelitian.                                       |
| **judul**       | VARCHAR(255)       | Judul dari penelitian yang sedang dilakukan.                            |
| **bidang**      | VARCHAR(255)       | Bidang atau topik penelitian yang dilakukan.                           |
| **id_tim**      | INT               | ID tim yang bertanggung jawab atas penelitian tersebut (merujuk ke Tim_RnD). |

### **Tabel Hasil_Penelitian**
Tabel ini digunakan untuk mendokumentasikan hasil dari penelitian yang telah dilakukan.

| **Kolom**        | **Tipe Data**     | **Deskripsi**                                                           |
|------------------|-------------------|-------------------------------------------------------------------------|
| **id_hasil**     | INT AUTO_INCREMENT | ID unik untuk setiap hasil penelitian.                                  |
| **id_penelitian**| INT               | ID penelitian yang hasilnya didokumentasikan (merujuk ke Penelitian).   |
| **deskripsi**    | TEXT              | Deskripsi tentang hasil yang dicapai dari penelitian.                  |
| **tanggal_selesai** | DATE           | Tanggal selesai penelitian dan hasilnya didokumentasikan.            |

## **Pengelolaan Data**
Dengan struktur tabel yang jelas ini, data dapat dikelola dengan baik, memungkinkan untuk pemantauan dan pengelolaan informasi penelitian yang lebih terorganisir dan efisien. Langkah selanjutnya adalah implementasi tabel ini ke dalam database dan penghubungan antar tabel untuk membentuk relasi yang jelas dalam sistem.



## langkah langkas pembuatan nya 
 buka computer 
 buka vs-code dan ubuntu linux  pastikan sudah mendownload nya serta ekstensi lain nya
 download file sampleapp di wa daa
 di terminal ubuntu masuk ke folder letak di simpan nya sampple app
 unzip file sampleapp
 masuk ke dalam file nya dengan code .
 masih di terminal ketikkan hal berikut:
 docker-compose up -d --build
 jika sudah selesai dan terconek ke docker nya 
 docker exec -it sample bash
 root@sample:/var/www/html# composer create-project --prefer-dist raugadh/fila-starter .
 tunggu hingga nanti selesai download nanti pasti akan terjadi eror 
 kembali ke vs code cari file bernama .env ubah hal berikut di dalam nya
 APP_TIMEZONE='Asia/Jakarta'
 APP_URL=http://localhost
 ASSET_URL=http://localhost

 DB_CONNECTION=mysql
 DB_HOST=db
 DB_PORT=3306
 DB_DATABASE=product
 DB_USERNAME=root
 DB_PASSWORD=p455w0rd

 lalu di terminal ketikkan hal berikut 
 php artisan key:generate
 php artisan storage:link
 php artisan migrate
 chown -R www-data:www-data storage/*
 chown -R www-data:www-data bootstrap/*
 php artisan project:init

 nanti jika ada failed tabel permisison lakukan php artisan migrate:fresh

 lanjut ke pembuatan model ketikkan 

 php artisan make:model TimRnD -ms
 masuk ke vs code isi hal berikut di model migrasi dan seeder dari product

 di model 
  atur sesuaikan dengan tabel yang di definisikan tadi

di migrasi
 atur sesuaikan dengan tabel yang di definisikan tadi


di Productseeder
 atur sesuaikan dengan tabel yang di definisikan tadi


lakukan hal serupa pada
- Penelitian
- HasilPenelitian

di database seeder

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
        ]);
        foreach ($users as $user){
            if($user->email=='admin@admin.com'){
                $user->assignRole('super_admin');
            }
        }
        }
    }

    private function callSeeders(): void {
        $this->call([
            RoleSeeder::class,
            TimRnDSeeder::class,
            PenelitianSeeder::class,
            HasilPenelitianSeeder::class,
        ]);
    }

membuat RoleSeeder dan mengisinya 

    <?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'guard_name' => 'web'
            ],
        ]);
    }
}

jika ada yang eror perbaiki sintaks sesuai kan 

jika tidak ada yang eror maka lakukan
ke terminal

php artisan make:filament-resource TimRnD --generate

klik yes yes terus

lakukan php artisan migrate 

php artisan project:init


ke browser ketikkan localhost masuk kedalam nya dan login
ketikkan 

email addres
admin@admin.com

password 
password

lihat ke dasboard product apakah ada dan benar data data yang dimasukkan jika belum ampil maka lakukan ulang 

ke terminal

php artisan make:filament-resource Product --generate

klik yes yes terus

lakukan php artisan migrate 

php artisan project:init

ke browser ketikkan localhost masuk kedalam nya dan login
ketikkan 

email addres
admin@admin.com

password 
password

jika ada eror maka lakukan perbaikan terhadap eror 
jika muncul maka selesai.

    







