<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php
        // Periksa apakah variabel sesi telah diatur sebelum mencoba mengaksesnya
        if(isset($_SESSION["favcolor"]) && isset($_SESSION["favanimal"])) {
            echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
            echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        } else {
            echo "Session variables are not set.";
        }
    ?>
</body>

</html>

<?php 
    // Set nilai variabel sesi
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
?>