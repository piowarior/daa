
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

### Keterangan

1. **Peminjam menentukan perangkat yang akan disewa melalui aplikasi GameShare.**
   - Peminjam memilih PlayStation yang ingin disewa melalui aplikasi GameShare.

2. **Peminjam mengisi data diri dan melakukan verifikasi.**
   - Setelah memilih perangkat, peminjam datang ke kantor GameShare untuk mengisi data diri dan melakukan verifikasi, termasuk informasi kontak dan identitas.

3. **Pembayaran sewa dilakukan oleh peminjam.**
   - Pembayaran untuk perangkat yang dipilih dilakukan di kantor GameShare, dan proses transaksi dicatat.

4. **Admin menerima dan memeriksa pesanan yang masuk.**
   - Admin menerima pesanan, memeriksa ketersediaan perangkat, dan melakukan validasi data peminjam.

5. **Perangkat tersedia?**
   - **Jika ya**, pesanan diproses lebih lanjut untuk pengambilan perangkat.
   - **Jika tidak**, pesanan dibatalkan, dan notifikasi dikirimkan kepada peminjam.

6. **Admin mengonfirmasi pesanan.**
   - Admin mengonfirmasi pesanan dan memberikan instruksi kepada peminjam untuk mengambil perangkat.

7. **Peminjam datang ke kantor GameShare dan mengambil perangkat.**
   - Peminjam harus datang ke kantor GameShare untuk mengambil perangkat setelah verifikasi identitas.

8. **Peminjam menggunakan perangkat selama masa sewa.**
   - Selama periode sewa, peminjam dapat menggunakan perangkat sesuai kebutuhan.

9. **Peminjam mengembalikan perangkat ke kantor GameShare.**
   - Setelah masa sewa selesai, peminjam wajib mengembalikan perangkat ke kantor GameShare.

10. **Admin memeriksa kondisi perangkat yang dikembalikan.**
    - Admin melakukan pengecekan apakah perangkat dalam kondisi baik atau ada kerusakan.

11. **Perangkat dalam kondisi baik?**
    - **Jika ya** dan pengembalian tepat waktu, transaksi dianggap selesai tanpa masalah.
    - **Jika tidak**, admin akan mengevaluasi kerusakan dan menghitung denda.

12. **Pengembalian tepat waktu?**
    - **Jika ya**, transaksi selesai tanpa denda.
    - **Jika tidak**, admin menghitung denda keterlambatan dan memberi tagihan denda kepada peminjam.

13. **Admin menemukan kerusakan pada perangkat.**
    - Jika perangkat mengalami kerusakan, admin menghitung biaya perbaikan dan mengirimkan tagihan kepada peminjam.

14. **Peminjam membayar denda jika ada.**
    - Jika terdapat denda, peminjam harus melakukan pembayaran sesuai dengan tagihan yang diberikan oleh admin.

15. **Transaksi selesai.**
    - Setelah semua pembayaran selesai, transaksi dianggap lengkap dan perangkat siap untuk disewakan kembali kepada peminjam lain.



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
---

##### 3.1.3 Modul Pelacakan Keuangan

| No  | Kebutuhan                                    | Modul/Doctype       | Status             |
|-----|----------------------------------------------|----------------------|--------------------|
| 1   | Pengelolaan transaksi keuangan               | Pelacakan Keuangan  | Modul/Doctype Baru |
|     | a. Insert: Mencatat biaya sewa dan denda     |                      |                    |
|     | b. View: Melihat laporan pendapatan          |                      |                    |
|     | c. Update: Menyesuaikan tarif sewa/denda     |                      |                    |
|     | d. Delete: Menghapus transaksi yang salah    |                      |                    |

---

<br><br>

## 4. Approval

| No  | Modul/Doctype          | Tingkat Approval | Fungsi                                                                                                                                                       |
|-----|-------------------------|------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1   | Pemesanan               | admin Input       | Pengguna memilih perangkat, mengisi data diri, dan mengirim pesanan untuk diproses.                                                                          |
|     |                         | Approval 1       | Admin menyetujui atau menolak pesanan; jika ditolak, pengguna dapat memperbaiki data atau pesanan.                                                           |
|     |                         |                  |                                                                                                                                                              |
| 2   | Manajemen Inventaris    | Admin Input       | Admin memasukkan perangkat baru ke inventaris, dengan opsi edit sebelum di-approval.                                                                         |
|     |                         |                  |                                                                                                                                                              |
| 3   | Pelacakan Keuangan      | Admin Input       | Admin mencatat transaksi penyewaan, denda, dan pengembalian dengan opsi edit sebelum di-approval.                                                            |



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
