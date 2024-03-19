<?php
// Membuat fungsi
// function perkenalan($nama, $salam = "Assalamualaikum") {
//    echo $salam . ", ";
// echo "Perkenalkan, nama saya " . $nama . "<br/> ";
//  echo "Senang berkenalan dengan Anda <br/> ";
// }

// Memanggil fungsi yang sudah dibuat
// perkenalan(" Solikhin", "Hallo");

// echo "<hr>";

// $saya = " Khin ";
// $ucapanSalam = "Selamat pagi";

// // // Memanggil fungsi lagi
// // perkenalan($saya);

// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/> ";
// memanggil fungsi lain
echo "Saya berusia " . hitungUmur(2003, 2024) . " tahun"; 
echo "Senang berkenalan dengan Anda <br/> ";
}
perkenalan("Khin");
?>