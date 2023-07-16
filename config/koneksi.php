<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_mhs";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
// cek koneksi ke database
if ($koneksi) {
    // echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : " . mysqli_connect_error();
}
?>