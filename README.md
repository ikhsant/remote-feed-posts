# README

## Instalasi Plugin Featured Images for RSS Feeds

Untuk menginstal plugin "Featured Images for RSS Feeds" di WordPress Anda, ikuti langkah-langkah berikut:

1.  **Unduh Plugin:**
    *   Cari "Featured Images for RSS Feeds" di direktori plugin WordPress atau kunjungi halaman pluginnya.
    *   Unduh file .zip plugin tersebut.

2.  **Unggah dan Instal:**
    *   Masuk ke dasbor admin WordPress Anda.
    *   Pergi ke `Plugins > Tambah Baru`.
    *   Klik tombol `Unggah Plugin` di bagian atas.
    *   Pilih file .zip yang telah Anda unduh, lalu klik `Instal Sekarang`.

3.  **Aktifkan Plugin:**
    *   Setelah instalasi selesai, klik `Aktifkan Plugin`.

Plugin sekarang sudah terinstal dan aktif di situs WordPress Anda.

## Cara Menggunakan Plugin

Setelah plugin terinstal dan aktif, Anda dapat menggunakan shortcode berikut untuk menampilkan feed:

```php
[remote_feed url="https://alamat/feed/" limit="5"]
```

Parameter:
- `url`: URL feed yang ingin Anda tampilkan.
- `limit`: Jumlah postingan yang ingin Anda tampilkan (default: 5).

