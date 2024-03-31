<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input php</title>
</head>

<body>
    <h2>Form input PHP</h2>
    <?php
    // inisialisasi variabel
    $namaErr="";
    $nama="";

    //cek form sudah disubmit
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //validasi nama 
        if (empty($_POST["nama"])){
            $namaErr = "Nama harus diisi";
        }
        else {
            $nama = $_POST["nama"];
            echo "Data Berhasil Disimpan:";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
        <span class="error"><?php echo $namaErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>