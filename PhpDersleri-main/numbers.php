<?php

$sayi1=12;
$sayi2=23;

echo "sonuc= ".($sayi1+$sayi2)."<br>";
echo "sonuc= ".($sayi1-$sayi2)."<br>";
echo "sonuc= ".($sayi1*$sayi2)."<br>";
echo "sonuc= ".($sayi1/$sayi2)."<br>";

echo var_dump(is_int($sayi1)."<br>");
echo var_dump(is_int($sayi2)."<br>");
echo var_dump(is_float($sayi1)."<br>");
echo var_dump(is_numeric("a10")."<br>");


echo ceil(3.2)."<br>";
echo ceil(4.7)."<br>";
echo floor(3.2)."<br>";
echo round(4.4)."<br>";
echo sqrt(25)."<br>";
echo abs(-25)."<br>";











?>