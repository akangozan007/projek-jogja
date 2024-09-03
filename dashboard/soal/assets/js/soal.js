// opsi tuk memilih jenis soal
function toggleForm(idToShow) {
    $("#essay-form, #pilgan-form").hide();
    $("#essay, #pilgan").prop('checked', false);
    if (idToShow) {
        $("#" + idToShow).prop('checked', true);
        $("#" + idToShow + "-form").show();
    }
}

$("#essay").on("change", function() {
    toggleForm($(this).is(":checked") ? "essay" : null);
});

$("#pilgan").on("change", function() {
    toggleForm($(this).is(":checked") ? "pilgan" : null);
});

let counter = 1;
/* <input type="checkbox" name="ceklis_pilihan" id="pilgan" value="pilihan-ganda"></input> */
// <input type="checkbox"  id="${optionId}" name="${optionId}"/>
// Event delegation untuk menambahkan elemen baru saat tombol "+" diklik
document.addEventListener('click', function(event) {
    const target = event.target.closest('[id^="customButton"]');
    if (target) {
        const opsi_opsi = 'col' + counter; 
        const optionId = 'option-' + counter;
        const textareaId = 'textarea-' + counter;
        const newOption = `
            <div class="col hapus" id='${opsi_opsi}'>
                <div class="card shadow-sm">
                    <div class="row">
                        <div class="col p-3">
                            <label class="form-check-label position-absolute top-0 start-0" for="${optionId}">
                                
                                <input type="checkbox" class="form-check-input" id="${optionId}" name="opsi[]" value="${String.fromCharCode(64 + counter)}">
                               <i class="input-helper pe-2"></i>
                                ${String.fromCharCode(64 + counter)}
                            </label>
                        </div>
                        <div class="col p-3">
                            <button type="button" class="btn btn-danger position-absolute top-0 end-0">Close</button>
                        </div>
                    </div>
                    <textarea name="textarea[]" id="${textareaId}" class="textareajwb p-5" placeholder="Jawaban ${String.fromCharCode(64 + counter)}"></textarea>  
                </div>
            </div>
        `;
        const container = target.closest('.row.row-cols-1.row-cols-sm-2.row-cols-md-3.g-3');
        
        // Ubah ID customButton sebelum menambahkannya kembali ke DOM
        const customButton = target;
        customButton.id = 'customButton-' + counter;
        
        // Tambahkan elemen baru sebelum customButton
        container.insertAdjacentHTML('beforeend', newOption);
        
        // Tambahkan kembali customButton di akhir container
        container.appendChild(customButton);
        
        counter++;
    }
});

// Event listener untuk menghapus elemen saat tombol "Close" diklik
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('btn-danger')) {
        event.preventDefault();
        event.stopPropagation();
        const colElement = event.target.closest('.hapus.col');
        if (colElement) {
            colElement.parentNode.removeChild(colElement);
            counter--;
        }
    }
});

// value jumlah soal
$('#jumlah-soal').on('input', function() {
    let jumlahSoal = $(this).val();
    let pilganForm = $('#pilgan-form');
    let essayForm = $('#essay-form');
    $('.duplicate').remove();

    if (jumlahSoal > 1) {
        for (let i = 2; i <= jumlahSoal; i++) {
            let a=0;
            if (pilganForm.is(':visible')) {
                let clonedPilganForm = pilganForm.clone().attr('id', 'pilgan-form-' + i).addClass('duplicate');
                pilganForm.after(clonedPilganForm);
            } else if (essayForm.is(':visible')) {
                let clonedEssayForm = essayForm.clone().attr('id', 'essay-form-' + i).addClass('duplicate');
                essayForm.after(clonedEssayForm);
            }
            a+=1;
        }
    }
});



