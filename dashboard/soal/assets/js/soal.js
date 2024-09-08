

    // opsi tuk memilih jenis soal
function toggleForm(idToShow) {
    $("#essay-soal, .pilgan-soal").hide();
    $("#essay, #pilgan").prop('checked', false);
    if (idToShow) {
        $("#" + idToShow).prop('checked', true);
        $("#" + idToShow + "-soal").show();
    }
}

$("#essay").on("change", function() {
    toggleForm($(this).is(":checked") ? "essay" : null);
    return essay();
});

$("#pilgan").on("change", function() {
    toggleForm($(this).is(":checked") ? "pilgan" : null);
    return pilgan();
});

// operasi pilgan 
function pilgan() {
    $("#sumInput").keyup(function(){
        let sumInput = $(this).val();  // Mengambil nilai dari input
        $("#listQ").html(''); // Menghapus konten lama setiap kali input berubah
        // $("#pilgan-form").html('');
    
        if ($.isNumeric(sumInput) && sumInput > 0) {
            for (let index = 0; index < sumInput; index++) {
                
                let newQuestion = $("#template").clone().removeAttr('id').show();
    
                // Set nomor soal dan name attribute yang unik
                // newQuestion.find('.nomorsoal').text('Soal ' + (index + 1));
                // index+=1;
                newQuestion.find('.nomorsoal').text('Soal ' + (index+1));
                newQuestion.find('textarea[name="question[]"]').attr('name', `question[${index}]`);
                newQuestion.find('.pilihanmu .option .opsi').attr('name', `opsi[${index}][]`);
                newQuestion.find('.pilihanmu .option .isipilihan').attr('name', `isipilihan[${index}][]`);
    
                // Tambahkan event listener untuk tombol tambah opsi di dalam soal
                newQuestion.find('.tambah').on('click', function() {
                    addOption(newQuestion, index);
                });
    
                // Tambahkan soal baru ke dalam listQ
                $("#listQ").append(newQuestion);
            }
        }
    });
    
    // Fungsi untuk menambahkan opsi baru
    function addOption(questionElement, questionIndex) {
        let optionCount = questionElement.find('.pilihanmu .option').length + 1;
        // var style = "textareajwb p-5 col";
    
        let newOption = `
            <div class="option">
             <label class="form-check-label">
                <input type="checkbox" name="opsi[${questionIndex}][]" class="opsi form-check-input">
                ${optionCount}    
            </label>
                <textarea name="isipilihan[${questionIndex}][]" class="isipilihan textareajwb p-5 col" placeholder="Masukkan pilihan ${optionCount}"></textarea>
                <button type="button" class="hapus btn btn-danger btn">Hapus Opsi</button>
            </div>
        `;
    
        // Tambahkan opsi ke dalam pilihanmu
        questionElement.find('.pilihanmu').append(newOption);
    
        // Event listener untuk menghapus opsi
        questionElement.find('.hapus').last().on('click', function() {
            $(this).parent('.option').remove();
        });
    }    
}


  
function essay(){
    $(".essay-soal").toggle();
}