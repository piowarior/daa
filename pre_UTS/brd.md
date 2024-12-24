# Latar Belakang/Analisis/konsep

__Sistem Simpan Pinjam__ adalah suatu sistem yang melibatkan __peminjaman__ dan __pengembalian__ barang atau uang antara dua pihak: __Peminjam__ yang meminjam dan __Penyedia atau Admin__ yang menyediakan barang atau uang untuk dipinjamkan. Tujuannya adalah memberi kemudahan bagi peminjam untuk memperoleh barang atau uang tanpa harus membelinya secara permanen, sementara penyedia mendapatkan manfaat dari barang yang dipinjamkan. Sistem ini umumnya mencakup kesepakatan mengenai durasi, biaya, dan ketentuan pengembalian, serta diterapkan di berbagai sektor seperti perbankan dan penyewaan barang.

Dalam konteks ini __GameShare__ berencana mengembangkan sistem __Simpan Pinjam PlayStation__ untuk menyediakan solusi bagi para penggemar game yang ingin menikmati perangkat PlayStation tanpa harus membeli secara permanen. Sistem ini dirancang untuk memungkinkan pengguna meminjam konsol PlayStation. Dengan sistem ini, GameShare berharap dapat memberikan fleksibilitas kepada pengguna yang ingin menikmati game dalam jangka waktu tertentu tanpa perlu membeli perangkat.

GameShare ingin proses peminjaman berjalan cepat dan praktis, karenanya memutuskan untuk menyederhanakan alur pemesanan tanpa perlu proses login atau registrasi; pengguna cukup memilih perangkat yang ingin disewa, mengisi data diri, dan __pesanan akan di catat oleh admin__ serta mendata status pemesanan terkait barangnya apakah sudah di kembalikan atau belum. Untuk __memastikan ketersediaan perangkat__ yang optimal, GameShare menginginkan perlu adanya __sistem manajemen yang terstruktur__, sehingga setiap perangkat , dan aksesori dapat dilacak kondisinya secara akurat. Di sisi lain, agar transaksi berjalan transparan, __setiap biaya sewa dan denda dicatat dengan rapi__.

GameShare meminta Dalam Rancangan sistem ini, hanya melibatkan dua pihak utama: __Peminjam__ sebagai pengguna yang melihat barang apasaja dan yang ingin menyewa perangkat,dan pihak __Admin GameShare__ adalah yang bertanggung jawab atas pengelolaan serta kepemilikan perangkat. Untuk pemesanan, pengguna harus mengunjungi di __kantor GameShare__ dan pengembalian perangkat dilakukan langsung di __kantor GameShare__. Layanan ini tersedia selama __hari kerja dengan jam operasional 08:00 - 15:00, senin - kamis__, dengan memungkinkan Peminjam untuk melihat barang secara __online__, tetapi hanya dapat mendaftar, membayar dan mengambil barang di __kantor GameShare__ agar sang adminlah yang mencatat pesanan dan mendatanya.

__Sistem ini dibangun__ karena adanya kebutuhan bagi para gamer yang ingin merasakan pengalaman bermain tanpa komitmen membeli perangkat mahal. Melalui layanan ini, GameShare dapat memanfaatkan perangkat yang sudah dimiliki untuk menghasilkan pendapatan tambahan, sekaligus memberikan solusi yang lebih hemat bagi pengguna.

<br><br>
> **Catatan:** *Kalimat yang di-bold merupakan alasan mengapa struktur BRD ini seperti ini.*

<br><br>

# Business Requirements Document (BRD)


CV. GameShare

Dokumen Kebutuhan Bisnis (BRD)

Sistem Penyewaan PlayStation GameShare

Tanggal Mulai Proyek: 15 - 11 - 2024 
Klien: GameShare
Modul: Pesanan, Manajemen Inventaris, Pelacakan Keuangan, Pengembalian Perangkat

Disiapkan oleh: Muhamad Rohisul Iman

## 1. Introduction
### 1.1 Purpose of Document
Dokumen ini merupakan Dokumen Kebutuhan Bisnis untuk sistem penyewaan PlayStation GameShare. Dokumen ini bertujuan untuk menjelaskan kebutuhan, alur bisnis, dan spesifikasi fungsional yang diperlukan untuk membangun layanan penyewaan yang memungkinkan pengguna meminjam perangkat PlayStation dan aksesori terkait. Sistem ini memberikan solusi yang fleksibel bagi para gamer yang ingin menikmati perangkat PlayStation tanpa perlu membeli perangkat secara permanen.

### 1.2 Project Scope
Modul utama yang akan dikembangkan meliputi:

- **Modul Pemesanan**  
  Memungkinkan pengguna langsung memilih perangkat yang ingin disewa, kemudian mengisi data diri dan melakukan pembayaran awal untuk memproses pesanan dan status barang apakah sudah di kembalikan atau belum.
  
- **Modul Manajemen Inventaris**  
  Menyediakan fungsi untuk melacak ketersediaan perangkat game serta mencatat status peminjaman dan pengembalian perangkat.

- **Modul Pelacakan Keuangan**  
  Mengatur pencatatan transaksi yang melibatkan biaya sewa, denda keterlambatan pengembalian,kerusakan dan pendapatan yang dihasilkan dari layanan penyewaan ini.




## 2. System Requirement

### 2.1 Business Flow Keuangan

Alur bisnis keuangan dalam sistem penyewaan GameShare mencakup seluruh transaksi yang berhubungan dengan pemesanan, pembayaran, denda keterlambatan, dan pengembalian perangkat. Berikut adalah tahapan alur keuangan:

>#### **gambar flowchart terdapat di file Flowchart**


**Keterangan :**

1. **Peminjam menentukan perangkat yang akan disewa melalui aplikasi GameShare.**
   - Peminjam memilih PlayStation yang ingin disewa melalui aplikasi GameShare.

2. **Peminjam mengisi data diri dan melakukan verifikasi.**
   - Setelah memilih perangkat, peminjam mengisi data diri untuk verifikasi, termasuk informasi kontak dan identitas.

3. **Pembayaran sewa dilakukan oleh peminjam.**
   - Pembayaran untuk perangkat yang dipilih dilakukan melalui aplikasi GameShare, dan proses transaksi dicatat.

4. **Admin menerima dan memeriksa pesanan yang masuk.**
   - Admin menerima pesanan, memeriksa apakah perangkat tersedia dan validasi data peminjam.

5. **Perangkat tersedia?**
   - **Jika ya**, pesanan diproses lebih lanjut untuk pengambilan perangkat.
   - **Jika tidak**, pesanan dibatalkan, dan pemberitahuan dikirimkan kepada peminjam.

6. **Admin mengonfirmasi pesanan.**
   - Admin mengonfirmasi pesanan dan memberi instruksi pengambilan perangkat oleh peminjam.

7. **Peminjam datang ke kantor GameShare dan mengambil perangkat.**
   - Peminjam harus datang ke kantor GameShare untuk mengambil perangkat yang disewa setelah melakukan verifikasi identitas.

8. **Peminjam menggunakan perangkat selama masa sewa.**
   - Selama masa sewa, peminjam bebas menggunakan perangkat yang telah disewa.

9. **Peminjam mengembalikan perangkat ke kantor GameShare.**
   - Setelah masa sewa berakhir, peminjam mengembalikan perangkat ke kantor GameShare.

10. **Admin memeriksa kondisi perangkat yang dikembalikan.**
    - Admin memeriksa apakah perangkat dalam kondisi baik atau ada kerusakan.

11. **Perangkat dalam kondisi baik?**
    - **Jika ya** dan pengembalian tepat waktu, transaksi dianggap selesai tanpa masalah.
    - **Jika tidak**, admin mengevaluasi kerusakan dan menghitung denda.

12. **Pengembalian tepat waktu?**
    - **Jika ya**, transaksi selesai tanpa denda.
    - **Jika tidak**, admin menghitung denda keterlambatan dan memberi tagihan kepada peminjam.

13. **Admin menemukan kerusakan pada perangkat.**
    - Jika perangkat rusak, admin menghitung biaya perbaikan dan memberi tagihan kepada peminjam.

14. **Peminjam membayar denda jika ada.**
    - Jika ada denda, peminjam melakukan pembayaran sesuai dengan tagihan yang diberikan.

15. **Transaksi selesai.**
    - Setelah pembayaran selesai, transaksi dianggap selesai dan perangkat siap untuk disewa oleh peminjam lain.



## 3. Business Requirement

### 3.1  Fungsional Requirement

##### 3.1.1 Modul Pesanan

| No  | Kebutuhan                                     | Modul/Doctype | Status             |
|-----|-----------------------------------------------|----------------|--------------------|
| 1   | Pengguna memilih perangkat dan melakukan pesanan | Pemesanan     | Modul/Doctype Baru |
|     | a. Insert: Pengguna mengisi data diri untuk pesanan |            |                    |
|     | b. View: Menampilkan rincian pesanan dan status |               |                    |
|     | c. Update: Memperbarui data pesanan jika diperlukan |            |                    |
|     | d. Delete: Membatalkan pesanan sebelum dikonfirmasi |            |                    |
|     | e. Approval: Admin mengonfirmasi dan memproses pesanan |          |                    |

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

<br><br>

## 4. Approval

| No  | Modul/Doctype          | Tingkat Approval | Fungsi                                                                                                                                                       |
|-----|-------------------------|------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1   | Pemesanan               | User Input       | Pengguna memilih perangkat, mengisi data diri, dan mengirim pesanan untuk diproses.                                                                          |
|     |                         | Approval 1       | Admin menyetujui atau menolak pesanan; jika ditolak, pengguna dapat memperbaiki data atau pesanan.                                                           |
|     |                         |                  |                                                                                                                                                              |
| 2   | Manajemen Inventaris    | User Input       | Admin memasukkan perangkat baru ke inventaris, dengan opsi edit sebelum di-approval.                                                                         |
|     |                         | Approval 1       | Admin atasan menyetujui atau menolak perangkat baru, jika ditolak kembali ke admin inventaris.                                                               |
|     |                         |                  |                                                                                                                                                              |
| 3   | Pelacakan Keuangan      | User Input       | Admin mencatat transaksi penyewaan, denda, dan pengembalian dengan opsi edit sebelum di-approval.                                                            |
|     |                         | Approval 1       | Supervisor keuangan memverifikasi transaksi, jika ditolak kembali ke admin keuangan untuk revisi.                                                            |
|     |                         | Approval 2       | Manajer keuangan memberikan persetujuan akhir pada transaksi yang telah diverifikasi. Jika ditolak, kembali ke supervisor untuk koreksi lebih lanjut.        |
|     |                         |                  |                                                                                                                                                              |


<br><br>

## 5. Dashboard

| No  | Kebutuhan               | Modul/Doctype       | Status                              |
|-----|--------------------------|---------------------|-------------------------------------|
| 1   | Dashboard Pemesanan      | Dashboard list      | Menampilkan data pemesanan perangkat yang sudah diproses dan yang menunggu persetujuan serta proses pesanan sudah di kembalikan atau belum |
| 2   | Dashboard Inventaris     | Dashboard list     | Menampilkan status ketersediaan dan kondisi perangkat, game, dan aksesori di inventaris |
| 3   | Dashboard Keuangan       | Dashboard list     | Menampilkan laporan pendapatan, transaksi penyewaan, dan denda keterlambatan |


<br><br>


## 6. Timeline

| Phase               | Deliverable                                    |
|---------------------|-----------------------------------------------|
| Analysis & Design   | Business Requirement Document (BRD)           |
| BRD Feedback        | Review BRD & Persetujuan                      |
| Development         | Modul Implementasi                            |
| UAT                 | User Acceptance Testing Document              |
| Training            | Panduan Pengguna                              |
| Data Migration      | Dokumen Checklist Migrasi Data                |
| Go Live             | Penyelesaian BAST (Berita Acara Serah Terima) |
