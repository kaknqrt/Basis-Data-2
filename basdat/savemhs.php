<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$ttl=$_POST['ttl'];
$tgl=$_POST['tgl'];
$alamat=$_POST['alamat'];

$conn=mysqli_connect("localhost","root","","10118091_akademik");
$sql="INSERT Into t_mahasiswa values('$nim','$nama','$ttl','$tgl','$alamat')";
$hasil=mysqli_query($conn,$sql);

if ($hasil) {
    echo "<script type='text/javascript'>
    alert('Data telah tersimpan');
    window.location='Mahasiswa.php';
    </script>
    ";
}else{
    echo "<script type='text/javascript'>
    alert('Data gagal tersimpan');
    window.location='Mahasiswa.php';
    </script>
    ";
}
?>