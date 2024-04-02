<!-- <!DOCTYPE html>
<html>

<head>
    <title>Unggah File Document</title>
</head>

<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>
    <"https://code.jquery.com/3.7.1/jquery.min.js"></script>
    <script src="upload.js"></script>p
</body>

</html> -->

<!-- JAWABAN SOAL NO 3.2 PRAKTIKUM 3 -->
<!DOCTYPE html>
<html>

<head>
    <title>Unggah File Gambar</title>
</head>

<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" multiple accept="image/*">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>
    <script src="https://code.jquery.com/3.7.1/jquery.min.js"></script>
    <script src="upload.js"></script>
</body>

</html>