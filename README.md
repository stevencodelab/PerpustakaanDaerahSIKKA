# PerpustakaanDaerahSIKKA
Sistem Informasi Perpustakaan Berbasis Website Untuk Dinas Kearsipan Kabupaten SIKKA.

***Harus Di Jalankan Menggunakan PHP versi dibawah 7 (saya menggunakan xampp versi 5.6)***
bisa di download melalui link berikut ini : 
***https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/5.6.40/xampp-windows-x64-5.6.40-1-VC11-installer.exe/download***

***Langkah Penggunaan*** :
1. Buat database baru dengan nama 'perpus-kp.sql' pada localhost:phpmyadmin
2. Import database 'perpus-kp.sql' dari folder 'db sql'
   

***Login Admin*** :
username : admin
password : admin123

***Login User*** :
username : user
password : user
Jika error login untuk admin maupun user silahkan mengubah password secara langsung pada database.
Jika tidak terdapat opsi untuk merubah langsung pada database, itu dikarenakan tidak ada PK (PrimaryKey) pada masing-masing table jadi kolom id pada masing-masing table harus di ubah menjadi primary key.

***Fitur (Admin)*** :
1. Login
2. Menambahkan Data Anggota Perpustakaan / Petugas Perpustakaan
3. Menambahkan Data Buku
4. Menambahkan Data Peminjaman Buku
5. Menambahkan Data Pengembalian Buku
6. Data Denda Keterlambatan
7. Logout

***Fitur (User)*** :
1. Login
2. Melihat Data Buku Pada Perpustakaan
3. Melihat Data Peminjaman Buku
4. Logout







