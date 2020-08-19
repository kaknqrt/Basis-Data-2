<h1>
UPDATE DATA BERHASIL!
<hr>
<table>
<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$ttl=$_POST['ttl'];
$tgl=$_POST['tgl'];
$alamat=$_POST['alamat'];

$conn=mysqli_connect("localhost","root","","10118091_akademik");
$sql="UPDATE t_mahasiswa SET nama='$nama', ttl='$ttl', tgl_lahir='$tgl', alamat='$alamat' WHERE nim=$nim";
$hasil=mysqli_query($conn,$sql);

if ($hasil) {
    echo "<script type='text/javascript'>
    alert('Data telah diubah');
    window.location='Mahasiswa.php';
    </script>
    ";
}else{
    echo "<script type='text/javascript'>
    alert('Data gagal diubah');
    window.location='Mahasiswa.php';
    </script>
    ";
}

?>