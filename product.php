<?PHP
class product
{
    //deklarasi variable
    private string $name;
    private int $price;
    //deklarasi konstruktor
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    //menambahkan getname dan getprice
    public function getname(): string
    {
        return $this->name;
    }
    public function getprice(): int
    {
        return $this->price;
    }
}

?>