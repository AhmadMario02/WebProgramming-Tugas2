<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan String</title>
</head>
<body>
<?php

//strtolower = lowercase all string
echo strtolower("MERHABA DUNYA!")."<br>";

//strtoupper = uppercase all string
echo strtoupper("merhaba dunya!")."<br>";

//ucfirst = uppercase first word
echo ucfirst("merhaba dunya!")."<br>";

//ucwords = uppercase all words
echo ucwords("merhaba dunya!")."<br>";

//strlen = string length
echo strlen("Merhaba Dunya!")." karakter<br>";

//trim = motong teks
$trim = "Merhaba Dunya!";
echo trim($trim,"Mea!")."<br>";

//ltrim = dari kiri (left trim)
echo ltrim($trim, "Mer")."<br>";

//rtrim = dari kanan (right trim)
echo rtrim($trim, "ya!")."<br>";

//sprintf = string print format
$num = 165;
$str = "ESQ";
$txt = sprintf("Saya ngampus di %s Menara %u",$str,$num)."<br>";
echo $txt;

//str_word_count = total word count
echo str_word_count($txt)." kata<br>";

//strstr = cari string, dan mengembalikan/print setelahnya
echo strstr($txt,"di");

//stristr = search nya tidak case sensitive
echo stristr($txt, "menara");

//str_replace = replace kata (yg diganti, pengganti, stringnya)
echo str_replace("Dunya", "Mario", $trim)."<br>";

//str_repeat = repeat
echo str_repeat($trim." ", 10/2)."<br>";

//substr = ngambil sebagian string
echo substr($trim,7)."<br>";

//strpos = nyari posisi paling awal, return integer
echo strpos($txt,"ESQ")."<br>";

//implode = ambil string dari array
$arr  = array("Merhaba","Dunya","!","<br>");
echo implode(" ", $arr);

//explode = kebalikan implode
print_r(explode(" ",$trim));
echo "<br>";

//number_format = format nomor ribuan
echo number_format("1000000")."<br>";

//md5 = enkripsi
echo md5($trim)."<br>";

//parse_str = dari string ke array
$prs = "name=Asep&age=43";
parse_str($prs, $out);
echo $out['name']."<br>";
echo $out['age']."<br>";

//substr_compare = membandingkan string
echo substr_compare("John","John",0)."<br>";

//substr_replace = ganti 
echo substr_replace("Merhaba","Dunya!",0)."<br>";

//wordwrap = membuat baris baru ketika mencapai panjang yang ditentukan
echo wordwrap($txt,5,"<br>\n")
?>
</body>
</html>