# fp-camin-alpro-kelompok8

## Movie Streaming Service

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

## Autentikasi

Sebelum pengguna dapat menggunakan layanan *streaming service*, user harus login
maupun register sebuah akun terlebih dahulu. Jika user tidak memiliki session
token, ketika user membuka endpoint '/' atau root dari page, akan di-*redirect*
ke halaman untuk login/register.

Berikut tampilan dari halaman login:

![Halaman Login](./doc-assets/login.png)

Terlihat bahwa ada 2 field yang perlu diisi, yaitu Email dan Password.

Ketika mencoba login menggunakan detail yang salah / tidak terdaftar, akan
ditampilkan:

![Halaman Login Wrong](./doc-assets/login-unknown-account.png)

![Halaman Login Failed](./doc-assets/login-failed.png)

Jika user belum memiliki akun pada platform, maka user dapat melakukan register.
Berikut tampilan dari laman register:

![Halaman Register](./doc-assets/register.png)

Terlihat bahwa ada 5 field yang perlu diisi, yaitu Nama, Email, Password,
Password Confirmation, dan Plan.

Setelah mencoba register dengan mengisi form, user akan di-*redirect* ke laman
*home* atau *root*:

![Halaman Register New](./doc-assets/register-new-account.png)

![Halaman Register Berhasil](./doc-assets/register-successful.png)

## Listing Movie

Movie yang tersedia pada platform dapat dilihat pada view Home maupun melalui
Movie List. User dapat mencapai laman Movie List dengan cara meng-klik link
"Movie List" pada navbar.

![Halaman Movie](./doc-assets/movie.png)

User juga dapat melihat detil film dengan meng-klik tombol view pada setiap
card movie yang tertampil.

![Halaman Movie View](./doc-assets/movie-view.png)

![Halaman Movie View 2](./doc-assets/movie-view2.png)

## Search by Genre

User dapat melihat daftar film dengan genre tertentu dengan meng-klik link
pada navbar bertuliskan "Genre". Setelah user meng-klik link tersebut, akan
tampil pop-up yang menampilkan genre-genre yang bisa di-*search*.

![Halaman Search by Genre](doc-assets/genre.png)

Contoh search by genre adalah seperti di bawah (genre Romance):

![Halaman Search by Genre 2](doc-assets/search-by-genre.png)

Contoh search by keyword ("Kimi"):

![Halaman Search by Genre 3](doc-assets/search.png)

## Watchlist

User dapat melihat dan mengedit watchlist mereka. View watchlist dapat dicapai
dengan meng-klik link "Watchlist" pada navbar.

Berikut tampilan awal seorang user baru yang belum menambahkan entri ke
watchlist:

![Watchlist](./doc-assets/watchlist-initial.png)

Untuk menambahkan entri watchlist baru, user dapat meng-klik tombol "Add to
Watchlist". Setelah tombol ditekan akan muncul tampilan sebagai berikut:

![Watchlist 2](doc-assets/watchlist-add.png)

Pada tampilan itu user dapat memilih dari daftar movie yang *eligible* untuk ia
lihat untuk dimasukkan ke dalam watchlist-nya.

Setelah menambahkan entri ke watchlist, tampilan akan menjadi seperti ini:

![Watchlist 3](doc-assets/watchlist-1-item.png)

![Watchlist 4](doc-assets/watchlist-2-item.png)

User juga dapat melakukan penghapusan terhadap entri watchlist dengan meng-klik
tombol "Remove".

![Watchlist 5](doc-assets/watchlist-delete.png)

## Mode Admin

1. Tekan menu Admin\
![image](https://user-images.githubusercontent.com/90879937/228586671-93ce3de6-9334-4710-b3d7-53e36dc81845.png)

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

 ![image](https://user-images.githubusercontent.com/90879937/228585843-63857a93-0948-4ab8-bec7-2e3bc1d5e678.png)

### Artist Menu

Untuk menampilkan artist dengan birthdatenya. Admin dapat mengedit nama atau birthdate serta menghapus artist tersebut dari database (*Jika artist tersebut terdaftar dalam movie, maka data artist tersebut hilang dari movie itu*)

![image](https://user-images.githubusercontent.com/90879937/228585936-9bf94f3a-c6f7-4ca8-bbb9-1b3ce69191fa.png)

### Edit Artist:

![image](https://user-images.githubusercontent.com/90879937/228586003-caac9b76-754b-43ca-ab08-ee5d712cbc84.png)

### View

Menampilkan movie tersebut serta beberapa detail lengkapnya seperti tags, para cast, dan genre-genrenya.

![image](https://user-images.githubusercontent.com/90879937/228586110-67345b1e-1dba-41a0-a96f-a9b3937f8837.png)
![image](https://user-images.githubusercontent.com/90879937/228586166-a0cf95c2-8802-4cf7-a442-8a23818a3968.png)

Fitur-fitur pada View sebagai berikut:

<ol>
    <li> <b>Edit</b>: digunakan untuk mengedit movie detailnya </li>
    <li> <b>Delete</b>: membuang movie dari aplikasi </li>
    <li> <b>Add Cast</b>: menambahkan artist yang ada di movie itu </li>
    <li> <b>Add Genre</b>: menambahkan genre pada movie itu</li>
    <li> <b>Remove</b>: Menghapus artist/genre dari movie itu (<i>tidak menghapus data masternya</i>)</li>
</ol>

### Edit Movie
Admin dapat mengganti data pada movie tersebut 
(*dengan catatan: perlu mengupload thumbnail ulang dan memastikan apakah movie tersebut dalam status Paid*)
![image](https://user-images.githubusercontent.com/90879937/228584891-5132b35f-2971-43db-8f05-71714d1b7d4e.png)

### Add Cast

Ada dua opsi dalam penambahan cast

1. Memilih artist dari yang sudah ada dalam database
2. Menambahkan artist yang belum ada dalam database tersebut (*memasukan data artist yang baru*)

![image](https://user-images.githubusercontent.com/90879937/227698513-69e4e8dd-b468-4228-9a28-ef544fe91121.png)

### Add Genre
Pilih genre dari pilihan yang ada
![image](https://user-images.githubusercontent.com/90879937/228584009-47aa0a92-e627-4f3d-b3a0-778a7de73345.png)

