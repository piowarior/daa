# Business Requirements Document (BRD) 
## CV. GameShare 
**Sistem Pembayaran Penyewaan PlayStation GameShare** 

**Tanggal Mulai Proyek**: 15 - 11 - 2024  
**Klien**: GameShare  
**Modul**: Pembayaran, Tagihan, Transaksi

**Disiapkan oleh**: Muhamad Rohisul Iman

---

## 1. Introduction

### 1.1 Purpose of Document
Dokumen ini merupakan Dokumen Kebutuhan Bisnis (BRD) untuk pengembangan sistem pembayaran penyewaan PlayStation di GameShare. Tujuan utama dari dokumen ini adalah untuk menjelaskan persyaratan bisnis, alur pembayaran, serta implementasi modul **Pembayaran**, **Tagihan**, dan **Transaksi** yang memungkinkan peminjam melakukan pembayaran untuk biaya penyewaan dan denda (jika ada), serta mengelola informasi terkait tagihan dan transaksi.

### 1.2 Project Scope
Modul yang akan dikembangkan meliputi:

- **Modul Pembayaran**  
  Menyediakan fungsionalitas untuk mencatat pembayaran yang dilakukan oleh pengguna, termasuk metode pembayaran, jumlah yang dibayarkan, dan status pembayaran.

- **Modul Tagihan**  
  Menyediakan fungsionalitas untuk mencatat tagihan yang dihasilkan dari peminjaman PlayStation, termasuk total tagihan, denda keterlambatan, dan status pembayaran.

- **Modul Transaksi**  
  Menghubungkan pembayaran dengan tagihan terkait, mencatat semua transaksi yang dilakukan oleh pengguna, termasuk pembayaran dan denda.

## 2. System Requirement

### 2.1 Business Flow Keuangan

Alur bisnis keuangan dalam sistem penyewaan GameShare mencakup seluruh transaksi yang berhubungan dengan pemesanan, pembayaran, dan pengembalian perangkat. Berikut adalah tahapan alur keuangan yang terjadi saat proses pembayaran penyewaan:

>#### **Gambar flowchart terdapat di file Flowchart**

### Keterangan

1. **Peminjam datang ke kantor GameShare untuk melakukan pembayaran.**
   - Peminjam mengunjungi kantor GameShare untuk menyelesaikan pembayaran penyewaan.

2. **Admin mencatat transaksi pembayaran.**
   - Setelah pembayaran dilakukan, admin mencatat transaksi pembayaran yang diterima.

3. **Admin memeriksa status pembayaran.**
   - Admin memeriksa apakah pembayaran yang dilakukan peminjam berhasil atau tidak.

4. **Pembayaran berhasil?**
   - **Jika ya**, pembayaran dianggap berhasil dan admin mengonfirmasi pembayaran.
   - **Jika tidak**, admin menolak pembayaran dan peminjam diminta untuk mengulang proses pembayaran.

5. **Admin mengonfirmasi pembayaran.**
   - Jika pembayaran sudah di lakukan/berhasil, admin mengonfirmasi pembayaran dan peminjam dapat mengambil perangkat.

6. **Peminjam mengambil perangkat.**
   - Peminjam membawa perangkat yang disewa setelah pembayaran dikonfirmasi.

7. **Admin mencatat transaksi dan pembayaran pada sistem.**
   - Admin memasukkan data pembayaran dan transaksi ke dalam sistem untuk pencatatan lebih lanjut.

8. **Pembayaran dicatat di tabel pembayaran.**
   - Semua informasi terkait pembayaran dimasukkan ke dalam tabel pembayaran untuk keperluan administrasi.

9. **Tagihan dicatat di tabel tagihan.**
   - Admin mencatat tagihan yang sesuai dengan transaksi yang telah dilakukan peminjam.

10. **Transaksi dicatat di tabel transaksi.**
    - Semua transaksi, termasuk pembayaran dan tagihan, dicatat dengan rinci di tabel transaksi untuk pelacakan lebih lanjut.

11. **Transaksi selesai.**
    - Setelah proses pembayaran dan pencatatan selesai, transaksi dianggap selesai dan perangkat siap digunakan.


## 3. Business Requirement

### 3.1 Fungsional Requirement

#### 3.1.1 Modul Pembayaran

| No  | Kebutuhan                        | Modul/Doctype       | Status           |
|-----|----------------------------------|---------------------|------------------|
| 1   | Pengguna melakukan pembayaran    | Pembayaran          | Modul/Doctype Baru |
|     | a. Insert: Mencatat pembayaran yang dilakukan pengguna |                     |                    |
|     | b. View: Melihat status pembayaran dan rincian transaksi |                     |                    |
|     | c. Update: Memperbarui status pembayaran |                     |                    |
|     | d. Delete: Menghapus pembayaran yang gagal |                     |                    |
|     | e. Approval: Admin memeriksa dan menyetujui pembayaran jika pembayaran sudah di lakukan |                     |                    |

#### 3.1.2 Modul Tagihan

| No  | Kebutuhan                        | Modul/Doctype       | Status           |
|-----|----------------------------------|---------------------|------------------|
| 1   | Pengelolaan tagihan              | Tagihan             | Modul/Doctype Baru |
|     | a. Insert: Mencatat tagihan yang dihasilkan dari peminjaman |                     |                    |
|     | b. View: Melihat rincian tagihan dan denda |                     |                    |
|     | c. Update: Memperbarui status tagihan |                     |                    |
|     | d. Delete: Menghapus tagihan yang tidak valid |                     |                    |

#### 3.1.3 Modul Transaksi

| No  | Kebutuhan                        | Modul/Doctype       | Status           |
|-----|----------------------------------|---------------------|------------------|
| 1   | Pengelolaan transaksi            | Transaksi           | Modul/Doctype Baru |
|     | a. Insert: Mencatat transaksi pembayaran |                     |                    |
|     | b. View: Melihat status dan rincian transaksi |                     |                    |
|     | c. Update: Menyesuaikan transaksi jika ada perubahan |                     |                    |
|     | d. Delete: Menghapus transaksi yang tidak valid |                     |                    |

---

### 4. Approval

| No  | Modul/Doctype    | Tingkat Approval  | Fungsi                                                                                   |
|-----|------------------|-------------------|------------------------------------------------------------------------------------------|
| 1   | Pembayaran       | Admin Input       | Pengguna melakukan pembayaran, admin memverifikasi dan menyetujui pembayaran.             |
|     |                  | Approval 1        | Admin memverifikasi pembayaran yang dilakukan pengguna dan menyetujui pembayaran tersebut.|
| 2   | Tagihan          | Admin Input       | Admin mencatat dan memverifikasi tagihan yang dihasilkan dari peminjaman.                |
| 3   | Transaksi        | Admin Input       | Admin mencatat dan memverifikasi transaksi yang melibatkan pembayaran atau denda.        |


## 5. Dashboard

| No  | Kebutuhan                | Modul/Doctype       | Status                                                                 |
|-----|---------------------------|---------------------|------------------------------------------------------------------------|
| 1   | Dashboard Pembayaran      | Dashboard list      | Menampilkan data pembayaran yang telah diproses, termasuk status pembayaran, metode pembayaran, dan referensi transaksi |
| 2   | Dashboard Tagihan         | Dashboard list      | Menampilkan status tagihan, termasuk jumlah total tagihan, denda, dan status pembayaran |
| 3   | Dashboard Transaksi       | Dashboard list      | Menampilkan laporan transaksi, termasuk transaksi yang berhasil atau gagal serta jumlah yang dibayarkan |

<br><br>

## 6. Timeline

| Phase               | Deliverable                                         |
|---------------------|----------------------------------------------------|
| Analysis & Design   | Business Requirement Document (BRD)                |
| BRD Feedback        | Review BRD & Persetujuan                           |
| Development         | Modul Implementasi (Pembayaran, Tagihan, Transaksi) |
| UAT                 | User Acceptance Testing Document                   |
| Training            | Panduan Pengguna                                   |
| Data Migration      | Dokumen Checklist Migrasi Data                     |
| Go Live             | Penyelesaian BAST (Berita Acara Serah Terima)      |
