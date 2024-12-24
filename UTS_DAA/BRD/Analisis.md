# Latar Belakang

__Sistem Simpan Pinjam__ adalah suatu sistem yang melibatkan __peminjaman__ dan __pengembalian__ barang atau uang antara dua pihak: __Peminjam__ yang meminjam dan __Penyedia atau Admin__ yang menyediakan barang atau uang untuk dipinjamkan. Tujuannya adalah memberi kemudahan bagi peminjam untuk memperoleh barang atau uang tanpa harus membelinya secara permanen, sementara penyedia mendapatkan manfaat dari barang yang dipinjamkan. Sistem ini umumnya mencakup kesepakatan mengenai durasi, biaya, dan ketentuan pengembalian, serta diterapkan di berbagai sektor seperti perbankan dan penyewaan barang.

Dalam konteks ini __GameShare__ berencana mengembangkan sistem __Simpan Pinjam PlayStation__ untuk menyediakan solusi bagi para penggemar game yang ingin menikmati perangkat PlayStation tanpa harus membeli secara permanen. Sistem ini dirancang untuk memungkinkan pengguna meminjam konsol PlayStation. Dengan sistem ini, GameShare berharap dapat memberikan fleksibilitas kepada pengguna yang ingin menikmati game dalam jangka waktu tertentu tanpa perlu membeli perangkat.

GameShare ingin proses peminjaman berjalan cepat dan praktis, karenanya memutuskan untuk menyederhanakan alur pemesanan tanpa perlu proses login atau registrasi; pengguna cukup memilih perangkat yang ingin disewa, mengisi data diri, dan __pesanan akan di catat oleh admin__ serta mendata status pemesanan terkait barangnya apakah sudah di kembalikan atau belum. Untuk __memastikan ketersediaan perangkat__ yang optimal, GameShare menginginkan perlu adanya __sistem manajemen yang terstruktur__, sehingga setiap perangkat , dan aksesori dapat dilacak kondisinya secara akurat. Di sisi lain, agar transaksi berjalan transparan, __setiap biaya sewa dan denda dicatat dengan rapi__.

GameShare meminta Dalam Rancangan sistem ini, hanya melibatkan dua pihak utama: __Peminjam__ sebagai pengguna yang melihat barang apasaja dan yang ingin menyewa perangkat,dan pihak __Admin GameShare__ adalah yang bertanggung jawab atas pengelolaan serta kepemilikan perangkat. Untuk pemesanan, pengguna harus mengunjungi di __kantor GameShare__ dan pengembalian perangkat dilakukan langsung di __kantor GameShare__. Layanan ini tersedia selama __hari kerja dengan jam operasional 08:00 - 15:00, senin - kamis__, dengan memungkinkan Peminjam untuk melihat barang secara __online__, tetapi hanya dapat mendaftar, membayar dan mengambil barang di __kantor GameShare__ agar sang adminlah yang mencatat pesanan dan mendatanya.

__Sistem ini dibangun__ karena adanya kebutuhan bagi para gamer yang ingin merasakan pengalaman bermain tanpa komitmen membeli perangkat mahal. Melalui layanan ini, GameShare dapat memanfaatkan perangkat yang sudah dimiliki untuk menghasilkan pendapatan tambahan, sekaligus memberikan solusi yang lebih hemat bagi pengguna.

<br><br>
> **Catatan:** *Kalimat yang di-bold merupakan alasan mengapa struktur BRD dan analisis ini seperti ini.*

<br><br>

# Analisis Sistem

## 1. Tujuan Pengembangan Sistem

GameShare bertujuan untuk menyediakan layanan peminjaman PlayStation agar para penggemar game dapat menikmati perangkat tersebut tanpa harus melakukan pembelian secara permanen. Tujuan utama dari pengembangan sistem ini adalah untuk:
- Memberikan fleksibilitas bagi pengguna untuk menyewa perangkat PlayStation dalam jangka waktu tertentu.
- Menyederhanakan proses peminjaman dengan alur yang cepat dan praktis tanpa perlu registrasi atau login.
- Mengelola inventaris perangkat secara optimal, termasuk status peminjaman dan kondisi perangkat.
- Mencatat setiap transaksi dan denda secara transparan untuk meningkatkan kepercayaan pengguna.

## 2. Ruang Lingkup Sistem

Sistem yang dirancang akan mencakup beberapa modul utama:
- **Modul Pemesanan**: Pengguna dapat melihat perangkat yang tersedia secara online dan memilih perangkat yang ingin disewa. Namun, proses pendaftaran, pembayaran, dan pengambilan perangkat hanya dapat dilakukan di kantor GameShare.
- **Modul Manajemen Inventaris**: Admin dapat melacak ketersediaan perangkat, termasuk status peminjaman, kondisi perangkat, dan jumlah perangkat yang tersedia untuk disewa.
- **Modul Pelacakan Keuangan**: Sistem mencatat biaya sewa dan denda keterlambatan pengembalian dengan rapi dan transparan, membantu admin dalam mengelola transaksi keuangan.

## 3. Pihak yang Terlibat

Sistem ini melibatkan dua pihak utama:
- **Peminjam**: Pengguna yang dapat melihat perangkat yang tersedia untuk disewa secara online dan melakukan pemesanan di kantor GameShare.
- **Admin GameShare**: Pihak yang memiliki perangkat dan bertanggung jawab atas pengelolaan perangkat, pencatatan pesanan, dan pencatatan status pengembalian perangkat.

## 4. Alur Kerja Sistem

1. **Peminjam Melihat Barang**: Pengguna melihat perangkat yang tersedia secara online melalui platform GameShare.
2. **Peminjaman di Kantor GameShare**: Pengguna yang ingin menyewa datang langsung ke kantor GameShare untuk mengisi data diri, melakukan pembayaran, dan mengambil perangkat.
3. **Pengembalian di Kantor GameShare**: Setelah masa peminjaman selesai, pengguna mengembalikan perangkat langsung ke kantor GameShare, di mana admin mencatat status pengembalian dan memverifikasi kondisi perangkat.
4. **Pencatatan Keuangan**: Setiap transaksi biaya sewa dan denda keterlambatan dicatat oleh admin untuk memudahkan pelacakan keuangan.

## 5. Kebutuhan Sistem

- **Ketersediaan Data Perangkat**: Sistem harus menyediakan data perangkat yang tersedia secara online sehingga pengguna dapat melihat perangkat apa yang dapat disewa.
- **Kecepatan dan Kemudahan Proses**: Pengguna harus dapat melihat perangkat tanpa perlu registrasi, dan proses peminjaman disederhanakan hanya dengan pengisian data diri di kantor.
- **Manajemen Ketersediaan dan Kondisi Perangkat**: Setiap perangkat yang disewa dan dikembalikan harus diperbarui status ketersediaannya oleh admin untuk menjaga akurasi inventaris.
- **Transparansi Keuangan**: Setiap transaksi dan denda keterlambatan harus dicatat secara jelas untuk memastikan keterbukaan informasi bagi GameShare dan peminjam.

## 6. Kendala dan Pertimbangan

- **Jam Operasional**: Layanan peminjaman dan pengembalian perangkat hanya tersedia di kantor GameShare pada hari kerja, Senin - Kamis dari pukul 08:00 - 15:00, sehingga pengguna harus datang pada waktu yang telah ditentukan.
- **Pembayaran di Kantor**: Pembayaran biaya sewa dilakukan di kantor untuk memastikan pencatatan langsung oleh admin, dan untuk keamanan data transaksi.
- **Ketersediaan Perangkat**: Sistem harus dapat memperbarui status ketersediaan perangkat secara real-time agar menghindari kesalahan informasi terkait perangkat yang dapat disewa.

## 7. Manfaat Bagi GameShare

Dengan sistem ini, GameShare dapat:
- Mengoptimalkan pemanfaatan perangkat yang dimiliki untuk memperoleh pendapatan tambahan.
- Menyediakan solusi hemat bagi pengguna yang ingin bermain tanpa perlu membeli perangkat mahal.
- Menjaga kualitas perangkat yang disewakan melalui pengelolaan inventaris yang efisien.

---

> **Catatan:** Analisis ini disusun berdasarkan latar belakang dan tujuan utama dari sistem peminjaman PlayStation yang ingin dikembangkan oleh GameShare.


