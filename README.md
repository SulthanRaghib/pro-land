# 🏗️ PRO-LAND – Website Company Profile PT. JAS PRO LAND & Development

<img alt="overview" width="100%" src="/public/assets/img/jas_pro_land/demo.png" />

Website company profile berbasis Laravel untuk PT. JAS PRO LAND, menampilkan informasi layanan konstruksi dan development.  
Dirancang dengan UI modern dan responsif, serta dilengkapi fitur SEO dan pengiriman email berbasis SMTP.

---

## ✨ Fitur Utama

-   ✅ Desain modern dan mobile-friendly menggunakan Bootstrap 5
-   ✅ Halaman informasi layanan, proyek, galeri, dan kontak
-   ✅ Pengiriman email menggunakan SMTP (Mailtrap / Gmail / lainnya)
-   ✅ Optimasi SEO menggunakan `spatie/laravel-sitemap`
-   ✅ Struktur Laravel yang bersih dan mudah dikembangkan

---

## 🌐 Demo Website

Website ini telah dihosting dan dapat diakses di:

👉 [https://jasproland.com/](https://jasproland.com/)

---

## 🛠️ Teknologi yang Digunakan

-   [Laravel 12.0](https://laravel.com/)
-   [PHP 8.2](https://www.php.net/)
-   [Bootstrap 5](https://getbootstrap.com/)
-   [Spatie Laravel Sitemap](https://github.com/spatie/laravel-sitemap)
-   [MySQL / MariaDB](https://mariadb.org/)

---

## 🚀 Instalasi & Menjalankan Lokal

Langkah-langkah menjalankan proyek ini di mesin lokal:

### 1. Clone Repositori

```bash
git clone https://github.com/SulthanRaghib/pro-land.git
cd pro-land
```

### 2. Install Dependency

```bash
composer install
npm install && npm run dev
```

### 3. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit file `.env` dan sesuaikan dengan konfigurasi database dan SMTP.

### 4. Jalankan Migration

```bash
php artisan migrate
```

### 5. Jalankan Server

```bash
php artisan serve
```

---

## ✉️ Konfigurasi SMTP (Email)

Untuk mengaktifkan fitur pengiriman email (misalnya pada form kontak), isi konfigurasi SMTP di file `.env`:

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME="EMAIL ANDA"
MAIL_PASSWORD="PASSWORD APP EMAIL ANDA"
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="EMAIL ANDA"
MAIL_FROM_NAME="NAMA PERUSAHAAN"
```

Kamu bisa menggunakan layanan seperti [Mailtrap](https://mailtrap.io) atau SMTP Gmail.

---

## 🔍 Konfigurasi SEO (Sitemap)

Proyek ini menggunakan package `spatie/laravel-sitemap` untuk mengelola sitemap otomatis.

### Untuk generate sitemap:

```bash
php artisan sitemap:generate
```

### Sitemap akan tersedia di:

```
/sitemap.xml
```

---

## 📁 Struktur Folder Penting

-   `resources/views/` → Template HTML dan Blade Laravel
-   `public/` → Aset publik seperti gambar dan CSS
-   `routes/web.php` → Routing utama website
-   `app/Console/Commands/` → Custom command untuk sitemap
-   `.env.example` → Contoh konfigurasi environment

---

## 🙌 Kontribusi

Pull request dan issue sangat diterima.  
Silakan fork dan ajukan PR untuk perbaikan atau fitur tambahan.

---

## 📄 Lisensi

Proyek ini dikembangkan sebagai bagian dari portofolio profesional untuk PT. JAS PRO LAND.

© 2025 Sulthan Raghib – All Rights Reserved  
Untuk kerja sama atau pertanyaan: **sulthan.raghib09@gmail.com**

---

Tes CI/CD
