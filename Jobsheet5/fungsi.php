<?php
// Membuat fungsi
function perkenalan($nama, $salam= "Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya".$nama."<br/> ";
    echo "Senang berkenalan dengan Anda <br/> ";
}

// Memanggil fungsi yang sudah dibuat
perkenalan(" Solikhin", "Hallo");

echo "<hr>";

$saya = " Khin ";
$ucapanSalam = "Selamat pagi";

// memanggil lagi
perkenalan($saya)

?>