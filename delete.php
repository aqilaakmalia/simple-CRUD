<?php
include 'config/koneksi.php';

$id= $_GET['id'];
$sql = "DELETE from siswa WHERE id=$id" ;
 
if (mysqli_query($conn, $sql)) {
    header ("location:tabel/index.php");
} else {
    echo "Gagal, Error : " . mysqli_error($conn);
}
 
mysqli_close($conn);
 
?>

