// $(document).ready(function(){
//     $('#upload-form').submit(function(e){
//         e.preventDefault();
//         var formData = new FormData(this);
//         $.ajax({
//             type: 'POST',
//             url: 'upload_ajax.php',
//             data: formData,
//             cache: false,
//             contentType: false,
//             processData: false,
//             success: function(response){
//                 $('#status').html(response);
//             },
//             error: function(){
//                 $('#status').html('Terjadi kesalahan saat mengunggah file.');
//             }
//         });
//     });
// });

// JAWABAN SOAL NO 3.2 PRAKTIKUM 3
$(document).ready(function(){
    $('#upload-form').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});