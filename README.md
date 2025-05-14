
# 🌟 Berbinar Insightful Indonesia - Web Platform

**Berbinar Insightful Indonesia** adalah sebuah platform web yang dikembangkan untuk mendukung layanan psikologi secara terintegrasi. Platform ini menjadi fondasi digital bagi Berbinar dalam menyediakan berbagai layanan profesional seperti:

- Konseling
- Psikotes
- Kelas edukasi
- Konsultasi dengan tenaga ahli

Dengan pendekatan yang inklusif dan penggunaan alat psikologi terstandar, proyek ini bertujuan membangun hubungan yang kuat dan profesional antara perusahaan dengan klien, serta membantu individu maupun organisasi meraih potensi terbaiknya.

---

## 📦 Instalasi & Deployment

Sebelum memulai proses instalasi dan deployment proyek ini secara lokal, pastikan Anda telah menginstal beberapa **perangkat lunak pendukung (development tools)** berikut:

- **Git** – untuk meng-clone repository dari GitHub  
- **Code editor** – disarankan menggunakan [Visual Studio Code](https://code.visualstudio.com/)  
- **Web server stack** – seperti [Laragon](https://laragon.org/) atau [XAMPP](https://www.apachefriends.org/index.html), yang berfungsi sebagai aplikasi server lokal untuk menjalankan PHP dan MySQL

---

### 1. Clone Repository

Untuk mulai bekerja dengan proyek ini, jalankan perintah berikut di terminal untuk meng-clone repository ke komputer lokal Anda:

```bash
git clone https://github.com/berbinarin/berbinarin.git
cd berbinarin
```

Setelah itu, buka folder proyek yang telah di-clone menggunakan code editor seperti Visual Studio Code.

---

### 2. Instalasi Dependency

Selanjutnya, instal semua dependency backend dan frontend menggunakan perintah berikut di terminal:

```bash
composer install
npm install
```

---

### 3. Konfigurasi Environment

Laravel menggunakan file `.env` untuk mengatur konfigurasi aplikasi. Jalankan langkah berikut:

```bash
cp .env.example .env
```

Kemudian, sesuaikan isi file `.env` dengan pengaturan lokal Anda, seperti nama database, user, dan password.

Setelah file `.env` disiapkan, langkah selanjutnya adalah menghasilkan kunci aplikasi Laravel. Jalankan perintah berikut di terminal:

```bash
php artisan key:generate
```

Perintah ini akan menghasilkan kunci aplikasi yang digunakan untuk mengenkripsi data sensitif di aplikasi Laravel Anda.

---

### 4. Migrasi & Seeding Database

Pastikan aplikasi **web server stack** (seperti Laragon atau XAMPP) Anda sudah aktif dan database server (MySQL/MariaDB) sedang berjalan.

Lalu jalankan perintah berikut untuk membuat dan mengisi struktur database:

```bash
php artisan migrate --seed
```

---

### 5. Menjalankan Proyek

Buka dua terminal terpisah untuk menjalankan backend Laravel dan frontend Vite (bila menggunakan Laravel + Vite):

**Terminal 1 – Laravel Backend:**

```bash
php artisan serve
```

**Terminal 2 – Frontend Dev Server:**

```bash
npm run dev
```

Lalu akses webnya melalui browser dengan mengetikan url
```bash
http://localhost:8000
```
---


## 👍🏻 Standarisasi dan Best Practice
Pada poin ini akan dibahas beberapa Standar atau best practice yang diterapkan pada project ini guna meningkatkan efiensi dan readablelity pada source code. Yang dimana materi pada section ini banyak mengambil refrensi pada repository github [alexeymezenin -Laravel Best Practices](https://github.com/alexeymezenin/laravel-best-practices).


## 1. Penamaan Direktori dan File

| **Konvensi**                | **Penjelasan**                                                                                                                                              | **Contoh**                                             |
|---------------------------- |------------------------------------------------------------------------------------------------------------------------------------------------------------ |--------------------------------------------------------|
| **Controller**         | File controller di dalam folder **Controllers** harus diakhiri dengan kata `Controller` menggunakan format **PascalCase**.                                  | `ArticleController.php`, `PostCategoryController`      |
| **Model**              | Nama file model menggunakan format **PascalCase** dan disarankan menggunakan nama tunggal untuk representasi entitas tunggal.                               | `Post.php`, `ArticleCategory.php`                      |
| **Migration**          | File migrasi harus menggunakan format **snake_case** dan disertai dengan deskripsi yang jelas mengenai fungsinya.                                           | `create_posts_table.php`, `add_status_to_users.php`    |
| **Seeder**             | Gunakan format **PascalCase** untuk file seeder. Seeder biasanya menggunakan nama entitas yang dimodifikasi.                                                | `UserSeeder.php`, `PostCategorySeeder.php`             |
| **Middleware**         | Gunakan format **PascalCase** untuk nama file middleware dan harus jelas menggambarkan fungsinya.                                                           | `Authenticate.php`, `CheckAdmin.php`                   |
| **Request**            | Gunakan **PascalCase** untuk nama file request dan beri nama berdasarkan tindakan atau data yang diproses.                                                  | `StorePostRequest.php`, `UpdateUserProfileRequest.php` |
| **Service**            | Jika menggunakan service classes, nama file harus menggunakan **PascalCase**.                                                                               | `PostService.php`, `FileUploadService.php`             |

## 2. Penamaan Variabel dan Properti

| **Konvensi**                | **Penjelasan**                                                                                                                                           | **Contoh**                                        |
|-----------------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------|
| **Variable dan Property**                               | Gunakan format **camelCase** untuk penamaan variabel dan properti di dalam kelas.                                           | `$posts`, `$userEmail`                       |
| **Constanta**                                           | Gunakan format **UPPER_SNAKE_CASE** untuk konstanta, yang terdiri dari huruf kapital dan dipisahkan dengan underscore.      | `MAX_POST_LENGTH`, `DEFAULT_USER_ROLE`           |
| **Function/Method**                                | Gunakan format **camelCase** untuk function atau method, dengan kata kerja yang jelas dan deskriptif.                  | `storePost()`, `getUserDetails()`                |
| **Function/Method di Resource Controller**         | Gunakan format yang telah oleh untuk nama function atau metode (index, store, show, update, delete)              | `index()`, `store()`                |
| **Parameter Function**                                  | Gunakan **camelCase** untuk parameter function, sesuai dengan konvensi penamaan pada variabel.                              | `function storePost($title, $postCategory)`     |

## 3. Penamaan URL, Route, dan View

| **Konvensi**                | **Penjelasan**                                                                                                                                              | **Contoh**                                        |
|-----------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------|
| **URL/Route**               | Gunakan **snake_case** untuk nama URL dan route, sehingga mudah dibaca dan konsisten. Setiap kata dipisahkan dengan tanda hubung (-).                      | `/articles`, `/post-categories`                |
| **Route Name**              | Gunakan **snake_case** dengan **dot noation** untuk route name. Setiap kata dipishkan dengan tanda (_) dan           | `articles.index`, `posts.update_slug`                |
| **Blade View dan Components**        | Gunakan format **kebab-case** untuk penamaan komponen Blade.                                                                                               | `header.blade.php`, `user-list.blade.php`            |

## 4. Penamaan Tabel dan Kolom Database

| **Konvensi**                | **Penjelasan**                                                                                                                                               | **Contoh**                                        |
|-----------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------  |---------------------------------------------------|
| **Tabel**               | Gunakan **plural snake_case** untuk nama tabel di database. Nama tabel harus menjelaskan jenis entitas yang disimpan.                                            | `users`, `posts`, `comments`                      |
| **Column**               | Gunakan **snake_case** untuk nama kolom, dan pastikan nama kolom konsisten dan deskriptif terhadap data yang disimpan. Dan tidak perlu menambahkan nama model   | `id`, `title`, `created_at`                       |
| **Indeks/Foreign Key**       | Gunakan **snake_case** untuk nama indeks atau relation dan konsisten dalam penamaan.                                                                        | `user_id`, `post_id`, `created_at_index`          |

## 6. Best Practices Lainnya

- **Deskriptif**: Gunakan nama yang deskriptif untuk semua elemen dalam proyek agar mudah dipahami oleh pengembang lain.
- **Konsisten**: Pastikan Anda konsisten dengan format penamaan yang digunakan di seluruh proyek untuk menjaga kejelasan dan keterbacaan.
- **Singkat dan Padat**: Hindari penggunaan nama yang terlalu panjang. Usahakan agar nama tetap deskriptif namun tidak berlebihan.
"""