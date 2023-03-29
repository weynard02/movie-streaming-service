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

### Artist Menu

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