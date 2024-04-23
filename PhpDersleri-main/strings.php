<?php
$urunAdi="ıphone";
$urunFiyati=2343;
$kdvOrani=0.18;
$urunFiyati=$urunFiyati+($urunFiyati*$kdvOrani);

$sonuc=$urunAdi." isimli ürün fiyatı ".$urunFiyati." TL.";

echo $sonuc."<br>";

echo $sonuc[1]."<br>";

echo $sonuc[10]."<br>";
//string fonksiyonları

echo strlen($sonuc)."<br>";
echo str_word_count($sonuc);


?>