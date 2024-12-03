<?php 

// Contoh komentar pada php
// Standar output
// Contoh
// print "Hello World";
// print_r("Hello world");
// var_dump("Hello world");
echo "hello world";

// Variable and type data
// Contoh
// $contoh_variable_1 = "Fajar saputra";
// $contoh_variable_2 = false;
// $contoh_variable_3 = true;
// $contoh_variable_4 = "dan lain-lain";

// echo $contoh_variable_1;
// echo $contoh_variable_2;
// echo $contoh_variable_3;
// echo $contoh_variable_4;


// Operator
// + , - , * , / , %
// Contoh

$variable_1 = 314;
$variable_2 = 44;

$hasil = $variable_1 + $variable_2;
$hasil = $variable_1 - $variable_2;
$hasil = $variable_1 * $variable_2;
$hasil = $variable_1 / $variable_2;
$hasil = $variable_1 % $variable_2;


// echo "variable_1 + variabel_2 = $hasil";
// echo "variable_1 - variabel_2 = $hasil";
// echo "variable_1 * variabel_2 = $hasil";
// echo "variable_1 / variabel_2 = $hasil";
// echo "variable_1 % variabel_2 = $hasil";

// penggabungan string / concatenation
// Contoh
$contoh_kata = "Hello";
$contoh_lagi = "World";

// echo "contoh penggabungan " . $contoh_kata . " " .$contoh_lagi;

// Operator Assignment
// =, += , -= , *= , /= , %= , !=
// Contoh
$x = 30;
// $x += 15;
// $x -= 15;
// $x /= 15;
// $x *= 15;
// $x %= 15;
$x = 'Hello';
$x .= ' ';
$x .= 'World';
// echo $x;

// Operator Perbandingan
// == , > , >= , < , <= , !=
// Contoh
// var_dump(10 == 20);
// var_dump(10 > 20);
// var_dump(10 >= 20);
// var_dump(10 < 20);
// var_dump(10 <= 20);
// var_dump(10 != 20);

// Operator Identitas
// ===, !==
// Contoh
// var_dump(10 === '10');
// var_dump(10 !== '10');


// Operator Logika
// && , || , !
// Contoh
// var_dump(10 < 15 && 10 > 10);
// var_dump(10 < 15 || 10 > 10);
// var_dump(!false);

?>