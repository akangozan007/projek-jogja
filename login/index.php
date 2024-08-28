<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../config/koneksi.php';

 
// if (isset($_SESSION['username'])) {
//     header("Location: ../dashboard/index.php");
//     exit();
// }
 
if (isset($_POST['submit'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password']; // Hash the input password using SHA-256
    
    $hashed_password = hash('sha256', $password);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$hashed_password'";
    $result = mysqli_query($koneksi, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
        $_SESSION['kode_user'] = $row['user_id'];
      
        $_SESSION['login'] = true;
        header("Location: ../dashboard/index.php");
        exit();
    } else {
        echo "<script>alert('username atau password Anda salah. Silakan coba lagi!')</script>";
    }
}

 
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>InterQuizz - Login</title>
    <!-- Favicons -->
    <link href="../assets/img/logointerquizz.png" rel="icon">
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        /* Custom styles here */
    </style>
    <!-- Main CSS File -->
    <link href="../assets/vendor/bootstrap/css/login.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4">
    <!-- header -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">InterQuizz</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
    <!-- ./header -->
    <!-- body -->
    <main class="form-signin w-100 m-auto accent-background">
        <section class="">
            <div class="container-fluid">
                <!-- form login -->
                <form method="POST" action="">
                    <img class="mb-4 mx-auto d-block" src="../assets/img/logointerquizz.png" alt="" width="112" height="97">
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control text-subtle" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput" class="text-danger">Username</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control text-subtle" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword" class="text-danger">Password</label>
                    </div>
                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" name="submit" type="submit">Login</button>
                    <p class="mt-5 mb-3 text-body-light">Kamelia Khoirunnisa &copy; 2024-2025</p>
              
                </form>
                <!-- ./form login -->
            </div>
        </section>
    </main>
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>
</html>
