<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
    </body>

</html>
<?php
if (isset($_POST["submit"])) {
$targetDirectory = "document/"; // directory tujuan untuk menyimpan file
  // Mengambil nama file
  $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

  // Mendapatkan ekstensi file
  $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  // Array ekstensi file yang diizinkan
  $allowedExtensions = array("txt", "pdf", "doc", "docx");
  $maxFileSize = 10 * 1024 * 1024;

  // Mengecek ekstensi dan ukuran file
  if (in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {

    // Memindahkan file yang diunggah ke direktori tujuan
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
      echo "File berhasil diunggah.";
    } else {
      echo "Gagal mengunggah file.";

    }
  } else {
    echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
  }
}
?>