<?php
//digunakan untuk memeriksa apakah session telah dimulai
if (session_status()=== PHP_SESSION_NONE)
// jika mulai session akan dimulai
session_start();
session_destroy();// digunakan untuk menghancurkan session yang ada
header('location: index.php');
?>