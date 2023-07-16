<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Mahasiswa</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH MAHASISWA
                    </div>
                    <div class="card-body">
                        <form action="tambah_mhs_proses.php" method="POST">

                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" name="nim" placeholder="Masukkan NIM Mahasiswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="jenis_kelamin" value="L" class="form-check-input">
                                    <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="jenis_kelamin" value="P" class="form-check-input">
                                    <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="jurusan" id="">
                                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                    <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                                    <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Mahasiswa "
                                    rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
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