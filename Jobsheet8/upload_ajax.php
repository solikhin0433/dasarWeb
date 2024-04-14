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
if (isset($_FILES["file"])) {
    $errors = array();
    $file_name = $_FILES["file"]["name"];
    $file_size = $_FILES["file"]["size"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_type = $_FILES["file"]["type"];
    @$file_ext = strtolower("" . end(explode(".", $_FILES["file"]["name"])) . "");
    $extension = array("pdf", "doc", "docx", "txt");
    // $extension = array("jpg", "jpeg", "png");

    if(in_array($file_ext, $extension) == false) {
        $errors[] = "Ekstensi file yang diizinkan adaf PDF, DOC, DOCX, atau TXT.";
        // $errors[] = "Ekstensi file yang diizinkan adaf JPG, JPEG, PNG.";
    }

    if ($file_size > 2097152) {
        $errors[] = "Ukuran file tidak boleh lebih 2 MB";
    }
    if(empty($errors) == true) {
        move_uploaded_file($file_tmp, "upload/" .$file_name);
        // move_uploaded_file($file_tmp, "images/" .$file_name);
        echo "FIle berhasil diunggah";
        // move_uploaded_file($file_tmp, "images/" .$file_name);
        // echo "Gambar berhasil diunggah";
    } else {
        echo implode(" ", $errors);
    }
}
?>;