<?php

//include koneksi database
include('../config/koneksi.php');

//get data dari form
$id_mhs = $_POST['id_mhs'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jenis_kelamin = '$jenis_kelamin', jurusan = '$jurusan',  alamat = '$alamat' WHERE id_mhs = '$id_mhs'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    //redirect ke halaman index.php
    header("location: ../index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>