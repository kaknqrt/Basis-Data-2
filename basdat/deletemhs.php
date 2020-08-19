<?php 

    $var_nim=$_GET['nim'];
    $conn = mysqli_connect("localhost", "root", "", "10118091_akademik");
    $sql = "DELETE FROM t_mahasiswa where nim='$var_nim'";
    $eksekusi = mysqli_query($conn, $sql);

    if ($eksekusi) {
        echo "<script type='text/javascript'>
        alert('Data telah dihapus');
        window.location='Mahasiswa.php';
        </script>
        ";
    }else{
        echo "<script type='text/javascript'>
        alert('Data gagal dihapus');
        window.location='Mahasiswa.php';
        </script>
        ";
    }

?>