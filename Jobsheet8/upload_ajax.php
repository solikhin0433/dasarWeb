<?php
// if (isset($_FILES['file'])) {
//     $errors = array();
//     $file_name = $_FILES['file']['name'];
//     $file_size = $_FILES['file']['size']; 
//     $file_tmp = $_FILES['file']['tmp_name'];
//     $file_type = $_FILES['file']['type'];
//     @$file_ext = strtolower("". end (explode('.', $_FILES['file']['name'])) . ""); 
//     $extensions = array("pdf", "doc", "docx", "txt");

//     if (in_array($file_ext, $extensions) === false){
//         $errors[] = "Ekstensi File yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
//     }
//     if ($file_size > 2097152) {
//         $errors[] = "Ukuran File yang diizinkan maksimal 2 MB.";
//     }
//     if (empty($errors) === true) {
//         move_uploaded_file($file_tmp, "document/". $file_name);
//         echo "File berhasil diunggah.";
//     } else {
//         echo implode(" ", $errors);
//     }
// }

// JAWABAN SOAL 3.2 PRAKTIKUM 3
if (isset($_FILES['files'])) {
    $errors = array();
    $uploaded_files = array();

    $extensions = array("jpg", "jpeg", "png", "gif"); // Ekstensi gambar yang diizinkan
    $max_file_size = 2097152; // Ukuran maksimum file (2 MB)

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        @$file_ext = strtolower(end(explode('.', $file_name)));

        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Ekstensi File yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > $max_file_size) {
            $errors[] = "Ukuran File " . $file_name . " melebihi batas maksimum (2 MB).";
        }

        if (empty($errors)) {
            $uploaded_files[] = $file_name;
            move_uploaded_file($file_tmp, "document/" . $file_name);
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    } else {
        echo "File berhasil diunggah: " . implode(", ", $uploaded_files);
    }
}
?>