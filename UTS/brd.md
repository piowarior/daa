# Latar Belakang/Analisis/konsep

__GameShare__ berencana mengembangkan sistem __Simpan Pinjam PlayStation__ untuk menyediakan solusi bagi para penggemar game yang ingin menikmati perangkat PlayStation tanpa harus membeli secara permanen. Sistem ini dirancang untuk memungkinkan pengguna meminjam konsol PlayStation, game, dan aksesori terkait lainnya melalui platform digital yang akan dikembangkan. Dengan sistem ini, GameShare berharap dapat memberikan fleksibilitas kepada pengguna yang ingin menikmati game dalam jangka waktu tertentu tanpa perlu membeli perangkat.

GameShare meminta Dalam Rancangan sistem ini, hanya melibatkan dua pihak utama: __Peminjam__ sebagai pengguna yang ingin menyewa perangkat,dan pihak __Admin GameShare__ adalah yang bertanggung jawab atas pengelolaan serta kepemilikan perangkat. Untuk pemesanan, pengguna dapat melakukannya secara __online__, namun pengambilan dan pengembalian perangkat dilakukan langsung di __kantor GameShare__. Hal ini memberikan keamanan ekstra, memastikan perangkat dikembalikan dalam kondisi baik.

Layanan ini tersedia selama hari __kerja dengan jam operasional tertentu__, memungkinkan Peminjam untuk memesan kapan saja secara online, tetapi hanya dapat mengambil barang sesuai jadwal yang telah ditetapkan. GameShare memilih pendekatan ini untuk memberikan kontrol lebih baik atas kondisi perangkat yang dipinjam, serta memastikan pengalaman pengguna yang aman dan terjamin.

__Sistem ini dibangun__ karena adanya kebutuhan bagi para gamer yang ingin merasakan pengalaman bermain tanpa komitmen membeli perangkat mahal. Melalui layanan ini, GameShare dapat memanfaatkan perangkat yang sudah dimiliki untuk menghasilkan pendapatan tambahan, sekaligus memberikan solusi yang lebih hemat bagi pengguna.

<br><br><br><br>

# Business Requirements Document (BRD)


CV. GameShare

Dokumen Kebutuhan Bisnis (BRD)

Sistem Penyewaan PlayStation GameShare

Tanggal Mulai Proyek: 15 - 11 - 2024 
Klien: GameShare
Modul: Registrasi Pengguna, Manajemen Inventaris, Pelacakan Keuangan, Pengembalian Perangkat

Disiapkan oleh: Muhamad Rohisul Iman

## 1. Introduction
### 1.1 Purpose of Document
Dokumen ini merupakan Dokumen Kebutuhan Bisnis untuk sistem penyewaan PlayStation GameShare. Dokumen ini bertujuan untuk menjelaskan kebutuhan, alur bisnis, dan spesifikasi fungsional yang diperlukan untuk membangun layanan penyewaan yang memungkinkan pengguna meminjam perangkat PlayStation, game, dan aksesori terkait. Sistem ini diharapkan memberikan solusi yang fleksibel bagi para gamer yang ingin menikmati perangkat PlayStation tanpa perlu membeli perangkat secara permanen.

### 1.2 Project Scope
Modul utama yang akan dikembangkan meliputi:

- **Modul Registrasi Pengguna**  
  Memungkinkan pengguna baru untuk membuat akun dan mendaftarkan diri mereka pada platform GameShare sebelum melakukan penyewaan perangkat.
  
- **Modul Manajemen Inventaris**  
  Menyediakan fungsi untuk melacak ketersediaan perangkat, game, dan aksesori, serta mencatat status peminjaman dan pengembalian perangkat.

- **Modul Pelacakan Keuangan**  
  Mengatur pencatatan transaksi yang melibatkan biaya sewa, denda keterlambatan pengembalian, dan pendapatan yang dihasilkan dari layanan penyewaan ini.

- **Modul Pengembalian Perangkat**  
  Memastikan proses pengembalian perangkat dapat dikelola secara efisien, sehingga pengguna dapat mengembalikan perangkat sesuai jadwal yang ditetapkan, dan kondisi perangkat dapat diperiksa oleh admin GameShare.


## 3. Business Requirement

### 3.1  Fungsional Requirement

##### 3.1.1 Modul Registrasi Pengguna

| No  | Kebutuhan                                    | Modul/Doctype       | Status             |
|-----|----------------------------------------------|----------------------|--------------------|
| 1   | Pendaftaran akun baru                        | Registrasi Pengguna | Modul/Doctype Baru |
|     | a. Insert: Membuat akun baru                 |                      |                    |
|     | b. View: Melihat profil dan riwayat          |                      |                    |
|     | c. Update: Mengedit informasi profil         |                      |                    |
|     | d. Delete: Menghapus akun                    |                      |                    |
|     | e. Approval: Persetujuan registrasi          |                      |                    |

---

##### 3.1.2 Modul Manajemen Inventaris

| No  | Kebutuhan                                    | Modul/Doctype       | Status             |
|-----|----------------------------------------------|----------------------|--------------------|
| 1   | Pengelolaan perangkat dan aksesori           | Manajemen Inventaris | Modul/Doctype Baru |
|     | a. Insert: Menambahkan perangkat baru        |                      |                    |
|     | b. View: Melihat ketersediaan perangkat      |                      |                    |
|     | c. Update: Memperbarui kondisi perangkat     |                      |                    |
|     | d. Delete: Menghapus perangkat yang rusak    |                      |                    |
|     | e. Approval: Persetujuan penghapusan         |                      |                    |

---

##### 3.1.3 Modul Pelacakan Keuangan

| No  | Kebutuhan                                    | Modul/Doctype       | Status             |
|-----|----------------------------------------------|----------------------|--------------------|
| 1   | Pengelolaan transaksi keuangan               | Pelacakan Keuangan  | Modul/Doctype Baru |
|     | a. Insert: Mencatat biaya sewa dan denda     |                      |                    |
|     | b. View: Melihat laporan pendapatan          |                      |                    |
|     | c. Update: Menyesuaikan tarif sewa/denda     |                      |                    |
|     | d. Delete: Menghapus transaksi yang salah    |                      |                    |
|     | e. Approval: Persetujuan transaksi           |                      |                    |

---

##### 3.1.4 Modul Pengembalian Perangkat

| No  | Kebutuhan                                    | Modul/Doctype       | Status             |
|-----|----------------------------------------------|----------------------|--------------------|
| 1   | Pengelolaan pengembalian perangkat           | Pengembalian Perangkat | Modul/Doctype Baru |
|     | a. Insert: Pencatatan pengembalian perangkat |                      |                    |
|     | b. View: Melihat status pengembalian         |                      |                    |
|     | c. Update: Mencatat kondisi pengembalian     |                      |                    |
|     | d. Delete: Menghapus data pengembalian       |                      |                    |
|     | e. Approval: Persetujuan kondisi perangkat   |                      |                    |
