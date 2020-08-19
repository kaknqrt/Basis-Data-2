<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">

  <title>PMB</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">tempat lahir</th>
            <th scope="col">tanggal lahir</th>
            <th scope="col">alamat</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $conn = mysqli_connect("localhost", "root", "", "10118091_akademik");
          $sql = "SELECT * FROM t_mahasiswa";
          $hasil = mysqli_query($conn, $sql);
          $no = 0;
          while ($data = mysqli_fetch_array($hasil)) {
            $nim = $data['nim'];
            $nama = $data['nama'];
            $tempat = $data['ttl'];
            $ttl = $data['tgl_lahir'];
            $alamat = $data['alamat'];
          ?>
            <tr>
              <td><?php echo "$no" + 1 ?></td>
              <td><?php echo "$nim" ?></td>
              <td><?php echo "$nama" ?></td>
              <td><?php echo "$tempat" ?></td>
              <td><?php echo "$ttl" ?></td>
              <td><?php echo "$alamat" ?></td>
              <td><a href="editmhs.php?nim=<?php echo "$nim" ?>" class="btn btn-primary btn-block">Edit</button></a> <a href="deletemhs.php?nim=<?php echo "$nim" ?>" class="btn btn-danger btn-block">Hapus</button></a></td>
            </tr>
          <?php $no++;
          } ?>

        </tbody>
      </table>

      <a href="inputmhs.html">
          <button type="submit" class="btn btn-primary btn-block">Tambah</button></a>
    </div>
  </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="asset/js/jquery-3.5.1.slim.min.js"></script>
  <script src="asset/js/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>

  </script>
</body>

</html>