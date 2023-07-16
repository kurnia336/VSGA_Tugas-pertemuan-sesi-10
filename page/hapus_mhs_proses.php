<?php

include('../config/koneksi.php');

//get id
$id_mhs = $_GET['id_mhs'];

$query = "DELETE FROM mahasiswa WHERE id_mhs = '$id_mhs'";

if($koneksi->query($query)) {
    header("location: ../index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>