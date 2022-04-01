<?php
require_once "class_persegipanjang.php";

$rectangle1 = new persegiPanjang( 10, 5 );
$rectangle2 = new persegiPanjang( 2, 6 );

echo "<br/>Luas Persegi Panjang I : ".$rectangle1->getLuas();
echo "<br/>Luas Persegi Panjang II : ".$rectangle2->getLuas();

echo "<br/>Keliling Persegi Panjang I : ".$rectangle1->getKeliling();
echo "<br/>Keliling Persegi Panjang II : ".$rectangle2->getKeliling();
?>