<?php
//atama
//aritmetik
//karşılaştırma
//mantıksal

$a=12;
$b=2;
// echo $toplam=$a+$b." toplamıdır"."<br>";
// echo $fark=$a-$b." farkıdır"."<br>";
// echo $carpim=$a*$b." çarpımıdır"."<br>";
// echo $bolum=$a/$b." bölümüdür"."<br>";
// echo $mod=$a%$b." modudur"."<br>";

// echo $a++."  bulsun"."<br>"; //hatalı bir kullanımdır
// echo ++$a."  bulsun"."<br>";
// echo --$b."  eksini bul"

//atama operatorleri

//  $c=$a+$b;
//  echo $c."<br>";

//  $x=3;
//  $x += $a;
//  echo $x;


//karşılaştırma operatörleri
// php de tru ve false değeri 0 ise çıktı yoktur 1 ise çıktı olarak 1 gösterir php de true false bu şekilde döner

// $sonuc=($a == $b);
// echo var_dump($sonuc);

//mantıksal operatörler
$yas=20;
$mezuniyet="lise";

$sonuc=($yas>=18 && ($mezuniyet =="lise" && $mezuniyet =="üniversite"));

echo var_dump($sonuc);













?>