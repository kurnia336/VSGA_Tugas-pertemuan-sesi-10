<?php
//include koneksi database
include('../config/koneksi.php');

//get data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, jurusan, alamat) VALUES ('$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($koneksi->query($query)) {

    //redirect ke halaman index.php
    header("location: ../index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>