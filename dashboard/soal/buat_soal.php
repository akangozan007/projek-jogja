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
        for ($a = 0; $a < $jumlah_soal; $a++) { // Changed condition to < instead of <=
      
            if (isset($pertanyaan_pilgan[$a])) {
                $soal = $pertanyaan_pilgan[$a];
                echo '<p class="text-danger">Soal ' . ($a + 1) . ': ' . htmlspecialchars($soal) . '</p>';
                echo '<p class="text-danger">List Pilihan Ganda :</p>';
                echo '<p class="text-danger" id="hasilnya">List Pilihan Ganda :</p>';
                return $soal[$a];
                // return $soal; 
                // mengambil data dari ajax js
                if (isset($_POST['textarea'])) {
                    $pilihan = $_POST['textarea'];
                    print_r($pilihan);
                }
                }else {
                    echo '<p class="text-warning">Tidak ada pertanyaan yang dibuat.</p>';
                }
            }
        }
    } else if (isset($pilihanjenissoal) && $pilihanjenissoal == 'essay') {
        // Logika untuk soal essay di sini
        echo '<p class="text-success">Soal essay berhasil diterima.</p>';
    } else {
        echo '<p>Data tidak terinput</p>';
    }



?>


<div class="row">
    <div class="col-md-10 col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pilih Tipe Soal</h4>
                <p class="card-description">Pilih salah satu saja</p>
                <p class="card-description">Soal soal</p>
                <!-- form -->
                <form action="" method="post" enctype="multipart/form-data" id="buat-soal-soal">
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
                                    <input type="text" class="form-control" id="jumlah-soal" placeholder="Jumlah Soal" aria-label="Jumlah Soal" name="jumlah_soal" aria-describedby="basic-addon2">
                                </div>
                                <!-- ./input jumlah soal -->
                                <div class="form-check">
                                    <input type="file" class="form-control" name="sampul_quizz" id="inputGroupFile02">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- input kategori -->
                            <div class="form-group">
                                <div class="form-check">
                                    <h6>Kategori Quizz</h6>
                                    <input type="text" name="kategori_quiz" class="form-control" id="Kategori-quizz" placeholder="Kategori Quizz" aria-label="Kategori Quizz" aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <!-- ./input kategori -->
                            <!-- input nama kelas -->
                            <div class="form-group">
                                <div class="form-check">
                                    <h6>Nama Quizz</h6>
                                    <input type="text" name="kelas_quiz" class="form-control" id="Nama-quizz" placeholder="Nama Quizz" aria-label="Kelas Quizz" aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <!-- ./input nama kelas -->
                        </div>
                    </div>
                    <!-- list buat soal dan jawaban -->
                    <div class="row">
                        <div class="col-md-10 col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-description">Soal</p>
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <!-- pilihan ganda -->
                                            <div class="form-check form-check-primary" id="pilgan-form" style="display: none;">
                                                <h2 class="pb-2 border-bottom">Soal</h2>
                                                <textarea name="pertanyaan_pilgan[]" id="" class="textareapg p-5"></textarea>
                                                <br>
                                                <h2 class="pb-2 border-bottom">List Pilihan Ganda</h2>
                                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                    <!-- opsi A -->
                                                    <div class="col hapus" id="col0">
                                                        <div class="card shadow-sm">
                                                            <div class="row">
                                                                <div class="col p-3">
                                                                    <label class="form-check-label position-absolute top-0 start-0">
                                                                        <input type="checkbox" name="opsi[]" class="form-check-input text-start" id="essay opsi-abc" value="A">
                                                                        <i class="input-helper pe-2"></i>
                                                                        A
                                                                    </label>
                                                                </div>
                                                                <div class="col p-3">
                                                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0">Close</button>
                                                                </div>
                                                            </div>
                                                            <textarea name="textarea[]" id="textarea-0" class="textareajwb p-5" placeholder="Jawaban A"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- ./opsi A -->
                                                    <!-- opsi Tambah -->
                                                    <div class="col" id="customButton">
                                                        <div class="container justify-content-center">
                                                            <p class="btn-like">+</p>
                                                        </div>
                                                    </div>
                                                    <!-- ./opsi Tambah -->
                                                </div>
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
                                            </div>
                                            <!-- form essay -->
                                            <div class="form-check form-check-primary" id="essay-form" style="display: none;">
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
                                        </div>
                                    </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- ./form -->
            </div>
        </div>
    </div>
</div>
