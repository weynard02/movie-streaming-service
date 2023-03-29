# fp-camin-alpro-kelompok8

# Movie Streaming Service

| NRP | Nama |
|-----|------|
| 5025211014 | Alexander Weynard Samsico |
| 5025211213 | Richie Seputro |

Aplikasi Laravel ini merupakan aplikasi layanan streaming movie yang di mana user dapat menonton movie-movie tersebut serta beberapa detail seperti Artist dan Genre. User yang berperan admin dapat juga melakukan CRUD pada movie dan artist tersebut.

## Petunjuk Penggunaan

Setelah melakukan create project dan clone repo:

1. Buatlah database dan sesuaikan namanya dengan `.env`
2. Lakukan `composer require laravel/ui`
3. Lakukan `npm install` dan `npm run build`
4. Lakukan migrasi dengan `php artisan migrate:refresh --seed`
5. Lakukan `php artisan serve` untuk mendapatkan localhost
6. Lakukan `php artisan storage:link` untuk menghubungkan storage

## Mode Admin

1. Tekan menu Admin\
![image](https://user-images.githubusercontent.com/90879937/227697700-148928a5-7187-441b-9911-19e5ea8022c9.png)

2. Kemudian menemukan halaman sebagai berikut\
![image](https://user-images.githubusercontent.com/90879937/228526499-8341df66-c949-423f-b2cb-13dc8506b0c1.png)

Ada beberapa fitur yang bisa diakses:
<ol>
    <li> <b>Search bar</b>: mencari movie </li>
    <li> <b>Add Movie</b>: digunakan untuk menambahkan movie </li>
    <li> <b>Artist Menu</b>: menampilkan semua artist </li>
    <li> <b>View</b>: menampilkan movie secara detail </li>
    <li> <b>Delete</b>: membuang movie dari aplikasi</li>
</ol>

### Add Movie

 Untuk menambahkan movie, diharapkan untuk mengisi title, studio, link, release date, gambar thumbnail, dan genre utama.
 Paid movie digunakan untuk mengetahui apakah movie ini berbayar atau tidak.
 Tags dapat berguna untuk pencarian movie.
 ![image](https://user-images.githubusercontent.com/90879937/227697941-5d5d96a9-3bbc-4d09-b3bd-bbab3e385c4c.png)

### Arist Menu

Untuk menampilkan artist dengan birthdatenya. Admin dapat mengedit nama atau birthdate serta menghapus artist tersebut dari database (*Jika artist tersebut terdaftar dalam movie, maka data artist tersebut hilang dari movie itu*)
![image](https://user-images.githubusercontent.com/90879937/227715485-38448f7e-4533-4c67-b218-3a75eafb06a6.png)
Edit Artist:
![image](https://user-images.githubusercontent.com/90879937/227698105-cd67a881-183f-4f81-a500-19e656b1dda8.png)

### View

Menampilkan movie tersebut serta beberapa detail lengkapnya seperti tags, para cast, dan genre-genrenya.
![image](https://user-images.githubusercontent.com/90879937/227698164-99d4732c-6783-411f-b4d5-3d93a0655f2b.png)
![image](https://user-images.githubusercontent.com/90879937/227698217-5306e8f8-c5c1-456c-8733-5ef1fa0d1f8d.png)

Fitur-fitur pada View sebagai berikut:
<ol>
    <li> <b>Edit</b>: digunakan untuk mengedit movie detailnya </li>
    <li> <b>Delete</b>: membuang movie dari aplikasi </li>
    <li> <b>Add Cast</b>: menambahkan artist yang ada di movie itu </li>
    <li> <b>Add Genre</b>: menambahkan genre pada movie itu</li>
    <li> <b>Remove</b>: Menghapus artist/genre dari movie itu (<i>tidak menghapus data masternya</i>)</li>
</ol>

### Add Cast

Ada dua opsi dalam penambahan cast

1. Memilih artist dari yang sudah ada dalam database
2. Menambahkan artist yang belum ada dalam database tersebut (*memasukan data artist yang baru*)
![image](https://user-images.githubusercontent.com/90879937/227698513-69e4e8dd-b468-4228-9a28-ef544fe91121.png)

## Mode User Normal

