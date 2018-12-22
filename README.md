Cross-Site Request Forgery (CSRF) in CodeIgniter
============================================================

Berikut adalah cara menggunakan ci_csrf :
------------------------------------------------------------
1. Unduh, buat database, import database dan buka localhost/ci_cstf di browser kesayangan kamu
2. Masukkan data pada form dan submit
3. Apakah data masuk? Jika data masuk maka selamat, kamu sudah berhasil input data ke database :v
4. Pada kondisi awal csrf tidak aktif yang artinya jika kamu input data dari ci_csrf_attack (localhost/ci_cstf_attack) maka data bisa menerobos masuk ke database
5. Untuk mengaktifkan CSRF pada ci_csrf Anda lakukan langkah-langkah berikut : <br>
 - Buka application\config\config.php dan ubah $config['csrf_protection'] = FALSE; menjadi $config['csrf_protection'] = TRUE; kemudian Ctrl + S <br>
 - Buka application\views\csrf_form.php dan hapus \"\<\!\-\-\" beserta \"\-\-\>\" sebelum \<\/form\>
6. Maka perlindungan CSRF sudah aktif dan silakan lakukan hal yang sama
7. Jika hasilnya data tidak masuk ke database (gagal) maka keamanan dari csrf sudah berhasil

Live Demo dan Tutorial
------------------------------------------------------------
- https://youtu.be/uLFhwv-44ak
