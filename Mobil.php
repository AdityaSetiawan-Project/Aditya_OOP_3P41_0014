<?php

// class mobil
// {

// }

//Properties
// class Mobil
// {
//     var $nama;
//     var $merk;
//     var $warna;
//     var $tahun;
//     var $kecepatanmaksimal;
// }

// Properties Type Declaration 
// class Mobil
// {
//     var string $nama;
//     var string $merk = Toyota;
//     var string $warna;
//     var int $tahun;
//     var int $kecepatanmaksimal;
// }


//Nullable Properties
// class Mobil
// {
//     var string $nama;
//     var string $merk;
//     var string $warna = null;
//     var int $tahun;
//     var int $kecepatanmaksimal;
// }


// 5. Function
// Mengakses function pada objek (class objekMobil.php) 
// function tambahkecepatan()
// {
//     echo "Kecepatan Bertambahh";
// }



// 6. This Keyword 
function infomobil(?string $nama)
{
    //kondisi jika parameter kosong maka akan tampil properties dari objek
    if (is_null($nama)){
        echo"nama mobil adalah {$this->nama}" . PHP_EOL;
        //jika parameter memiliki nilai maka yang ditampilkan adalah parameter pada function
    } else {
        echo "Mobil anda adalah $nama" . PHP_EOL;
    }
}


// 7. Constant
// class mobile 
// {
//     const AUTOR = "Aditya S";
// }

//8. Constructor 
class mobil
{
    var string $nama;
    var ?string $merk = null;
    var int $tahun;
    
    public function __construct(string $nama, ?string $merk)
    {
        $this->nama = $nama;
        $this->merk = $merk;   
    }

    public function infomobil()
    {
        return "$this->nama, $this->merk, $this->tahun;";
    }
}


//LANJUTAN//
//1. Inheritance 


?>