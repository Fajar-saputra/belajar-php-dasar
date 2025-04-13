<?php

$arrayAngka = [1,2,3,4,5,6,];
$isiRandom = ["contoh string", false, 325];

function baris(){
   echo("------------------------\n");
}

// menampilkan array menggunakan var_dump() atau print_r()
baris(); // pemisahan
var_dump($isiRandom);
baris(); // pemisahan
var_dump($arrayAngka);
baris(); // pemisahan
print_r($isiRandom);
baris(); // pemisahan
print_r($arrayAngka);
baris(); // pemisahan

// menampilkan terpisah
echo $arrayAngka[3];
echo $isiRandom[0];


?>