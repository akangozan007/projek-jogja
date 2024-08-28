<?php
$servername = "localhost";
$database = "interquizz_db"; // Hapus spasi sebelum nama database
$username = "root";
$password = "root";

$koneksi = mysqli_connect($servername, $username, $password, $database);
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
    // die('Gagal terkoneksi: ' . mysqli_connect_error());
} else {
    // echo 'Berhasil terkoneksi';
}
?>
