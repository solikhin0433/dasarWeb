<?php
$umur;
if(isset($umur) && $umur >= 18) {
    echo "Anda udah dewasa.";
} else {
    echo "Anda belum dewasa atau variable 'umur' tidak ditemukan";
}

$data = array(
    "nama"=> "Jane",
    "Usia"=> "25",
);

if (isset($data["nama"])) {
    echo "<br>Nama: ". $data["nama"];
} else {
    echo "<br>Variable 'nama' tidak ditemukan dalam array.";
}
//empty()
// $nama = ""; // Variabel string kosong
// if(empty($nama)){
//     echo "<br> Nama tidak terdifinisi atau kosong";
// }
// else {
//     echo "Nama terdefinisi";
// }
?>