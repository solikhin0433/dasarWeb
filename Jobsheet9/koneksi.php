<?php
// Buat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
// Query untuk membuat tabel user
$query = "CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";
// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "Tabel user berhasil dibuat.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
// Data yang akan dimasukkan
$username = "admin";
$password = "123";

// Hash password menggunakan MD5
$password_hashed = md5($password);
// Query untuk memasukkan data ke dalam tabel user
$query_insert = "INSERT INTO user (username, password) VALUES ('$username', '$password_hashed')";
// Eksekusi query insert
if (mysqli_query($koneksi, $query_insert)) {
    echo "Data berhasil dimasukkan ke tabel user.";
} else {
    echo "Error: " . $query_insert . "<br>" . mysqli_error($koneksi);
}
// Tutup koneksi
mysqli_close($koneksi);
?>