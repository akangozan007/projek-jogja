<?php
include '../../config/koneksi.php'; // Ganti dengan path yang sesuai ke file koneksi database Anda

if (isset($_POST['simpanquiz'])) {
    // Cek apakah 'user_id' ada di session
    if (!isset($_SESSION['kode_user'])) {
        die('User ID belum diatur.');
    }

    $author_soal = $_SESSION['kode_user'];
    $pilihanjenissoal = $_POST['ceklis_pilihan'];

    // Mengambil input dari form
    $nama_quizz = $_POST['kelas_quiz'];
    $jumlah_soal = $_POST['jumlah_soal'];
    $kategori_soal = $_POST['kategori_quiz'];
    
    // Pastikan 'pertanyaan_pilgan' adalah array sebelum digunakan
    $pertanyaan_pilgan = isset($_POST['pertanyaan_pilgan']) && is_array($_POST['pertanyaan_pilgan']) ? $_POST['pertanyaan_pilgan'] : [];
    
    // Pastikan 'opsi' adalah array sebelum digunakan
    $opsi_pilgan = isset($_POST['opsi']) && is_array($_POST['opsi']) ? $_POST['opsi'] : [];
    $jawaban_pilgan = [];
    $jawaban_pilgan =  $_POST['textarea'];
    
    if (isset($pilihanjenissoal) && $pilihanjenissoal == 'pilihan-ganda') {
        // Iterasi soal
        // for ($a = 0; $a < $jumlah_soal; $a++) { // Changed condition to < instead of <=
      
        //     if (isset($pertanyaan_pilgan[$a])) {
        //         $soal = $pertanyaan_pilgan[$a];
        //         echo '<p class="text-danger">Soal ' . ($a + 1) . ': ' . htmlspecialchars($soal) . '</p>';
        //         echo '<p class="text-danger">List Pilihan Ganda :</p>';
        //         echo '<p class="text-danger" id="hasilnya">List Pilihan Ganda :</p>';
        //         return $soal[$a];
        //         // return $soal; 
        //         // mengambil data dari ajax js
        //         if (isset($_POST['textarea'])) {
        //             $pilihan = $_POST['textarea'];
        //             print_r($pilihan);
        //         }
        //         }else {
        //             echo '<p class="text-warning">Tidak ada pertanyaan yang dibuat.</p>';
        //         }
        //     }
        }
    } else if (isset($pilihanjenissoal) && $pilihanjenissoal == 'essay') {
        // Logika untuk soal essay di sini
        echo '<p class="text-success">Soal essay berhasil diterima.</p>';
    } else {
        echo '<p>Data tidak terinput</p>';
    }



?>

    <form action="" method="post">
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="ceklis_pilihan" class="form-check-input" id="pilgan" value="pilihan-ganda"> PILIHAN GANDA
                 </label>
             </div>
            <div class="form-check">
                 <label class="form-check-label">
                    <input type="checkbox" name="ceklis_pilihan" class="form-check-input" id="essay" value="essay"> ESSAY
                </label>
            </div>
            <!-- input jumlah soal -->
            <div class="form-check">
                <input type="number" name="sumInput" id="sumInput" placeholder="Jumlah Soal" class="form-control">
            </div>
            <!-- ./input jumlah soal -->
            <div class="form-check">
                <input type="file" class="form-control" name="sampul_quizz" id="inputGroupFile02">
            </div>
        </div>
    </div>
    <br><br>
    <div id="template" style="display:none;" class="card shadow-sm pilgan-soal"> 
        <div class="form-group container">
            <div class="container">
                <p class="nomorsoal"></p> 
                <textarea name="question[]" class="textareapg p-5" placeholder="Masukkan pertanyaan"></textarea>
                <br>
            </div>
            <div class="row">
            <!-- class="row " -->
                <div class="pilihanmu col-12 p-3 border border-danger">
                    <div class="option">
                        <label class="form-check-label">
                        <input type="checkbox" name="opsi[0][]" class="opsi form-check-input">
                        A
                        </label>
                        <textarea name="isipilihan[0][]" class="isipilihan textareajwb p-5" placeholder="Masukkan pilihan"></textarea>
                    </div>
                </div>
                <div class="col-md-4 col-12 tambah">
                    <p class="btn-like">+</p>
                </div>
            </div>
        </div>
    </div>

    <div id="listQ"></div>

     <!-- form essay -->
     <div class="form-check form-check-primary essay-soal" style="display: none;">
        <label class="form-check-label">
            <textarea name="pertanyaan_essay[]" id="" class="textareapg p-5"></textarea>
                    <!-- tombol submit -->
                    <div class="container m-5">
                        <div class="row">
                            <div class="col">
                                <button type="submit" name="tambahpilgan" id="tambahpilgan" class="btn btn-success">Tambah Soal</button>
                            </div>
                            <div class="col">
                                <button type="submit" name="hapussoalpilgan" id="hapuspilgan" class="btn btn-danger">Hapus Soal</button>
                            </div>
                        </div>
                    </div>
        </label>
     </div>
        <!-- ./form essay -->
    
    <p class="card-description">Form Waktu Sesi Quizz</p>
    
    <!-- form deadline pengerjaan -->
         <div class="cs-form">
            <input type="time" class="form-control" value="10:05 AM" />
        </div>
    <!-- ./form deadline pengerjaan -->
            <br><br>
        <div class="container" id="simpan-form">
             <button name="simpanquiz" type="submit" class="btn btn-primary" id="simpanquiz">Simpan Perubahan</button>
        </div>
    </form>
    
    
   
</body>
</html>

