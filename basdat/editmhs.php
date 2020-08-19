<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <title>EDIT MAHASISWA</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Edit data</h1>

                <form id="kirimdata" action="prosesedit.php" method=post>

                    <?php 
                    $var_nim=$_GET['nim'];
                    $conn = mysqli_connect("localhost", "root", "", "10118091_akademik");
                    $sql = "SELECT * FROM t_mahasiswa where nim='$var_nim'";
                    $hasil = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($hasil)) {
                        $nim = $data['nim'];
                        $nama = $data['nama'];
                        $tempat = $data['ttl'];
                        $ttl = $data['tgl_lahir'];
                        $alamat = $data['alamat'];
                    }
                    ?>
                    <div class="form-group">
                        <label for="exampleInputNama">Nim</label>
                        <input type="text" name="nim" class="form-control" name="nim" value="<?php echo $nim ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Tempat Lahir</label>
                        <input type="text" class="form-control" name="ttl" value="<?php echo $tempat ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl" value="<?php echo $ttl ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>">
                    </div>

                    <tr>
                        <button type="submit" class="btn btn-primary btn-block">Save</button></a></tr>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery-3.5.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

</body>

</html>