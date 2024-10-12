<?php
//include class Mobil.php
require_once "Mobillnjtn.php";
//inisialisasi variabel (objek) mobilsatu
$mobilsatu = new Mobil();

//menambahkan properties pada objek mobilsatu
$mobilsatu->nama = "Avanza";
$mobilsatu->merk = "Toyota";
$mobilsatu->warna = "Hitam";
$mobilsatu->tahun = 2019;
$mobilsatu->kecepatanmaksimal = 1300;

//menampilkan informasi objek mobilsatu
echo "Nama: $mobilsatu->nama" . PHP_EOL;
echo "Merk: $mobilsatu->nama" . PHP_EOL;
echo "Warna: $mobilsatu->nama" . PHP_EOL;
echo "Tahun: $mobilsatu->nama" . PHP_EOL;
echo "Kecepatan Maksimal: $mobilsatu->nama". PHP_EOL;

//membuat objek mobildua $mobildua new Mobil();
$mobildua = new Mobil();
//menambahkan properties pada objek mobildua
$mobildua->nama = "Brio";
$mobildua->merk = "Honda";
$mobildua->warna = "Merah";
$mobildua->tahun = 2018;
$mobildua->kecepatanmaksimal = 1000;
//menampilkan informasi objek mobildua var_dump($mobildua);
var_dump($mobildua)

//mengakses function/metod
$mobilsatu->tambahkecepatan();

//Memanggil dan menampilkan constant(mobil.php)
echo mobil: :AUTOR;


//LANJUTAN//
//1. Inheritance 
require_once "mobil.php";
require_once "mobilsport.php";

//objek dari class mobil
$avanza = new mobil ("Avanza", "Toyota", 2020);
echo $avanza->infomobil();

//objek dari class mobilsport
$supra = new mobilsport ("Supra", "Toyota", 2021);
echo $supra->infomobil();
echo $supra->jalankanturbo();


//2. Function Overriding 

?>