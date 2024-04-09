<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php 
    // Periksa apakah sesi sudah dimulai sebelumnya
    if(session_status() === PHP_SESSION_ACTIVE) {
        // Hapus semua variabel sesi
        session_unset();
        // Hancurkan sesi
        session_destroy();
        echo "All session variables are now removed, and the session is destroyed.";
    } else {
        echo "Session is not initialized.";
    }
    ?>
</body>

</html>