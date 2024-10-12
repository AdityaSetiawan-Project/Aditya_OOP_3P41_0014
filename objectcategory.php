<?php
require_once "category.php";

$objcategory = new category();
//untuk instal variable tidak lagi menggunakan seperti ini
//$objcategory->name="handphone";
$objcategory->setname("Handpone");
$objcategory->setecpensive(true);

//mengakses data
echo "name : ($objcategory->getname())" . PHP_EOL;
echo "Expensive : ($objcategory->isexpensive())" . PHP_EOL;
?>