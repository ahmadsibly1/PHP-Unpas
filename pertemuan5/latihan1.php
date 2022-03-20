<?php

// Array
// variable yang dapat memiliki banyak nuilai
// elemen pada array dapat memiliki tipe data yang berbeda

// Pasangan antar key dan value
// key ny adalah index yang dimulai dari 0


// membuat array

$bulan = ["januari", "Februari", "Maret"];
$hari = ["senin", "selasa", "rabu"];

var_dump($bulan);
echo "</br>";
print_r($hari);



echo "</br>";
echo $bulan[1];


// menambahkan elemen baru pad array
$hari[] = "kamis";
$hari[] = "jumat";
