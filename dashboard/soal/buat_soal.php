<?php
// session_start();

// Pastikan koneksi ke database sudah ada
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
    $pertanyaan_pilgan = $_POST['pertanyaan_pilgan']; // Pertanyaan disimpan sebagai array
    $opsi_pilgan = $_POST['opsi'];
  
    if (isset($pilihanjenissoal) && $pilihanjenissoal == 'pilihan-ganda') {
        // iterasi soal
        for ($a = 0; $a < $jumlah_soal; $a++) {
            if (isset($pertanyaan_pilgan[$a])) {
                $soal = $pertanyaan_pilgan[$a];
                echo '<p class="text-danger">Soal ' . ($a + 1) . ': ' . $soal . '<p>';
                echo '<p class="text-danger">List Pilihan Ganda : </p>';
                
          }
            //  // Debugging: Tampilkan isi array pertanyaan_quizz
            //     echo '<pre>';
            //     print_r($pertanyaan_pilgan);
            //     echo '</pre>';

        }
    } elseif (isset($pilihanjenissoal) && $pilihanjenissoal == 'essay') {
        // Logika untuk soal essay di sini
    }else{
        echo '<p>data tidak terinput</p>';
    }
    // Sisanya tetap sama seperti sebelumnya

    // // Menggunakan transaksi untuk memastikan konsistensi data
    // $conn->begin_transaction();

    // try {
    //     // Insert ke tabel kuis
    //     $sql_quiz = "INSERT INTO kuis (title, description, creator_id, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
    //     $stmt = $conn->prepare($sql_quiz);
    //     $stmt->bind_param("sss", $nama_quizz, $kategori_soal, $author_soal);
    //     $stmt->execute();
        
    //     $quiz_id = $conn->insert_id; // Dapatkan ID kuis yang baru diinsert
        
    //     // Insert ke tabel pertanyaan
    //     $question_type = 'pilihan-ganda'; // Misalkan tipe soal adalah pilihan ganda
        
    //     $sql_question = "INSERT INTO pertanyaan (quiz_id, question_text, question_type, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
    //     $stmt = $conn->prepare($sql_question);
    //     $stmt->bind_param("iss", $quiz_id, $pertanyaan_quizz, $question_type);
    //     $stmt->execute();
        
    //     $question_id = $conn->insert_id; // Dapatkan ID pertanyaan yang baru diinsert
        
    //     // Mengambil opsi jawaban
    //     $jumlah_opsi = 1; // Atur sesuai jumlah opsi yang Anda punya
    //     for ($i = 0; $i < $jumlah_opsi; $i++) {
    //         if (isset($_POST['textarea-' . $i])) {
    //             $option_text = $_POST['textarea-' . $i];
    //             $is_correct = isset($_POST['options-' . $i]) ? 1 : 0;
                
    //             $sql_option = "INSERT INTO options (question_id, option_text, is_correct) VALUES (?, ?, ?)";
    //             $stmt = $conn->prepare($sql_option);
    //             $stmt->bind_param("isi", $question_id, $option_text, $is_correct);
    //             $stmt->execute();
                
    //             $option_id = $conn->insert_id; // Dapatkan ID opsi yang baru diinsert
                
    //             if ($is_correct) {
    //                 $sql_correct_answer = "INSERT INTO jawaban_benar (question_id, option_id) VALUES (?, ?)";
    //                 $stmt = $conn->prepare($sql_correct_answer);
    //                 $stmt->bind_param("ii", $question_id, $option_id);
    //                 $stmt->execute();
    //             }
    //         }
    //     }

    //     // Commit transaksi
    //     $conn->commit();
        
    //     echo '<h1>Data berhasil disimpan.</h1>';

    // } catch (Exception $e) {
    //     // Rollback transaksi jika terjadi error
    //     $conn->rollback();
    //     echo 'Terjadi kesalahan: ' . $e->getMessage();
    // }
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
                <form action="" method="post" enctype="multipart/form-data">
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
                                                                        <input type="checkbox" name="opsi[]" class="form-check-input text-start" id="essay" value="A">
                                                                        <i class="input-helper pe-2"></i>
                                                                        A
                                                                    </label>
                                                                </div>
                                                                <div class="col p-3">
                                                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0">Close</button>
                                                                </div>
                                                            </div>
                                                            <textarea name="textarea-0" id="" class="textareajwb p-5" placeholder="Jawaban A"></textarea>
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
                                        <button name="simpanquiz" class="btn btn-primary">Simpan Perubahan</button>
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
