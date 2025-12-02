# Remote Feed Posts

Plugin ini memungkinkan Anda untuk menampilkan postingan dari feed RSS eksternal di situs WordPress Anda menggunakan shortcode. Fitur utamanya meliputi tampilan judul, thumbnail, tanggal, dan kutipan singkat dari setiap postingan feed.

## Persyaratan Sistem

Plugin ini membutuhkan plugin tambahan agar fitur gambar unggulan (thumbnail) dari feed RSS dapat berfungsi dengan baik:

*   **Featured Images for RSS Feeds** - Anda harus menginstal dan mengaktifkan plugin ini terlebih dahulu.

## Instalasi

### Langkah 1: Instal Plugin Pendukung
1.  Masuk ke dasbor admin WordPress Anda.
2.  Pergi ke `Plugins > Tambah Baru`.
3.  Cari "Featured Images for RSS Feeds".
4.  Instal dan Aktifkan plugin tersebut.

### Langkah 2: Instal Remote Feed Posts
1.  Unduh file .zip plugin `remote-feed-posts`.
2.  Di dasbor admin, pergi ke `Plugins > Tambah Baru`.
3.  Klik tombol `Unggah Plugin` di bagian atas.
4.  Pilih file .zip yang telah Anda unduh, lalu klik `Instal Sekarang`.
5.  Setelah instalasi selesai, klik `Aktifkan Plugin`.

## Cara Menggunakan

Setelah kedua plugin terinstal dan aktif, Anda dapat menggunakan shortcode berikut di halaman atau postingan mana pun untuk menampilkan feed:

```php
[remote_feed url="https://alamat-website.com/feed/" limit="5"]
```

### Parameter Shortcode
- `url`: URL feed RSS yang ingin Anda tampilkan (wajib).
- `limit`: Jumlah postingan yang ingin Anda tampilkan (opsional, default: 5).
