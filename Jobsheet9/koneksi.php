<?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }
?>;