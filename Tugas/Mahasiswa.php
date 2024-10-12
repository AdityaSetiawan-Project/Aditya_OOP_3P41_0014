<?php
class Mahasiswa {
    var $nim_0014;
    var $nama_0014;
    var $jurusan_0014;

    // Constructor
    function __construct($nim_0014, $nama_0014, $jurusan_0014) {
        $this->nim_0014 = $nim_0014;
        $this->nama_0014 = $nama_0014;
        $this->jurusan_0014 = $jurusan_0014;
    }

    // Function untuk menampilkan informasi mahasiswa
    function tampilkanInfo_0014() {
        echo "NIM: $this->nim_0014, Nama: $this->nama_0014, Jurusan: $this->jurusan_0014";
    }

    // Function untuk mengubah jurusan
    function ubahJurusan_0014($jurusanBaru_0014) {
        $this->jurusan_0014 = $jurusanBaru_0014;
        echo "Jurusan berhasil diubah menjadi $this->jurusan_0014";
    }
}
?>
