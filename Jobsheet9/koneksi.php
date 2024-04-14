<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "prakwebdb";

    $connect = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    if (!$connect) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    ?>