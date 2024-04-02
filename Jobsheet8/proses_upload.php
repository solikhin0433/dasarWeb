<?php
// Lokasi penyimpanan file yang diunggah
// $targetDirectory = "documents/";
// JAWABAN SOAL NO 2.2
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']['name']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    // JAWABAN SOAL NO 2.2
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    // Loop melalui semua file yang diunggah
   // Loop melalui semua file yang diunggah
   for ($i = 0; $i < $totalFiles; $i++) {
    $fileName = $_FILES['files']['name'][$i];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Periksa apakah file adalah file gambar dan ekstensinya diizinkan
    if (in_array($fileExt, $allowedExtensions)) {
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan file gambar yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    } else {
        // Tampilkan pesan kesalahan jika file bukan merupakan gambar
        echo "File $fileName bukan gambar atau ekstensi file tidak diizinkan.<br>";
    }
}
} else {    
echo "Tidak ada file yang diunggah.";
}
?>