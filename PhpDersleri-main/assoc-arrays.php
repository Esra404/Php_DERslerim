<?php
// key value şeklinde değer alırım assoctive dizilerde
//key--->value
//41-->kocaeli

$plakalar=array(41,72,21,62);

$sehirler=array("kocaeli","batman","diyarbakır","dersim");

$plaka_bilgileri = array(
	41=>"kocaeli",
	72=>"batman",
	21=>"diyarbakır",
	62=>"dersim"

);
echo $plaka_bilgileri[41]."<br>";

$telefon_rehberi=array(
	"esranın telefonu"=>122312,
	"yarenin telefonu"=>24234
);

echo $telefon_rehberi["esranın telefonu"];

$urunler=[
	[
		"ürün_id"=>1212,
		"fiyat"=>123121,
		"marka"=>"samsung"

	],
	[
		"ürün_id"=>12132,
		"fiyat"=>121231,
		"marka"=>"samsung2"

	],
	[
		"ürün_id"=>31212,
		"fiyat"=>12121,
		"marka"=>"samsung3"

	]
	];

	echo $urunler[0]["fiyat"]."<br>";
	echo $urunler[1]["ürün_id"]."<br>";
	echo $urunler[2]["marka"]."<br>";




?>