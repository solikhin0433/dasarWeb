<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiupload Dokumen</title>
</head>

<body>
    <h2>Unggah Gambar</h2>]
    <!-- <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf,.doc, .docx" />
        <input type="submit" value="Unggah" />
    </form> -->
    <!-- JAWABAN SOAL NO 2.2 -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" multiple>
        <input type="submit" value="Upload File" name="submit">
    </form>

</body>

</html>