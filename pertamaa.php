<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H'.':'.'i');

if($waktu>=5 && $waktu<11){
    $ucapan = "Selamat Pagi";
if($waktu>=11 && $waktu<15)
    $ucapan = "Selamat Siang";
if($waktu>=15 && $waktu<19)
    $ucapan = "Selamat Sore";
}
else {
    $ucapan = "Selamat Malam";
}

echo "{$ucapan} {$nama} sekarang pukul {$waktu}\n";