<?php

include ('koneksi.php');


	$nik 			= $_POST['nik'];
	$nama 			= $_POST['nama'];
	$jk 			= $_POST['jk'];
	$tanggal lahir  = $_POST['tanggal lahir'];

	$sql = "UPDATE PENDUDUK SET nama = '$nama', jk = '$jk',  WHERE nik = '$nik' ";
	
	if (mysqli_query($conn, $sql)) {
		
		header('Location: tampilmhs.php');
	} else {
		echo "Gagal menyimpan perubahan ...";
	}
 

?>