<?php
//abs = absolut
echo abs(6.7)."<br>";

//sqrt = square root/ akar kuadrat
echo sqrt(9)."<br>";

//round = pembulatan
echo round(4.5)."<br>";

//floor = bulat ke bawah
echo floor(1.2)."<br>";

//ceil = bulat ke atas
echo ceil(1.2)."<br>";

//rand = random
echo rand()."<br>";
echo rand(1,10)."<br>";

//mt_rand = random pke algo Mersenne Twister
echo mt_rand()."<br>";

//pow = pangkat
echo pow(2,4)."<br>";

//pi = phi
echo pi()."<br>";

//min = nilai minimal di array
echo(min(2,4,1,8,10) . "<br>");

//max = nilai maximal di array
echo(max(2,4,11,8,10) . "<br>");

//fmod = fungsi modulo
echo fmod(2,7)."<br>";

//bindec = biner ke desimal
echo bindec("1000")."<br>";

//Date Format
echo "Today is ".date("l, d F Y")."<br>";
echo "Time is ".date("h:i:sa")."<br>";

$d=mktime(11,14,54,3,12,2020);
echo "Hasil buatan ".date("Y-m-d h:i:sa", $d)."<br>";

$awal=date_create("2002-07-20");
$akhir=date_create();
$diff=date_diff($awal,$akhir);
echo $diff->y." tahun, ";
echo $diff->m." bulan, ";
echo $diff->d." hari, ";
echo $diff->h." jam, ";
echo $diff->i." menit, ";
echo $diff->s." detik<br>";
?>