<?php

$db_username="esradurmaz";
$db_passeord="12345";

// $sonuc=($db_username =="esradurmaz");

// if($sonuc){
// 	//true bloğ çalışır
// 	echo "username çalışır ";

// }else{
// 	//faşse bloğu çalışır
// 	echo "username bloğu çalışmaz";
// }

if($db_username=="esradurmaz"){
	if($db_passeord=="12345"){
		echo "parola doğrudur";
	}else{
		echo "parola yanlıştır";
	}
}
	else{
		echo "username yanlıştır";
	}











?>