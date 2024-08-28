<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../login/index.php");
  exit(); 
}
include '../config/header.php';
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          
          <!-- sambutan panel -->
              <div class="row">
         
              <!-- <div class="col-md-6 col-xl-4 grid-margin stretch-card"> -->
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Portfolio Slide</h4> -->
                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                      <div class="item">
                        <img src="assets/images/dashboard/Rectangle.jpg" class="w-50 mx-auto d-block" alt="">
                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/Img_5.jpg" class="w-50 mx-auto d-block" alt="">
                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/img_6.jpg" class="w-50 mx-auto d-block" alt="">
                      </div>
                    </div>


                  </div>
                </div>
              </div>
          
            </div>

            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Aktifitas Terakhir</h4>
                    <div class="position-relative">
                      <div class="daoughnutchart-wrapper">
                        <canvas id="transaction-history" class="transaction-chart"></canvas>
                      </div>
                      <div class="custom-value">C++ Basic<span></span>
                      </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Judul Quizz : C++ Basic</h6>
                        <p class="text-muted mb-0">Terjawab : </p><p class="text-muted mb-0">10/20</p>
                      </div>
                      <!-- <div class="align-self-center flex-grow text-end text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">$236</h6>
                      </div> -->
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Author : </h6>
                        <p class="text-muted mb-0">Tergabung pada : hari, tanggal dan bulan tahun</p>
                      </div>
                      <!-- <div class="align-self-center flex-grow text-end text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">$593</h6>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Quizz Anda</h4>
                      <p class="text-muted mb-1">Your data status</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Admin QUIZZ</h6>
                                <p class="text-muted mb-0">Broadcast web app mockup</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <?php
                                echo date("H:i:s"); // Format jam:menit:detik
                                       ?>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">QUIZZ KIMIA & FISIKA</h6>
                                <p class="text-muted mb-0">Broadcast web app mockup</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <?php
                                echo date("H:i:s"); // Format jam:menit:detik
                                       ?>
                              </div>
                            </div>
                          </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid">
            <div class="card">
                <div class="card-header d-block justify-content-between">
                      <h1 class="card-title mb-1">Quizz Diikuti</h1>
                  <div class="card-body">
                  <p class="text-muted mb-1 display-3 text-end">List Quiz</p>
                  </div>
                </div>
                </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Revenue</h5>
                    
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$32123</h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Sales</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$45850</h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Purchase</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$2039</h2>
                          <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                        </div>
                        <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Status Pengguna</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" id="check-all">
                                </label>
                              </div>
                            </th>
                            <th> Name </th>
                            <th> Order No </th>
                            <th> Tanggal Lahir </th>
                            <th> Tempat tinggal </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face1.jpg" alt="image" />
                              <span class="ps-2">ICHA</span>
                            </td>
                            <td> 1 </td>
                            <td> CIREBON </td>
                            <td> 11 - 01 - 2003 </td>
                            <td>
                              <div class="badge badge-outline-success">Approved</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face2.jpg" alt="image" />
                              <span class="ps-2">Estella Bryan</span>
                            </td>
                            <td> 2 </td>
                            <td> CILEGON </td>
                            <td> 15 - 01 - 2000 </td>
                            <td>
                              <div class="badge badge-outline-warning">Pending</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face5.jpg" alt="image" />
                              <span class="ps-2">Lucy Abbott</span>
                            </td>
                            <td> 3 </td>
                            <td> JAKARTA </td>
                            <td> 01 - 02 - 1999 </td>
                            <td>
                              <div class="badge badge-outline-danger">Rejected</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face3.jpg" alt="image" />
                              <span class="ps-2">Peter Gill</span>
                            </td>
                            <td> 4 </td>
                            <td> SAMARINDA </td>
                            <td> 20 - 01 - 1989 </td>
                            <td>
                              <div class="badge badge-outline-success">SUKSES</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face4.jpg" alt="image" />
                              <span class="ps-2">SallIM</span>
                            </td>
                            <td> 5 </td>
                            <td> Bandung </td>
                            <td> 15 - 04 - 2000 </td>
                            <td>
                              <div class="badge badge-outline-success">SUKSES</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PETA DUNIA</h4>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-indonesia"></i>
                                </td>
                                <td>INDONESIA</td>
                                <td class="text-end"> 1500 </td>
                                <td class="text-end font-weight-medium"> 56.35% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-de"></i>
                                </td>
                                <td>Germany</td>
                                <td class="text-end"> 800 </td>
                                <td class="text-end font-weight-medium"> 33.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-au"></i>
                                </td>
                                <td>Australia</td>
                                <td class="text-end"> 760 </td>
                                <td class="text-end font-weight-medium"> 15.45% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-gb"></i>
                                </td>
                                <td>United Kingdom</td>
                                <td class="text-end"> 450 </td>
                                <td class="text-end font-weight-medium"> 25.00% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-ro"></i>
                                </td>
                                <td>Romania</td>
                                <td class="text-end"> 620 </td>
                                <td class="text-end font-weight-medium"> 10.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-br"></i>
                                </td>
                                <td>Brasil</td>
                                <td class="text-end"> 230 </td>
                                <td class="text-end font-weight-medium"> 75.00% </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="#" target="_blank">interquizz</a>. All rights reserved.</span>
              <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center"> <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </body>
  <?php
  include '../config/footer.php';
  ?>
</html>