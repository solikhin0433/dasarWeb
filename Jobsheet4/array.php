<?php
$nilaiSiswa=[85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus =[];
foreach ($nilaiSiswa as $nilai){
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus : " .implode (',', $nilaiLulus);

echo "<br><br>";
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br>";

echo "Jawaban soal cerita praktikum 5";
echo "<br>";
// Array dua dimensi 
$nilai_siswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];
// Menghitung rata-rata nilai
$total_nilai = 0;
foreach ($nilai_siswa as $siswa) {
    $total_nilai += $siswa[1];
}
$rata_rata_kelas = $total_nilai / count($nilai_siswa);
echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas:<br>";
foreach ($nilai_siswa as $siswa) {
    if ($siswa[1] > $rata_rata_kelas) {
        echo $siswa[0] . " : " . $siswa[1] . "<br>";
    }
}
?>