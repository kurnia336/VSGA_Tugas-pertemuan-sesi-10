<?php

include('../config/koneksi.php');

$id = $_GET['id_mhs'];

$query = "SELECT * FROM mahasiswa WHERE id_mhs = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Mahasiswa</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT MAHASISWA
                    </div>
                    <div class="card-body">
                        <form action="edit_mhs_proses.php" method="POST">

                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" name="nim" value="<?php echo $row['nim'] ?>"
                                    placeholder="Masukkan NIM Mahasiswa" class="form-control">
                                <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" value="<?php echo $row['nama'] ?>"
                                    placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="jenis_kelamin" value="L" <?php echo $row['jenis_kelamin'] == 'L' ? "checked" : ""; ?> class="form-check-input">
                                    <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="jenis_kelamin" value="P" <?php echo $row['jenis_kelamin'] == 'P' ? "checked" : ""; ?> class="form-check-input">
                                    <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="jurusan" id="">
                                    <option value="TEKNIK INFORMATIKA" <?php if ($row['jurusan'] == 'TEKNIK INFORMATIKA') { ?> selected="selected" <?php } ?>>TEKNIK INFORMATIKA</option>
                                    <option value="TEKNIK MESIN" <?php if ($row['jurusan'] == 'TEKNIK MESIN') { ?>
                                        selected="selected" <?php } ?>>TEKNIK MESIN</option>
                                    <option value="TEKNIK KIMIA" <?php if ($row['jurusan'] == 'TEKNIK KIMIA') { ?>
                                        selected="selected" <?php } ?>>TEKNIK KIMIA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Mahasiswa"
                                    rows="4"><?php echo $row['alamat'] ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>