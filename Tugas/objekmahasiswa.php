<?php
require_once 'Mahasiswa.php'; // Memasukkan file Mahasiswa.php

// Membuat objek dari class Mahasiswa
$mahasiswa1_0014 = new Mahasiswa("23.240.0014", "Aditya setiawan", "Teknik Informatika");
$mahasiswa2_0014 = new Mahasiswa("23.230.0013", "Siti", "Sistem Informasi");

// Menampilkan informasi mahasiswa
$mahasiswa1_0014->tampilkanInfo_0014();
echo "<br>";
$mahasiswa2_0014->tampilkanInfo_0014();
echo "<br>";

// Mengubah jurusan mahasiswa
$mahasiswa1_0014->ubahJurusan_0014("Manajemen Informatika");
?>
