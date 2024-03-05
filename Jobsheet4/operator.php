<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
echo "Hasil penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil pengurangan: " . $hasilKurang . "<br>";
echo "Hasil perkalian: " . $hasilKali . "<br>";
echo "Hasil pembagian: " . $hasilBagi . "<br>";
echo "Sisa bagi: " . $sisaBagi . "<br>";
echo "Hasil pangkat: " . $pangkat . "<br>";
echo "<br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo 'Hasil Sama: ';
var_dump($hasilSama);
echo '<br>';
echo 'Hasil Tidak Sama: ';
var_dump($hasilTidakSama);
echo '<br>';
echo 'Hasil Lebih Kecil: ';
var_dump($hasilLebihKecil);
echo '<br>';
echo 'Hasil Lebih Besar: ';
var_dump($hasilLebihBesar);
echo '<br>';
echo 'Hasil Lebih Kecil Sama: ';
var_dump($hasilLebihKecilSama);
echo '<br>';
echo 'Hasil Lebih Besar Sama: ';
var_dump($hasilLebihBesarSama);
echo '<br>';
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo 'Hasil And: ';
var_dump($hasilAnd);
echo '<br>';
echo 'Hasil Or: ';
var_dump($hasilOr);
echo '<br>';
echo 'Hasil Not A: ';
var_dump($hasilNotA);
echo '<br>';
echo 'Hasil Not B: ';
var_dump($hasilNotB);
echo '<br>';
echo "<br>";

$a += $b;
echo "a += b: {$a} <br>";
$a = 10;
$a -= $b;
echo "a -= b: {$a} <br>";
$a = 10;
$a *= $b;
echo "a *= b: {$a} <br>";
$a = 10;
$a /= $b;
echo "a /= b: {$a} <br>";
$a = 10;
$a %= $b;
echo "a %= b: {$a} <br>";
$a = 10;
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo 'Hasil Identik: ';
var_dump($hasilIdentik);
echo "<br>";
echo 'Hasil Tidak Identik: ';
var_dump($hasilTidakIdentik);
echo "<br>";
?>