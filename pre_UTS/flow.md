flowchart TD
    A(start) --> B[/Pengguna Membuka Aplikasi GameShare/]
    B --> C{Sudah Terdaftar?}
    C -->|Yes| D[/Pengguna Login/]
    C -->|No| E[/Pengguna Registrasi Isi Data dan Verifikasi/]
    E --> F[/Pengguna Login/]
    D --> G{Login Berhasil?}
    G -->|Yes| H[/Pengguna Memilih Perangkat untuk Disewa/]
    G -->|No| I[/Tampilkan Pesan Error/]
    H --> J[/Pengguna Melakukan Pemesanan/]
    J --> K[/Pembayaran Sewa/]
    K --> L[/Admin Menerima dan Memeriksa Pesanan/]
    L --> M{Perangkat Tersedia?}
    M -->|Yes| N[/Admin Mengonfirmasi Pesanan/]
    M -->|No| O[/Pesanan Dibatalkan dan Notifikasi ke Peminjam/]
    N --> P[/Notifikasi ke Peminjam untuk Pengambilan/]
    P --> Q[/Peminjam Datang ke Kantor GameShare/]
    Q --> R[/Verifikasi Identitas dan Pengambilan Perangkat/]
    R --> S[/Peminjam Menggunakan Perangkat/]
    S --> T[/Peminjam Mengembalikan Perangkat ke Kantor GameShare/]
    T --> U[/Admin Menerima dan Memeriksa Kondisi Perangkat/]
    U --> V{Perangkat Dalam Kondisi Baik?}
    V -->|Yes| W{Pengembalian Tepat Waktu?}
    V -->|No| X[/Admin Menemukan Kerusakan/]
    W -->|Yes| Y[/Transaksi Selesai/]
    W -->|No| Z[/Admin Menghitung Denda Keterlambatan/]
    X --> AA[/Admin Menghitung Denda Kerusakan/]
    Z --> AB[/Tagihan Denda ke Peminjam/]
    AA --> AC[/Tagihan Denda ke Peminjam/]
    AB --> AD[/Peminjam Membayar Denda/]
    AC --> AD
    AD --> Y
    O --> AE[/Pengguna Membuka Aplikasi GameShare/]
    I --> AE
