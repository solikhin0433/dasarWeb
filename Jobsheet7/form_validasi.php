<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/3.7.1/jquery.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>
    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(e) {
            e.preventDefault(); // Mencegah pengiriman form secara default

            // Mengumpulkan data form
            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            // Validasi nama
            if (nama.trim() === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi email
            if (email.trim() === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // Validasi password
            if (password.length < 8) {
                $("#password-error").text("Password harus memiliki minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }

            if (valid) {
                // Mengirim data ke server PHP menggunakan Ajax
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: $("#myForm").serialize(),
                    success: function(response) {
                        // Menampilkan pesan dari server di bawah form
                        $("#response").html(response);
                    }
                });
            }
        });
    });
    </script>
    <div id="response"></div>
</body>

</html>