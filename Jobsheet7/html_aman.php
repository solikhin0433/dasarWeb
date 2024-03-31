<!DOCTYPE html>
<html lang="en">

<head>
    <title>Output HTML Injection</title>
</head>

<body>
    <h2>Output HTML Injection</h2>

    <?php
    // Memeriksa apakah data telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan input dari form 
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        // Menampilkan input yang tersaring
        echo "<p>Input yang telah disaring: $input</p>";
    };
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Memeriksa PKh input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email yang dimasukkan valid: $email";
        } else {
            // Tangani output yang tidak valid
            echo "Email yang dimasukkan tidak valid!";
        }
    };

    ?>

    <!-- Form untuk mengambil input dari pengguna -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Nama:</label>
        <input type="text" name="input" id="input"><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>