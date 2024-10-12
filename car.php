<?PHP
interface HasBrand
{
    function GetBrand(): string;
}
interface IsMaintenance
{
    function IsMaintenance(): bool;
}
interface car extends HasBrand
{
    function drive(): void
    function getTire(): int;
}
//implementasi interface pada class childnya
class avanza implements car
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4 ;
    }
    public function getBrand(): string
    {
        return "Toyota" ;
    }
    public function IsMaintenance(): bool
    {
        return false ;
    }
}
?>