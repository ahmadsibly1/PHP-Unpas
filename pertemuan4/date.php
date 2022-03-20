<?php
// Function date untuk menamppilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");



// TIME
// UNIX time / EPOCH time adalah
// Detik yang sudah berlalu sejak 1 januari 1970
// atau asala mula waktu di dunia IT
// echo time();

// untuk mengetahui waktu 100 hari yang lalu
// echo date("l", time() - 60 * 60 * 24 * 100);


// mk time
// membuat sendiri detik
// mktime(0,0,0,0,0,0,)
// format urutan 0 ny adalah : jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 3, 10, 1995));


// strtotime : kebalikan dari mk time
