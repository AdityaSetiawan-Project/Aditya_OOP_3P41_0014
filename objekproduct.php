<?PHP
require_once "product.php";
require_once "produkturunan.php";
//membuat objek produk
$product = new product ("Apple", 20000);

//menampilkan info name dan price 
echo $product->getname() . PHP_EOL;
echo $product->getprice() . PHP_EOL;

$product2 = new produkturunan("nanas", 30000);
$product->info();
?>