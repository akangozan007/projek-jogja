<div class="row">
              <div class="col-md-10 col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pilih Tipe Soal</h4>
                    <p class="card-description">Pilih salah satu saja</p>
                    <p class="card-description">Soal soal</p>
                    <!-- form -->
                    <form action="" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name="ceklis_pilihan" class="form-check-input" id="pilgan" value="pilihan-ganda"> PILIHAN GANDA</label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name="ceklis_pilihan" class="form-check-input" id="essay" value="essay"> ESSAY </label>
                            </div>
                            <div class="form-check">
                              <input type="text" class="form-control" id="jumlah-soal" placeholder="Jumlah Soal" aria-label="Jumlah Soal" name="jumlah_soal" aria-describedby="basic-addon2">
                            </div>
                            <div class="form-check">
                                <input type="file" class="form-control" name="sampul_quizz" id="inputGroupFile02">
                                
                             </div><!-- <label class="input-group-text" for="inputGroupFile02">Upload Sampul</label> -->
                       
                          </div>
                        </div>
                        <div class="col-md-6">
                          <!-- input kategori -->
                          <div class="form-group">
                              <div class="form-check">
                                <h6> Kategori Quizz</h6>
                                    <input type="text" name="kategori_quiz" class="form-control" id="Kategori-quizz" placeholder="Kategori Quizz" aria-label="Kategori Quizz" aria-describedby="basic-addon2">
                              </div>
                          </div>
                          <!-- ./input kategori -->
                          <!-- input nama kelas -->
                          <div class="form-group">
                            <div class="form-check">
                              <h6> Nama Quizz</h6>
                                  <input type="text" name="kelas_quiz" class="form-control" id="Nama-quizz" placeholder="Nama Quizz" aria-label="Kelas Quizz" aria-describedby="basic-addon2">
                            </div>
                          </div>
                          <!-- ./input nama kelas -->

                      </div>
                    
                  </div>
                </div>
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
                                <textarea name="pertanyaan_quizz" id="" class="textareapg p-5"></textarea>
                                <br>
                                <h2 class="pb-2 border-bottom">List Pilihan Ganda</h2>
                                
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <!-- opsi A -->
                                    <div class="col hapus" id="col0">
                                        <div class="card shadow-sm">
                                            <div class="row">
                                                  <div class="col p-3">
                                                      <label class="form-check-label position-absolute top-0 start-0">
                                                          <input type="checkbox" name="options-0" class="form-check-input text-start" id="essay">
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
                              <!-- <textarea placeholder="Masukkan jawaban essay di sini"></textarea> -->
                              <textarea name="" id="" class="textareapg p-5"></textarea>
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
                      </form>
                  <!--./form  -->
                  <?php 
                    if(isset($_POST['simpanquiz'])){
                    
                      echo '<h1>Tombol submit simpan soal ditekan</h1>';
                      // proses insert data
                      $pilihanjenissoal = $_POST['ceklis_pilihan'];
                      // jika memilih pilihan ganda soal
                      if($pilihanjenissoal == 'pilihan-ganda'){
                        echo '<h1>jenis soal pilihan ganda </h1>';
                        // session_start();
                        $user = $_SESSION['username'];
                        $queryuser = "SELECT * FROM user WHERE username='$user' ";
                        $hasil = mysqli_query($koneksi, $queryuser);
                        $kolom = mysqli_fetch_assoc($hasil);
                        $_SESSION['kode_user'] = $kolom['user_id'];
  
  
                        // nama quizz, jumlah soal, kategori soal, author soal, 
                        // $nama_quizz = $_POST['kelas_quiz'];
                        // $jumlah_soal = $_POST['jumlah_soal'];
                        // $kategori_soal = $_POST['kategori_quiz'];
                        // $author_soal = $_SESSION['username'];
                        // ./nama quizz, jumlah soal, kategori soal, author soal, 
                        // debugging input output
                        // echo '<p>Nama Quizz         :'.$nama_quizz.' </p>';
                        // echo '<p>Jumlah Soal Quizz  :'.$jumlah_soal.' </p>';
                        // echo '<p>Kategori Quizz     :'.$kategori_soal.' </p>';
                        // echo '<p>Author Quizz       :'.$author_soal.' </p>';
                        // ./debugging input output
                      // mendeteksi berapa soal dan jumlah pilihan ganda
                      $nama_quizz = $_POST['kelas_quiz'];
                      $kategori_soal = $_POST['kategori_quiz'];
                      $author_soal = $_SESSION['user_id']; 

                      // Insert ke tabel kuis
                      $sql_quiz = "INSERT INTO kuis (title, description, creator_id, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
                      $stmt = $conn->prepare($sql_quiz);
                      $stmt->bind_param("sss", $nama_quizz, $kategori_soal, $author_soal);
                      $stmt->execute();

                      $quiz_id = $conn->insert_id; // Dapatkan ID kuis yang baru diinsert
                      
                      // insert tabel pertanyaan
                      $pertanyaan_quizz = $_POST['pertanyaan_quizz']; // Isi soal dari form
                      $question_type = 'pilihan-ganda'; // Misalkan tipe soal adalah pilihan ganda

                      $sql_question = "INSERT INTO pertanyaan (quiz_id, question_text, question_type, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
                      $stmt = $conn->prepare($sql_question);
                      $stmt->bind_param("iss", $quiz_id, $pertanyaan_quizz, $question_type);
                      $stmt->execute();

                      $question_id = $conn->insert_id; // Dapatkan ID pertanyaan yang baru diinsert
                      
                      $jumlah_opsi = 1; // Contoh jumlah opsi jawaban
                      for ($i = 0; $i < $jumlah_opsi; $i++) {
                          $option_text = $_POST['textarea-' . $i]; // Dapatkan teks dari setiap textarea
                          $is_correct = isset($_POST['options-' . $i]) ? 1 : 0; // Cek apakah opsi ini adalah jawaban benar

                          $sql_option = "INSERT INTO options (question_id, option_text, is_correct) VALUES (?, ?, ?)";
                          $stmt = $conn->prepare($sql_option);
                          $stmt->bind_param("isi", $question_id, $option_text, $is_correct);
                          $stmt->execute();

                          $option_id = $conn->insert_id; // Dapatkan ID opsi yang baru diinsert

                          // Jika opsi ini adalah jawaban benar, tambahkan ke tabel jawaban_benar
                          if ($is_correct) {
                              $sql_correct_answer = "INSERT INTO jawaban_benar (question_id, option_id) VALUES (?, ?)";
                              $stmt = $conn->prepare($sql_correct_answer);
                              $stmt->bind_param("ii", $question_id, $option_id);
                              $stmt->execute();
                          }
                      }

                      // Commit transaksi jika semua berjalan dengan baik
                      $conn->commit();

                      // Jika terjadi error, rollback transaksi
                      $conn->rollback();



                      }else if($pilihanjenissoal == 'essay'){
                        echo '<h1>jenis soal essay </h1>';
                      }
                      
                    }else{
                      echo '<h1>belum melakukan perubahan apapun</h1>';
                    }
                  ?>
               </div>
            </div>
            </div>