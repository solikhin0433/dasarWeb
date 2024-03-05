<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf : B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai hruf : C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}
echo "<br>";
 $jarakSaatIni = 0;
 $jarakTarget = 500;
 $penigkatanHarian = 30;
 $hari = 0;
 while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $penigkatanHarian;
    $hari++;
 }
 echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";   
 echo "<br>";
 
 $jumlahLahan = 10;
 $tanamanPerLahan = 5;
 $buahPerTanaman = 10;
 $jumlahBuah = 0;
 
 for($i = 1; $i <= $jumlahLahan; $i++) {
     $jumlahBuah += ($tanamanPerLahan + $buahPerTanaman);
 }
 
 echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
 
 echo "<br><br>";
 $skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";
echo "<br>";
echo "Berikut adalah jawaban pada soal cerita 1";
echo "<br>";
$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

// Urutkan nilai dari terkecil ke terbesar
sort($nilai_siswa);

// Mengabaikan dua nilai terendah (indeks 0 dan 1)
// dan dua nilai tertinggi (indeks 8 dan 9)
$total_nilai = 0;
for ($i = 2; $i < 8; $i++) {
    $total_nilai += $nilai_siswa[$i];
}
$rata_rata = $total_nilai / 6;
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "<br>";
echo "Nilai rata-rata setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $rata_rata;

echo "<br>";
echo "<br>";


echo "Berikut adalah jawaban pada soal cerita 2";

echo "<br>";

$harga = 120000;
$diskon = 0;

if($harga > 100000) {
$diskon = 0.2;
} else {
$diskon = 0;
}

$hargaDiskon = $harga - ($harga * $diskon);
echo "Harga setelah diskon: {$hargaDiskon}";

echo "<br>";
echo "<br>";

echo "Berikut adalah jawaban pada soal cerita 3";

echo "<br>";

$skor = 700;

echo "Total skor pemain: {$skor} <br>";

$hadiah = ($skor >= 500) ? "Ya" : "Tidak";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiah}";
?>