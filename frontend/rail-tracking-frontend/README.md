<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Rail-Tracking-System

RCS Rail Tracking System adalah aplikasi berbasis web yang dikembangkan untuk membantu pengguna dalam melacak status dan lokasi barang yang dikirim melalui KAI Logistik secara real-time. Sistem ini juga memungkinkan admin untuk mengelola data stamformasi dan memantau rute serta status pengiriman barang.

## Build With

UI/UX: Figma
Frontend: Laravel
Backend: .NET
Database: PHP/SQL

# Getting Started
## Prerequisite

Sebelum menjalankan proyek ini, diperlukan persyaratan environment yang harus disiapkan pada device eksekusi proyek
1. Node.js (v20.10.0)
2. Composer (v2.7.7)
3. PHP (v8.2.4)
4. MySQL (v8.0.30)
5. .NET SDK (v8.0.302)
6. XAMPP (v7.4.30)

## Installation

Proses instalasi proyek ini pada local environment
1. Clone repository https://github.com/rofaulakrom/rail-tracking.git 
2. Buat database dengan nama “laravel” lalu import laravel.sql
3. Nyalakan apache dan mySql pada Xampp
4. Copy .env.example menjadi .env pada direktori “frontend/rail-tracking-frontend/database”
5. Lakukan npm install, npm run build,  dan composer install pada direktori “frontend/rail-tracking-frontend” 
6. Buka terminal dan arahkan pada direktori “frontend/rail-tracking-frontend” lalu jalankan php artisan serve 
7. Buka terminal baru dan arahkan pada direktori “backend/rail-tracking-backend” lalu jalankan dotnet run
8. Untuk mengakses swagger dapat mengklik url hasil dotnet run
9. Untuk mengakses web dapat mengkilk url hasil php artisan serve

## File Configuration

1. Konfigurasikan database di .env file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=rcs_database
   DB_USERNAME=root
   DB_PASSWORD=
   ```
2. Konfigurasikan layanan backend .NET di appsettings.json:
   ```
   {
      "ConnectionStrings": {
        "DefaultConnection": "Server=localhost;Database=rcs_database;User Id=root;Password=;"
      },
      "Logging": {
        "LogLevel": {
          "Default": "Information",
          "Microsoft": "Warning",
          "Microsoft.Hosting.Lifetime": "Information"
        }
      },
      "AllowedHosts": "*"
    }
   ```

## Structure Project Test

Tujuan project adalah proses pengujian automation web, sehingga kode program tersimpan dalam package test. Adapun struktur package sbb:

```
rcs-rail-tracking-system/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
└── .env
```
 
