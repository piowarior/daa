# Sistem Pembayaran GameShare

# Latar Belakang

data Pembayaran adalah sistem yang dirancang untuk mengelola dan memproses transaksi keuangan antara pihak yang menerima layanan dan pihak yang melakukan pembayaran jadi lebih berfokus kek sistem pembayaran nya dari pada proses alur transaksi. **Tujuan utama dari sistem ini adalah untuk memastikan setiap transaksi tercatat dengan akurat, transparan, dan efisien**, serta memudahkan pengguna dalam menyelesaikan kewajiban finansial atas layanan yang diterima. Sistem ini juga memungkinkan berbagai metode pembayaran seperti tunai, transfer bank, atau e-wallet, sehingga proses pembayaran menjadi lebih cepat, akurat, dan bebas dari kesalahan.

GameShare berencana mengembangkan **sistem Pembayaran Penyewaan PlayStation** untuk mempermudah pengelolaan pembayaran atas layanan penyewaan perangkat PlayStation. Pengguna dapat memilih perangkat yang ingin disewa dan melakukan pembayaran di kantor GameShare, di mana admin akan **mencatat transaksi pembayaran**, termasuk jumlah yang dibayarkan, metode pembayaran yang digunakan, dan status pembayaran tersebut. Sistem ini dirancang untuk memastikan bahwa setiap transaksi pembayaran tercatat dengan akurat dan transparan.

GameShare ingin memastikan bahwa setiap transaksi pembayaran tercatat dengan akurat dan transparan, sehingga **membutuhkan data untuk mencatat informasi pembayaran** yang dilakukan oleh pelanggan, termasuk metode pembayaran dan statusnya. Selain itu, untuk mencatat tagihan pelanggan dengan jelas, **perlu data yang menyimpan rincian tagihan**, mencakup total tagihan, denda keterlambatan, dan status pembayaran tagihan tersebut. Untuk melacak hubungan antara pembayaran dan tagihan, serta mencatat setiap transaksi yang dilakukan, **dibutuhkan data yang menghubungkan tagihan dengan pembayaran yang telah dilakukan**. Dengan adanya data-data ini, GameShare dapat memastikan sistem pembayaran berjalan dengan efisien dan transparan.

Dalam sistem ini, hanya melibatkan dua pihak utama: **Peminjam sebagai pengguna** yang melakukan pembayaran atas layanan yang diterima, dan **Admin GameShare** yang mencatat dan memverifikasi setiap transaksi pembayaran. **Proses pembayaran dilakukan di kantor GameShare selama jam operasional**, yaitu pukul 08:00 - 15:00, Senin hingga Kamis. Admin bertanggung jawab mencatat dan mengelola status pembayaran setiap transaksi yang dilakukan oleh pengguna.

Sistem ini dibangun untuk memenuhi kebutuhan pengguna yang ingin **menyewa perangkat PlayStation tanpa harus membelinya**. Dengan sistem pembayaran yang efisien, GameShare dapat mempermudah transaksi, memastikan transparansi, dan memantau pembayaran secara akurat. Selain itu, sistem ini juga membantu GameShare **mengelola keuangan dengan lebih baik**, memberikan solusi yang lebih hemat bagi pengguna, dan menghasilkan pendapatan tambahan dari perangkat yang sudah dimiliki.

# Analisis Sistem Pembayaran Penyewaan PlayStation di GameShare

## 1. Tujuan Pengembangan Sistem
GameShare bertujuan untuk menyediakan layanan penyewaan PlayStation bagi para pengguna yang ingin menikmati perangkat game tanpa membeli secara permanen. Tujuan utama dari sistem ini adalah untuk:

- Mempermudah proses transaksi pembayaran antara pengguna dan GameShare.
- Menyediakan berbagai metode pembayaran seperti tunai, transfer bank, atau e-wallet untuk kemudahan pengguna.
- Mencatat setiap transaksi pembayaran dengan akurat dan transparan.
- Mengelola pembayaran dan tagihan dengan efisien agar tidak terjadi kesalahan dalam pencatatan keuangan.

## 2. Ruang Lingkup Sistem
Sistem Pembayaran yang dirancang untuk GameShare akan mencakup beberapa modul utama:

- **Modul Pembayaran**: Mengelola transaksi pembayaran yang dilakukan oleh pengguna, termasuk metode pembayaran dan status transaksi.
- **Modul Pencatatan Tagihan**: Menyimpan rincian tagihan, termasuk biaya sewa, denda keterlambatan, dan status pembayaran.
- **Modul Manajemen Keuangan**: Memungkinkan admin untuk melacak dan mengelola data transaksi secara transparan dan efisien.

## 3. Pihak yang Terlibat
Sistem ini melibatkan dua pihak utama:

- **Peminjam**: Pengguna yang melakukan pembayaran atas layanan yang diterima, baik melalui tunai, transfer bank, atau e-wallet, dan menerima perangkat yang disewa setelah pembayaran tercatat.
- **Admin GameShare**: Pihak yang bertanggung jawab untuk mencatat dan memverifikasi setiap transaksi pembayaran serta mengelola status pembayaran dan tagihan.

## 4. Kebutuhan Sistem
- **Transparansi Transaksi**: Sistem harus mencatat dengan akurat setiap transaksi pembayaran dan rincian tagihan untuk menghindari kesalahan atau kecurangan.
- **Pengelolaan Pembayaran**: Sistem harus memungkinkan pembayaran dengan berbagai metode dan mencatatnya dalam database secara real-time.
- **Pelacakan Status Pembayaran dan Tagihan**: Setiap pembayaran dan tagihan harus tercatat dengan jelas agar admin dapat memantau status pembayaran dan memverifikasi setiap transaksi.

**Catatan**: Analisis ini disusun berdasarkan tujuan dan latar belakang sistem pembayaran yang ingin dikembangkan oleh GameShare untuk mempermudah pengelolaan transaksi dan tagihan dalam layanan penyewaan perangkat PlayStation.
