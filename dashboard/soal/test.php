

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rekam Semua Value Checkbox</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<!-- Contoh elemen checkbox, yang bisa bertambah secara dinamis -->
<div class="col p-3">
    <label class="form-check-label position-absolute top-0 start-0">
        <input type="checkbox" name="opsi[]" class="form-check-input text-start" id="essay opsi-abc-1" value="A">
        <i class="input-helper pe-2"></i>
        A
    </label>
</div>

<div class="col p-3">
    <label class="form-check-label position-absolute top-0 start-0">
        <input type="checkbox" name="opsi[]" class="form-check-input text-start" id="essay opsi-abc-2" value="B">
        <i class="input-helper pe-2"></i>
        B
    </label>
</div>

<div class="col p-3">
    <label class="form-check-label position-absolute top-0 start-0">
        <input type="checkbox" name="opsi[]" class="form-check-input text-start" id="essay opsi-abc-3" value="C">
        <i class="input-helper pe-2"></i>
        C
    </label>
</div>

<div id="saved-values"></div> <!-- Tempat untuk menampilkan value yang disimpan -->

<script>
$(document).ready(function() {
    // Event listener untuk mendeteksi perubahan pada checkbox
    $('.form-check-input').on('change', function() {
        // Array untuk menyimpan semua checkbox
        let allValues = [];

        // Iterasi semua checkbox dengan class form-check-input
        $('.form-check-input').each(function() {
            // Menangkap nilai dan status checkbox (checked atau tidak)
            allValues.push({
                id: $(this).attr('id'),
                value: $(this).val(),
                checked: $(this).is(':checked')
            });
        });

        // Menampilkan hasil di halaman
        $('#saved-values').html(JSON.stringify(allValues, null, 2));
    });

    // Initial load untuk menampilkan status awal semua checkbox
    $('.form-check-input').trigger('change');
});
</script>

</body>
<?php
 include 'footer_soal.php';
?>
</html>
