# Zetoro Janaloka Teknologi - Company Website

Landing page resmi dan profil perusahaan untuk **CV. Zetoro Janaloka Teknologi**, sebuah perusahaan penyedia solusi teknologi, multimedia, dan konsultasi bisnis yang berdiri sejak tahun 2021.

---

## 🚀 Fitur Utama
* **Landing Page Responsif**: Menggunakan Bootstrap 5 untuk kenyamanan akses via *mobile* maupun *desktop*.
* **Interactive UI**: Animasi saat digulir menggunakan AOS (*Animate On Scroll*) serta navigasi dinamis (*active state highlight*).
* **Manajemen Kontak terintegrasi**: Formulir kontak interaktif yang terhubung langsung ke database lokal dan opsi pengiriman via WhatsApp.
* **Slider Portofolio & Klien**: Menampilkan katalog mitra dan hasil kerja secara dinamis.
* **Peta Lokasi Terintegrasi**: Menggunakan Google Maps Embed untuk titik lokasi kantor di Maspion Square, Surabaya.

---

## 🛠️ Tech Stack & Dependensi

### Backend & Database
* **Framework**: Laravel 10 / 11
* **Database**: MySQL (Tabel `kontak` untuk menyimpan pesan masuk)

### Frontend
* **CSS Framework**: Bootstrap v5.3.2
* **Icons**: Font Awesome v6.5.0 & Bootstrap Icons v1.11.3
* **Animations**: AOS (Animate On Scroll) v2.3.1
* **Alerts**: SweetAlert2 (Untuk notifikasi sukses form kontak)

---

## 💻 Cara Install & Menjalankan Proyek Lokal

Pastikan kamu sudah memasang **PHP**, **Composer**, dan local server seperti **Laragon/XAMPP** di komputermu.

### 1. Clone Repository
```bash
git clone [https://github.com/syfrzkngl/Zetoro-Janaloka-Technology-individual.git]
cd Zetoro-Janaloka-Teknologi-individual
2. Install Dependencies via Composer
Bash
composer install
3. Setup Environment File (.env)
Salin file .env.example menjadi .env:

Bash
cp .env.example .env
Buka file .env, lalu sesuaikan konfigurasi database milikmu:

Plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_kamu
DB_USERNAME=root
DB_PASSWORD=
4. Generate Application Key
Bash
php artisan key:generate
5. Jalankan Migrasi Database
Buat database baru di MySQL dengan nama yang sesuai di .env, lalu jalankan migrasi untuk membuat tabel kontak:

Bash
php artisan migrate
6. Jalankan Server Lokal
Bash
php artisan serve
Buka http://127.0.0.1:8000 di browsermu untuk melihat hasilnya.

📂 Struktur Folder Utama (Frontend)
resources/views/beranda.blade.php - Halaman utama website.

public/css/beranda.css - Custom styling stylesheet.

public/img/ - Penyimpanan aset gambar (Logo, Foto Owner, Logo Klien, Portofolio).

📝 Lisensi
© 2025 Zetoro Janaloka. All rights reserved.
