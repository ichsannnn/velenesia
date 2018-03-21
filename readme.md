# Velenesia

[![Version](https://img.shields.io/packagist/v/skadevz/velenesia.svg)](https://packagist.org/packages/skadevz/velenesia)
[![License](https://poser.pugx.org/zizaco/entrust/license.svg)](https://packagist.org/packages/skadevz/velenesia)



**Velenesia** adalah plugin yang berfungsi untuk menerjemahkan kata atau kalimat dalam bahasa Inggris, ke dalam bahasa Indonesia.

## Instalasi
Install plugin menggunakan Composer
```bash
composer require skadevz/velenesia
```

Buka file ```config/app.php``` dan ubah bagian ```locale``` menjadi ```id```
```bash
'locale' => 'id',
```

Pada file yang sama, tambahkan baris berikut pada bagian ```providers```
```bash
Skadevz\Velenesia\BahasaServiceProvider::class,
```

Jalankan perintah berikut untuk mempublikasi file berisi bahasa untuk validasi
```bash
php artisan vendor:publish --provider="Skadevz\Velenesia\BahasaServiceProvider"
```

## Penggunaan
Untuk penggunaan bahasa saat validasi, akan otomatis berubah jika ```locale``` menggunakan ```id```.
Untuk helper, berikut cara penggunaanya.

### Terjemahan Nama Hari
```bash
// Nama Panjang
terjemahan_hari("Sunday", "Panjang")      // Minggu
terjemahan_hari("Sunday", "Pendek")       // Min

// Nama Pendek
terjemahan_hari("Sun", "Panjang")         // Minggu
terjemahan_hari("Sun", "Pendek")          // Min
```

### Terjemahan Nama Bulan
```bash
// Angka
terjemahan_bulan("08", 'Angka')           // 08
terjemahan_bulan("08", 'Panjang')         // Agustus
terjemahan_bulan("08", 'Pendek')          // Agu

// Nama Panjang
terjemahan_bulan("August", 'Angka')       // 08
terjemahan_bulan("August", 'Panjang')     // Agustus
terjemahan_bulan("August", 'Pendek')      // Agu

// Nama Pendek
terjemahan_bulan("Aug", 'Angka')          // 08
terjemahan_bulan("Aug", 'Panjang')        // Agustus
terjemahan_bulan("Aug", 'Pendek')         // Agu
```