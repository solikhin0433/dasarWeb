<!DOCTYPE html>
<html>

<head>
    <title>Contoh form dengan PHP dan Jquery</title>
    <script src="https://code.jquery.com/3.7.1/jquery.min.js"></script>
</head>


<body>
    <h2>Form Contoh</h2>
    <form id="myForm" method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih Buah</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih warna favorite</label><br>
        <input type="checkbox" name="warna[]" value="merah">Merah<br>
        <input type="checkbox" name="warna[]" value="biru">Biru<br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau<br>

        <br>

        <label>Pilih Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan<br>

        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(e) {
            e.preventDefault(); //mencegah pengiriman form secara default
            // Mengumpulkan data form
            var formData = $(this).serialize();
            // Kirim data ke server PHP
            $.ajax({
                url: "proses_lanjut.php",
                type: "POST",
                data: formData,
                success: function(response) {
                    $("#hasil").html(response); //menampilkan hasil dari server di div hasil
                }
            });
        });
    });
    </script>
</body>

</html>