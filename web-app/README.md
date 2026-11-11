# Mini Project Laravel – Daftar Mahasiswa dan Kalkulator Luas Segitiga

## 👤 Identitas Mahasiswa

| Informasi | Keterangan |
|---|---|
| Nama | Anggi Mahardika Dwi Utami |
| NPM | 2513020070 |
| Kelas | 2-A Sistem Informasi |
| Mata Kuliah | Pemograman Web |
| GitHub | [anggimahardika155-cell/belajar-laravel-2a](https://github.com/anggimahardika155-cell/belajar-laravel-2a) |

## 📖 Deskripsi Project

Project ini adalah aplikasi web sederhana yang dibuat menggunakan Laravel. Aplikasi memiliki dua halaman utama:

1. **Daftar Mahasiswa** menampilkan beberapa data mahasiswa berupa nama, alamat/kota, dan jenis kelamin.
2. **Kalkulator Luas Segitiga** menyediakan formulir untuk memasukkan alas dan tinggi, lalu menampilkan luas segitiga.

Project ini merupakan latihan praktikum. Data mahasiswa masih disimpan langsung di controller, bukan di database.

## 🎯 Tujuan Project

Project ini dibuat untuk mempelajari dasar-dasar pengembangan aplikasi web dengan Laravel, khususnya:

- Membuat routing untuk menghubungkan URL dengan halaman.
- Menggunakan controller untuk menyiapkan dan mengolah data.
- Menampilkan data menggunakan view Blade.
- Menerima input dari form.
- Melakukan perhitungan sederhana berdasarkan input pengguna.

## 🛠️ Teknologi yang Digunakan

| Teknologi | Versi/Detail | Penggunaan |
|---|---|---|
| Laravel Framework | 13.40.0 (versi terpasang di project) | Framework aplikasi web dan routing. |
| PHP | 8.5.12 pada lingkungan CLI yang diperiksa; `composer.json` mensyaratkan `^8.3` | Bahasa pemrograman yang menjalankan aplikasi Laravel. |
| Blade | Template engine bawaan Laravel; versi tidak dicantumkan terpisah | Menampilkan data dan halaman aplikasi. |
| CSS | Versi tidak ditentukan | Aturan tampilan pada `public/css/style.css`. |
| Google Fonts | Montserrat dan Poppins; versi tidak dicantumkan | Font yang dimuat oleh kedua halaman. |

## ✨ Fitur Project

| Fitur | Penjelasan |
|---|---|
| Daftar mahasiswa | Menampilkan nama, alamat/kota, dan jenis kelamin mahasiswa dalam tabel. Data disiapkan langsung di `MahasiswaController`; data contoh yang tersedia adalah Anton, Budi, Ani, dan Sinta. |
| Input kalkulator | Form menyediakan kolom untuk memasukkan alas dan tinggi segitiga. |
| Perhitungan luas | Setelah form dikirim, aplikasi menghitung luas menggunakan rumus `1/2 × alas × tinggi`. |
| Hasil perhitungan | Luas segitiga ditampilkan kembali pada halaman kalkulator. |
| Validasi input | Validasi input Laravel belum diterapkan. Nilai yang dikirim saat ini langsung digunakan dalam perhitungan. |

## 📌 Contoh Hasil Aplikasi

### Daftar Mahasiswa

Halaman daftar mahasiswa menampilkan data contoh berikut:

| Nama | Alamat | Jenis Kelamin |
|---|---|---|
| Anton | Surabaya | Laki-laki |
| Budi | Kediri | Laki-laki |
| Ani | Malang | Perempuan |
| Sinta | Surabaya | Perempuan |

### Kalkulator Luas Segitiga

Jika pengguna mengisi alas `10` dan tinggi `8`, halaman kalkulator menampilkan hasil:

```text
Alas: 10
Tinggi: 8
Luas Segitiga: 40
```

Nilai tersebut dihitung menggunakan rumus `1/2 × 10 × 8 = 40`.

## 🧮 Rumus Perhitungan

Rumus yang digunakan:

**Luas segitiga = 1/2 × alas × tinggi**

Contoh: jika alas `10` dan tinggi `8`, maka luasnya adalah `1/2 × 10 × 8 = 40`.

## 📁 Struktur Folder Project

Berikut struktur folder dan file yang terkait dengan dua halaman tugas serta screenshot-nya:

```text
app/
└── Http/
    └── Controllers/
        ├── KalkulatorSegitigaController.php
        └── MahasiswaController.php
resources/
└── views/
    ├── kalkulator_segitiga.blade.php
    └── mahasiswa.blade.php
routes/
└── web.php
public/
└── css/
    └── style.css
docs/
└── screenshots/
    ├── mahasiswa.png
    └── kalkulator.png
```

## 🔗 Penjelasan Routing dan Alur Halaman

### 📋 Daftar Mahasiswa

`GET /daftar/mahasiswa` membuka halaman daftar mahasiswa. Route di `routes/web.php` memanggil method `index` pada `MahasiswaController`. Controller menyiapkan data mahasiswa dan mengirimkannya ke view `mahasiswa.blade.php` untuk ditampilkan.

### 📐 Kalkulator Luas Segitiga

- `GET /kalkulator/segitiga` membuka formulir kalkulator melalui `KalkulatorSegitigaController`.
- Form mengirim nilai alas dan tinggi ke `POST /kalkulator/segitiga/proses`.
- Controller membaca kedua nilai, menghitung luas dengan rumus di atas, lalu mengirim nilai input dan hasilnya ke view `kalkulator_segitiga.blade.php`.

## 🚀 Cara Masuk dan Mengakses Aplikasi

Ikuti langkah-langkah berikut untuk menjalankan server dan membuka halaman tugas:

1. **Buka Git Bash.** Buka terminal pada folder kerja project. Jika terminal belum berada di folder Laravel, masuk ke folder project:

   ```bash
   cd web-app
   ```

   Lewati perintah tersebut jika terminal sudah berada di folder `web-app` yang berisi file `artisan`.

2. **Jalankan server development Laravel:**

   ```bash
   php artisan serve
   ```

   Server biasanya tersedia di `http://127.0.0.1:8000`. Biarkan terminal tetap terbuka selama aplikasi digunakan.

3. **Buka aplikasi di browser.** Gunakan alamat dasar `http://localhost:8000` atau `http://127.0.0.1:8000`, lalu buka halaman tugas:
   - Daftar Mahasiswa: <http://localhost:8000/daftar/mahasiswa>
   - Kalkulator Segitiga: <http://localhost:8000/kalkulator/segitiga>

4. **Hentikan server** setelah selesai dengan kembali ke Git Bash dan menekan **Ctrl + C**.

## 🖼️ Dokumentasi Tampilan

Screenshot halaman yang tersedia di project:

| Halaman | Screenshot |
|---|---|
| Daftar Mahasiswa | ![Tampilan halaman Daftar Mahasiswa](docs/screenshots/mahasiswa.png) |
| Kalkulator Luas Segitiga | ![Tampilan halaman Kalkulator Luas Segitiga](docs/screenshots/kalkulator.png) |

## ✅ Kesimpulan

Melalui project ini, konsep dasar Laravel dipraktikkan dengan menghubungkan route, controller, dan view Blade. Halaman daftar mahasiswa menunjukkan cara menyiapkan serta menampilkan data, sedangkan kalkulator menunjukkan cara menerima input form dan mengolahnya menggunakan rumus sederhana.
