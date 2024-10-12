<?PHP
class mobilsport extends mobil
{
    public $turbo = false;

    function jalankanturbo()
    {
        $this->turbo = true;
        return "Jalankan Turbo";
    }
    function infomobil()
    {
        return "Nama mobil sport: $this->nama" . PHP_EOL
                . "Brand : $this->brand" . PHP_EOL
                . "Tahun : " . $this->tahun . PHP_EOL
                . "turbo : " . $this-> true . PHP_EOL;
    }
}
?>