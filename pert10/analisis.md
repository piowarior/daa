
di sampleapp

bikin database product 
dengan isinya nama product, Harga product, category product

bikin juga product resource nya terus lakukan insert data di migration seeder dengan product
- Adidas (1000), Nike (999) category (sepatu)
- Levis (500) category (celana)
- Uniqlo (100) category (baju)

<br>
<br>

# Analisis 

## Apa itu product?
*product* adalah kata kunci utama dari permintaan untuk membuat sebuah entitas yang memiliki elemen-elemen berupa nama product, harga product, dan kategori product. Elemen-elemen ini berperan sebagai atribut penting yang menggambarkan setiap produk secara mendetail.

#### Menggunakan algoritma greedy untuk menentukan elemen berupa nama product, harga product, dan kategori product berada dalam lingkup product atau tidak :

*kenapa pake algoritma greedy ? algoritma ini menurut saya mudah di pahami dan sesuai dengan soal ini*

**Apakah nama product dapat dipisah atau tidak?**

Jika ya, nama product dapat dipisah karena, misalnya, memungkinkan pengelompokkan berdasarkan prefiks atau tipe tertentu. Namun, hal ini tidak relevan dalam konteks saat ini karena tujuan utamanya adalah mendeskripsikan produk secara utuh.

Jika tidak, nama product tidak perlu dipisah karena pengelompokkan nama dapat dilakukan langsung di dalam product, sehingga menjaga kesederhanaan struktur dan kemudahan pengelolaan data.

**Keputusan:** Nama product tidak dipisah, karena hal ini lebih sesuai dan masuk akal untuk tetap menyertakan nama sebagai bagian inti dari produk.

**Apakah harga product dapat dipisah atau tidak?**

Jika ya, harga product dapat dipisah untuk mempermudah penghitungan data terkait, seperti statistik harga berdasarkan kategori tertentu. Namun, ini dapat menambah kompleksitas sistem karena harga adalah atribut yang langsung berkaitan dengan identitas produk.

Jika tidak, harga product tidak perlu dipisah, karena lebih baik diletakkan dalam satu entitas untuk menjaga keselarasan antara nama dan harga, sehingga lebih mudah dipahami dan dikelola.

**Keputusan:** Harga product tidak dipisah, karena menyatukan nama dan harga dalam satu entitas membuat data lebih jelas dan mudah dibaca.

**Apakah kategori product dapat dipisah atau tidak?**

Jika ya, kategori product dapat dipisah ke tabel tersendiri agar mendukung relasi antar data, seperti membuat kategori yang bisa digunakan kembali oleh banyak produk. Namun, ini dapat menambah kerumitan karena membutuhkan relasi antar tabel.

Jika tidak, kategori product tidak perlu dipisah agar data tetap sederhana, terutama jika kategorisasi tidak terlalu kompleks dan hanya digunakan untuk klasifikasi langsung.

**Keputusan:** Kategori product tidak dipisah, karena memasukkannya langsung ke dalam entitas product mempermudah pengelolaan data tanpa perlu membuat relasi tambahan.


| Product    |  
|------------|  
| nama product      |  
| harga product     |  
| kategori product  |


### Tentang Apa?

Ini adalah tentang database bernama **product** yang memiliki elemen-elemen berupa **Nama Product**, **Harga Product**, dan **Kategori Product**.  
Tidak ada permintaan khusus mengenai tipe data yang digunakan dalam elemen *product*, sehingga tipe data dapat dipilih secara bebas dengan menggunakan analisis berdasarkan algoritma *greedy*.  

---

### Nama Product  
Nama produk memiliki beberapa opsi tipe data seperti:  
- **CHAR**: Digunakan untuk data dengan panjang tetap. Cocok untuk nama yang selalu memiliki panjang karakter yang sama, misalnya kode produk.  
- **VARCHAR**: Digunakan untuk data dengan panjang bervariasi. Cocok untuk nama produk yang tidak memiliki panjang tetap, karena lebih fleksibel dan efisien dalam penggunaan memori.  
- **TEXT**: Digunakan untuk data teks panjang. Cocok untuk deskripsi produk yang mungkin lebih dari sekadar nama.  

**Memilih VARCHAR**, karena nama produk umumnya memiliki panjang bervariasi dan menggunakan *VARCHAR* memberikan fleksibilitas sekaligus efisiensi dalam penyimpanan data.  

---

### Harga Product  
Harga produk memiliki beberapa opsi tipe data seperti:  
- **INT**: Digunakan untuk angka bulat yang tidak membutuhkan nilai desimal. Cocok untuk harga dalam bentuk integer, misalnya dalam satuan tertentu tanpa pecahan.  
- **BIGINT**: Digunakan untuk angka bulat yang sangat besar. Cocok untuk nilai-nilai harga yang tinggi, misalnya dalam mata uang tertentu yang memiliki denominasi besar.  
- **FLOAT/DOUBLE**: Digunakan untuk angka desimal. Cocok untuk harga yang memiliki pecahan desimal, seperti 999.99.  

**Memilih INT**, karena harga produk dalam kasus ini tidak disebutkan memerlukan pecahan desimal, sehingga *INT* lebih efisien dan cukup untuk kebutuhan data harga.  

---

### Kategori Product  
Kategori produk memiliki beberapa opsi tipe data seperti:  
- **ENUM**: Digunakan untuk data yang memiliki pilihan terbatas. Cocok untuk kategori tetap seperti "sepatu", "baju", "celana", sehingga tidak memerlukan relasi dengan tabel lain.  
- **VARCHAR**: Digunakan untuk data teks yang lebih fleksibel, memungkinkan penambahan kategori secara dinamis di masa mendatang.  

**Memilih ENUM**, karena kategori produk memiliki daftar nilai yang tetap dan terbatas. Hal ini memudahkan pengelolaan data dan mencegah kesalahan input.  

dengan isi data nya **Sepatu**,**Celana**,**Baju** 

---

### Jadi dapat disimpulkan terkait **product**  
adalah sebuah database yang memiliki elemen dan tipe data sebagai berikut:

| Elemen Product    | Tipe Data  |
|-------------------|------------|
| nama product      | VARCHAR   |
| harga product     | INT       |
| kategori product  | ENUM      |


#### Setelah menentukan struktur **product**, selanjutnya  mengisinya dengan data berikut menggunakan migration dan seeder:

- **Adidas** (1000), **Nike** (999) dengan kategori **Sepatu**  
- **Levis** (500) dengan kategori **Celana**  
- **Uniqlo** (100) dengan kategori **Baju**

Data ini dapat dimasukkan secara otomatis ke dalam database menggunakan seeder setelah struktur tabel dibuat dengan migration.












 

langkah langkas pembuatan nya 
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

 php artisan make:model Product -ms
 masuk ke vs code isi hal berikut di model migrasi dan seeder dari product

 di model 
  protected $fillable = [
        'nama_product',    
        'harga_prroduct',   
        'kategori_product', 
    ];

di migrasi

public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_product'); // Nama product
            $table->integer('harga_product'); // Harga product
            $table->enum('kategori_product', ['sepatu', 'celana', 'baju']);
            $table->timestamps();
        });
    }

di Productseeder

use App\Models\Product;

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
            ProductSeeder::class,
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

    







