<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$no = 0;
$sql = "SELECT * FROM siswa  WHERE id=".$id ;
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
		$nama = $row['nama'];
		$jurusan = $row['jurusan'];
		$nrp = $row['nrp'];
		$kelas= $row['kelas'];
		$jenis_kelamin = $row['jenis_kelamin'];
		$tgl_lahir = $row['tgl_lahir'];
		$agama = $row['agama'];
		$alamat = $row['alamat'];
		$no_hp = $row['no_hp'];
		$email = $row['email'];
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<tbody>
							<h1><b>DATA MAHASISWA</b></h1>
							<a href="../form/index.php" title="Tambah Data"> Tambah Data</a>
							<br>
							<tr>
								<td class="column 1">No</td>
								<td><?php echo $no=$no+1?><td>
							</tr>
							<tr>
								<td>Nama</td>
								<td><?php echo $nama?><td>
							</tr>
							<tr>
								<td>Jurusan</td>
								<td><?php echo $jurusan?><td>
							</tr>
							<tr>
								<td>NRP</td>
								<td><?php echo $nrp?><td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td><?php echo $kelas?><td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td><?php echo $jenis_kelamin?><td>
							</tr>
							<tr>
								<td>Tempat Tanggal Lahir</td>
								<td><?php echo $tgl_lahir?><td>
							</tr>
							<tr>
								<td>Agama</td>
								<td><?php echo $agama?><td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><?php echo $alamat?><td>
							</tr>
							<tr>
								<td>No. Hp</td>
								<td><?php echo $no_hp?><td>
							</tr>
							<tr>
								<td>Email</td>
								<td><?php echo $email?><td>
							</tr>
			
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>