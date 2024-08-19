# Sistem Gudang

Sistem Gudang adalah aplikasi berbasis web yang dirancang untuk mengelola dan mengontrol stok barang di sebuah gudang. Aplikasi ini dirancang dengan menggunakan Laravel untuk backend dan Docker untuk manajemen dan deployment kontainer.

## Daftar Isi

- [Sistem Gudang](#sistem-gudang)
  - [Daftar Isi](#daftar-isi)
  - [Persyaratan Sistem](#persyaratan-sistem)
  - [Instalasi](#instalasi)
    - [Backend](#backend)
    - [Frontend](#frontend)
  - [Penggunaan](#penggunaan)
  - [Daftar Username-Password](#daftar-username-password)
  - [Framework](#framework)
    - [Backend (Laravel)](#backend-laravel)
    - [Frontend (Angular)](#frontend-angular)
  - [Author](#author)

## Persyaratan Sistem

- PHP 7.0 - 8.0.
- MySQL atau database relasional lainnya (XAMPP/LAMPP).
- Web server (contoh: Apache).
- Browser web modern (Chrome/Firefox).
- Composer
- NodeJS versi  >= 16
- Angular CLI versi >= 16

## Instalasi

Membuka terminal lalu
Clone repositori ini ke dalam direktori komputer anda

### Backend
- `cd backend`
- `composer install atau composer update` 
- `cp .env.example .env`
- `php artisan key:generate`
- silahkan membuat database dengan contoh
  <img src="./doc/create_db.png">
- `php artisan migrate --seed`
- `php artisan serve`

### Frontend
- buka dengan beda terminal (cmd/powershell)
- `cd frontend`
- `npm install -g @angular/cli`
- setelah install angular cli coba cek dengan
  `ng version`
- `npm install`
- `ng serve --open`

## Penggunaan

1. Akses aplikasi melalui browser dengan [http://localhost:4200](http://localhost:4200)
2. Login menggunakan akun admin atau pihak yang menyetujui.
3. Gunakan menu untuk melakukan pemesanan, persetujuan, dan melihat laporan.

## Daftar Username-Password

| Email             | Password    | Role      |
| ----------------- | ----------- | --------- |
| admin@gmail.com   | password    | Admin     |
| leader@gmail.com  | password    | Leader    |
| spv@gmail.com     | password    | SPV       |
| dhead@gmail.com   | password    | Dept Head |

## Framework

Aplikasi ini menggunakan kombinasi Laravel sebagai backend dan Angular sebagai frontend untuk memastikan kehandalan, keamanan, dan antarmuka pengguna yang responsif.

### Backend (Laravel)
- Framework: Laravel
- Versi Laravel: 8.0
- Dokumentasi Laravel: https://laravel.com/docs/8.x
### Frontend (Angular)
- Framework: Angular
- Versi Angular: 16
- Dokumentasi Angular: https://angular.io/docs

pastikan sudah menjalankan backend
- Api Postman dapat dilihat pada folder /doc/postman/*
- User Case Diagram <br/>
  <img src="./doc/use_case_diagram.png">
- Struktur Data Konsep <br/>
  <img src="./doc/schema_db.png">
  

## Author

Firgi Sotya Izzuddin | 2024
