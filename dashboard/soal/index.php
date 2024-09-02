<?php
    include 'header_soal.php';
    
?>



<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Laman Quizz </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
              
                </ol>
              </nav>
            </div>
           <!-- buat soal -->
            <?php 
            if($_GET['page']=='buat-soal'){
              include 'buat_soal.php';
            }else if($_GET['page']==''){
              include 'home_soal.php';
            }else if($_GET['page']=='test'){
              include 'test.php';
            }else{
              include '404.php';
            }
             ?>
            <!-- ./buat soal -->
          </div>
          <!-- content-wrapper ends -->
          <!-- partial: partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between fixed-bottom">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="https://www.bootstrapdash.com/" target="_blank">InterQuizz</a>. All rights reserved.</span>
              <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center"> <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php include 'footer_soal.php'; ?>
  </body>
</html>