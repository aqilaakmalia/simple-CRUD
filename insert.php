<?php
include 'config/koneksi.php';

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$nrp = $_POST['nrp'];
$kelas= $_POST['kelas'];
$jenis_kelamin = $_POST['jk'];
$tgl_lahir = $_POST['ttl'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

$sql = "INSERT INTO siswa(nama, jurusan, nrp, kelas, jenis_kelamin, tgl_lahir, agama, alamat, no_hp, email) VALUES ('$nama', '$jurusan', '$nrp', '$kelas', '$jenis_kelamin', '$tgl_lahir', '$agama', '$alamat', '$no_hp', '$email')";
 
if (mysqli_query($conn, $sql)) {
    header ("location:tabel/index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>
